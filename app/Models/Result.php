<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;


    protected $fillable = [
        'year_id',
        'semister_id',
        'content',
    ];



    function getYear()
    {
        return $this->belongsTo(Year::class, 'year_id');
    }
    function getSemister()
    {
        return $this->belongsTo(Semister::class, 'semister_id');
    }
}
