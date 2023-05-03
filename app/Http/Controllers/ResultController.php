<?php

namespace App\Http\Controllers;

use App\Models\Year;
use App\Models\Result;
use App\Models\Semister;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        $years = Year::get();
        $semisters = Semister::get();
        return view('welcome', compact('years', 'semisters'));
    }



    public function getResultQuery(Request $request)
    {

        $year = $request->year;
        $semister = $request->semister;

        $query = Result::query();

        if ($year) {
            $query->where("year_id", $year);
        }
        if ($semister) {
            $query->where("semister_id", $semister);
        }
        $semister = $query->with('getYear','getSemister')->get();

        dd($semister);
    }
}
