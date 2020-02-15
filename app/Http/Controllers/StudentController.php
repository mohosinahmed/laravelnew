<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function create(){
        return view('student.create');
    }
    
    public function index(){
        $students = Student::all();
        return view('student.index', compact('students'));
    }
    
    public function storeStudent(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',       
            'phone' => 'required',       
        ]);
        
        $students = new Student;
        $students->name = $request->name;
        $students->email = $request->email;
        $students->phone = $request->phone;
        $students->save();
        
        $notification = array(
            'messege' => 'Succefully student inserted',
            'alert-type' => 'success',
        );
        return Redirect()->back()->with($notification);
    }
}
