<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //


    public function listPosts(Request $request)
    {
        $params = $request->get('query') ?? null;

        $posts = Post::search($params)->paginate(10);

        return view('meilisearch.index', ['posts' => $posts]);
    }

    function addPost()
    {
        return view('meilisearch.add');
    }
    function storePost(Request $request)
    {
        try {
            $params = [
                'title' => $request->title,
                'content' => $request->content,
                'user_id' => rand(1, 10),
            ];
            $postInfo = Post::create($params);

            // Add the post to the search index
            $postInfo->searchable();
            return redirect()->route('list-posts')->with('success', 'Record added successfully.');

            return back();
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }
    function deletePost($id)
    {
        $postInfo = Post::findOrFail($id);
        $postInfo->unsearchable();
        $postInfo->delete();
        return redirect()->route('list-scout')->with('success', 'Record deleted successfully.');
    }
}
