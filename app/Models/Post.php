<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use Searchable;

    use HasFactory;
    protected $fillable = ['title', 'content', 'user_id', 'created_at', 'updated_at'];

    public function toSearchableArray()
    {
        $array = $this->only('title', 'content');

        return $array;
    }
}
