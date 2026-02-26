<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //* function or methods of the class

    //? function that returns home view
    public function index(){

        $city = 'Mohammedia';
        $skills = ['React', 'Laravel', 'Css'];
        
        
        // return view('home', compact('username', 'city', 'age', 'skills'));
        return view('home', [
            'skills' => $skills
        ]);
    }



    




}
