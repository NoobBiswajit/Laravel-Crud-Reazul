<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;
class StudentController extends Controller
{
    public function index(){

        $students=StudentModel::all();
        return view('StudentList', compact('students'));


    }

    public function AddStudent(){
        return view('AddStudent');
    }

    public function createStudent(Request $request){

     $request->validate([
        'name'=>'required',
        'email'=>'required|unique:students,email',
        'phone'=>'required|min:11|max:11 |unique:students,phone',


     ],[
        'name.required'=>'Name fild can not be empty',
        'email.required'=>'Email fild can not be empty',
        'phone.required'=>'Phone fild can not be empty'
     ]);

     //Data insert
    //  StudentModel::create($request->all()); (way-01)

    $student = new StudentModel();
    $student->name=$request->name;
    $student->email=$request->email;
    $student->phone=$request->phone;
    $student->save();
    return redirect()->route('student.list')->with('info', 'Data Inserted Success');
    }


    public function editStudent($id){
        $student=StudentModel::find($id);
        return  view('EditStudent',compact('student'));
    }

    public function updateStudent( Request $request){
        $student=StudentModel::find($request->id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();
        return redirect()->route('student.list');
    }


    public function deleteStudent($id){
        $student=StudentModel::find($id);
        $student->delete();
        return redirect()->route('student.list')->with('info' , 'Data Delete Success');

    }
}
