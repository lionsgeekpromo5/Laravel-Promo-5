<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::insert([
            // first row
                [
                    'name' => 'Ghita',
                    'age' => 20,
                    'class' => 'coding',
                    'attendence' => true

                ],
                // second row
                [
                    'name' => 'Ahmed',
                    'age' => 22,
                    'class' => 'coding',
                    'attendence' => false
                ],
        ]);
        
    }
}
