<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class NewController extends Controller
{
    public function index() {
        $users=Student::first();
        return view('test',['users'=>$users]);    
    }
}
