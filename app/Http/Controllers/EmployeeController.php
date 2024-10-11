<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        // $employees = DB::table('employees')->get();



        $employees = DB::table('employees')
            ->latest()
            ->get();


        // $employees = DB::table('employees')
        // ->whereBetween('age', [18, 20])
        // ->get();


        // $employees = DB::table('employees')->where('age', '=', 20 )->get();


        // $employees = DB::table('employees')->where('age', '<', 20)
        //     ->where('city', '=', 'Berlin')
        //     ->where('department', '=', 'CSE')
        //     ->get();


        // $employees = DB::table('employees')
        //     ->where([
        //         ['city', '=', 'Berlin'],
        //         ['age', '=', '20'],
        //     ])
        //     ->get();



        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->department = $request->department;
        $employee->city = $request->city;
        $employee->age = $request->age;


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('employees', 'public');
            $employee->image = $imagePath;
        }

        $employee->sex = $request->sex;
        $employee->save();

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)

    {
        // $employee = DB::table('employees')->where('id', $id)->first();
        $employee = DB::table('employees')->find($id);
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)

    {

        // dd($id);
        
        $employee = DB::table('employees')->where('id', $id)->delete();

        return redirect()->back();


        // $employee = Employee::find($id);
        // if( $employee){
        //     $employee->delete();
        // }


    }
}
