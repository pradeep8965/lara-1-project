<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class entends parent class
class StudentController extends Controller
{
    //1, property

    //2. constructer

    //3. method
    public function student1(){

        $data = ['name'=> 'student1','surname'=>'student123'];   
        return view ('student1',$data);
    }
}
