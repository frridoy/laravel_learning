<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function viewAll(){
        $students = DB::table('students')
        ->join('cities', 'students.city_id', '=', 'cities.id')
        ;

        $teachers = DB::table('teachers')
        ->join('cities', 'teachers.city_id', '=', 'cities.id')
        ->union($students)
        ->get();

        return view('all.list', compact('teachers'));
        
    }
}
