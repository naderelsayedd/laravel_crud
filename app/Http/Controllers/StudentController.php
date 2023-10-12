<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students ;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Students = Students::all();
        return view('student.index', compact('Students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Students() ;
        $student->name = $request->name ;
        $student->level = $request->level ;
        $student->grade = $request->grade ;
        $student->GPA = $request->gpa ;

        $student->save();
        return redirect()->back()->with("done" , "Insert Successfully !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student =Students::find($id);
        return view('student.edit' , compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student =Students::find($id);
        $student->name = $request->name ;
        $student->level = $request->level ;
        $student->grade = $request->grade ;
        $student->GPA = $request->gpa ;

        $student->save();
        return redirect()->route('student.index')->with("done" , "Updated Successfully !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student =Students::find($id);
        $student->delete();
        return redirect()->route('student.index')->with("done" , "Deleted Successfully !");

    }
}
