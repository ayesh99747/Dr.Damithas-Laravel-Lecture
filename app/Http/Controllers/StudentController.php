<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view("student.list",compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = new Student();
        return view("student.add",compact('student'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'regno.required' => 'registartion number  cannot be blank',
        ];

        $this->validate($request,[
            "regno"=>"required|min:5",
            "title"=>"required"
        ],$messages);


        $student = new Student();
        $student->regno = $request->get('regno');
        $student->title = $request->get('title');
        $student->lastname = $request->get('lastname');
        $student->initials = $request->get('initials');
        $student->gender = $request->get('gender');
        $student->email =$request->get('email');
        $student->save();
        session()->flash('message', 'Record saved!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $action ="Show";
        return view("student.student",compact('student',"action"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);

        return view("student.edit",compact('student','id'));
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
        $student = Student::find($id);
        $student->regno = $request->get('regno');
        $student->title = $request->get('title');
        $student->lastname = $request->get('lastname');
        $student->initials = $request->get('initials');
        $student->gender = $request->get('gender');
        $student->email =$request->get('email');
        $student->save();
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
