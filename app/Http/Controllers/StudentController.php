<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{

    private $studentModel;
    public function __construct(Student $studentModel)
    {
        $this->studentModel = $studentModel;
    }
    //
    function getList(Request $request)
    {
        $typeSearch = $request->filter_type ?? null;
        $students = $this->studentModel->query();

        switch ($typeSearch) {
            case Student::TYPE_SEARCH_NAME:
                if ($request->filled('name')) {
                    $students = $students->where('name', $request->name)->paginate(10);
                } else {
                    $students = [];
                }

                break;

            case Student::TYPE_SEARCH_NAME_FULL:

                if ($request->filled('name')) {
                    $students =  $students->where('name', 'like', '%' . $request->name . '%')->paginate(10);
                } else {
                    $students = [];
                }
                break;

            case Student::TYPE_SEARCH_NAME_EMAIL_FULL:
                if ($request->filled('full_text')) {
                    $students = $this->studentModel->where(function ($query) use ($request) {
                        $query->where('name', 'like', '%' . $request->full_text . '%')
                            ->orWhere('email', 'like', '%' . $request->full_text . '%');
                    })->paginate(10);
                } else {
                    $students = [];
                }

                break;

            default:
                $students = $this->studentModel->paginate(10);
                break;
        }

        return view('algolia.fullSearch', ['students' => $students]);
    }
    public function searchScout(Request $request)
    {
        $params = $request->get('search') ?? null;

        // Check if search term is provided, use Scout search, else use regular pagination
        $students = $params ? Student::search($params)->paginate(10) : Student::paginate(10);

        // Dump and debug the result before rendering the view
        // dd($students);

        return view('algolia.scoutSearch', ['students' => $students]);
    }

    function addStudent()
    {
        return view('algolia.addStudent');
    }
    function storeStudent(Request $request)
    {
        try {
            $params = [
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address
            ];
            $student = Student::create($params);

            // Add the student to the search index
            $student->searchable();
            return redirect()->route('list-posts')->with('success', 'Record added successfully.');

            return back();
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }

    function deleteStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->unsearchable();
        $student->delete();
        return redirect()->route('list-posts')->with('success', 'Record deleted successfully.');
    }
}
