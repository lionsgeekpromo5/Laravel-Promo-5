<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //* function or methods of the class

    //? function that returns home view
    public function index(){

        $city = 'Mohammedia';
        $skills = ['React', 'Laravel', 'Css'];
        $studentsList = Student::where('class', 'media')->get();
        $firstStudent = Student::first();
        $thirdStudent = Student::where('id' , 3)->get();
        dd($thirdStudent);

        
        
        // return view('home', compact('username', 'city', 'age', 'skills'));
        return view('home', [
            'skills' => $skills,
            'studentsList' => $studentsList
        ]);
    }



    




}
