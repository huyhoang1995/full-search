<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Student extends Model
{
    //
    use Searchable;

    const TYPE_SEARCH_NAME = 'TYPE_SEARCH_NAME';
    const TYPE_SEARCH_NAME_FULL = 'TYPE_SEARCH_NAME_FULL';
    const TYPE_SEARCH_NAME_EMAIL_FULL = 'TYPE_SEARCH_NAME_EMAIL_FULL';

    protected $table = 'students';
    protected $fillable = ['name', 'email']; // Add the fields you want to allow for mass assignment


    public function toSearchableArray()
    {
        $array = $this->only('name', 'email');

        return $array;
    }
}
