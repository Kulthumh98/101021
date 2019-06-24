<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeesModel;
use App\StudentModel;

class FeesController extends Controller
{
    public function newFeePayment(){
        $this->validate(request(),[
            'studentnumber'=>'required',
            'dop'=>'required',
            'amountpaid'=>'required'
          
           ]);

           $student = StudentModel::where('Student_Number', request('studentnumber'))->firstOrFail();
           //dd($student->id);
           //dd(request());
        $fee = new FeesModel;
        $fee->Student_Number = request('studentnumber');
        $fee->Date_Of_payment = request('dop');
        $fee->Amount = request('amountpaid');
        $fee->Student_id = $student->id;
        $fee->save();
        return view('101021.studentview');
        

    }
}
