<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentModel;
use App\FeesModel;
use DB;

class StudentsController extends Controller
{
  public function newStudent(){
      $this->validate(request(),[
       'studentnumber'=>'required',
       'fullname'=>'required',
       'dob'=>'required',
       'address'=>'required',
      ]);
      
      $student= new StudentModel;
      $student->Student_Number = request('studentnumber');
      $student->Full_Name = request('fullname');
      $student->Date_Of_Birth = request('dob');
      $student->Address = request('address');
      $student->save();

      return view('101021.feesview');
     
      
      // dd($students);


  }
  public function particularStudent(){
    $searchstudent = request('searchstudents');
    $students = FeesModel::with('Student')->where('Student_Number', $searchstudent)->get();
    //$students = DB::select('select * from students where Student_Number = $searchstudent');
    //dd($students);
    return view('101021.searchstudent',['students'=>$students]);
    }
}
