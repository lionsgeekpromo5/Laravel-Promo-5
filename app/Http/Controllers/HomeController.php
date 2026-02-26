<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //* function or methods of the class

    //? function that returns home view
    public function index(){

        $username = 'sara';
        $city = 'Mohammedia';
        $age = 29;
        $skills = ['React', 'Laravel', 'Css'];
        
        
        // return view('home', compact('username', 'city', 'age', 'skills'));
        return view('home', [
            'name' => $username,
            'age' => $age,
            'skills' => $skills
        ]);
    }



    




}
