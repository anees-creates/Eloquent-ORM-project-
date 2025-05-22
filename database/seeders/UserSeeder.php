<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = database_path('json/users.json');
         if (!File::exists($jsonPath)) {
            // Log an error message if the file is not found
            $this->command->error("JSON data file not found: {$jsonPath}");
            return; // Stop the seeder if the file isn't there
        }
        $json = File::get($jsonPath);
        $users = collect(json_decode($json));
        $users->each(function ($user) {
          DB::table('users')->insert([
              'name' => $user->name,
              'email' => $user->email,
              'age' => $user->age,
              'city' => $user->city,
                
              
          ]);
      });
    }
}
