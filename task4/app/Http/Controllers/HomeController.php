<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $students = [
            ['name' => 'John', 'age' => 20],
            ['name' => 'Jane', 'age' => 21],
            ['name' => 'Bob', 'age' => 22],
        ];
        return view('home',['students' => $students]);
    }
}
