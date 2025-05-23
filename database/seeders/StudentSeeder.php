<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->truncate();
        $jsonPath = database_path('json/students.json');
         if (!File::exists($jsonPath)) {
            // Log an error message if the file is not found
            $this->command->error("JSON data file not found: {$jsonPath}");
            return; // Stop the seeder if the file isn't there
        }
        $json = File::get($jsonPath);
        $students= collect(json_decode($json));
        $students->each(function ($student) {
          DB::table('students')->insert([
              'name' => $student->name,
              'age' => $student->age,
              'city' => $student->city,
              'created_at' => now(),
                'updated_at' => now(),
                
              
          ]);
      });
    }
}
