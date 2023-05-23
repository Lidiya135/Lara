<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'lia', 'score' => 80],   
            ['id' => 2, 'name' => 'dwi', 'score' => 85],   
            ['id' => 3, 'name' => 'dona', 'score' => 90],   
        ];

        DB::table('students')->insert($data);
    }
}
