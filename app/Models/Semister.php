<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semister extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];



    function getResults()
    {
        return $this->hasMany(Result::class);
    }
}
