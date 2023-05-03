<?php

namespace Database\Seeders;

use App\Models\Year;
use App\Models\Result;
use App\Models\Semister;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Year::create([
            'year' => 2015,
        ]);
        Year::create([
            'year' => 2016,
        ]);

        Semister::create([
            'name' => 'cse'
        ]);
        Semister::create([
            'name' => 'eee'
        ]);

        Result::create([
            'year_id' => 1,
            'semister_id' => 1,
            'content' => 'This is cse result'
        ]);
        Result::create([
            'year_id' => 2,
            'semister_id' => 2,
            'content' => 'This is eee result'
        ]);

    }
}
