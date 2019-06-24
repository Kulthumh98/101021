<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\FeesModel;
use App\StudentModel;


class RegisteredStudentsController extends Controller
{
    public function fetchStudents(){

    $students = StudentModel::has('Fees')->withCount([
        "fees as total_fees" => function($total){
            $total->select(DB::Raw('sum(Amount)'));
        }
    ])->get();
    //dd($students);
    return view('101021.registeredstudents',['students'=>$students]);
    }
}


