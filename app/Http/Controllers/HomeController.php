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
        $studentsList = Student::all();
        
        
        // return view('home', compact('username', 'city', 'age', 'skills'));
        return view('home', [
            'skills' => $skills,
            'studentsList' => $studentsList
        ]);
    }



    




}
