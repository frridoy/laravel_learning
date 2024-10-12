<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DB::table('students')
            ->leftJoin('cities', 'students.city_id', '=', 'cities.id')
            ->select('students.*' , 'cities.city_name')
            // ->where('students.stu_name', '=' , 'Humayon Mia')
            // ->where('cities.city_name', '=' , 'Khulna')
            ->get();

        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = DB::table('cities')->get();
        return view('student.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // insert query 

        DB::table('students')->insert([
            'stu_name' => $request->stu_name,
            'stu_email' => $request->stu_email,
            'city_id' => $request->city_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('students.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
