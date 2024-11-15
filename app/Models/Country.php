<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Country extends Model
{
    use Searchable;

    use HasFactory;
    protected $table = 'countries';
    protected $fillable = ['name', 'capital', 'continent'];

    public function toSearchableArray()
    {
        $array = $this->only('name', 'capital');

        return $array;
    }
}
