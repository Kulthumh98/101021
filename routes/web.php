<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('101021.homepage');
});
Route::get('/student', function () {
    return view('101021.studentview');
});
Route::get('/fees', function () {
    return view('101021.feesview');
});
//Route::post('/studentregistration', function () {
  //  return view('101021.homepage');
//});
Route::get('/search', function () {
    return view('101021.searchstudent');
});
Route::get('/viewstudents', function () {
    return view('101021.registeredstudents');
});
Route::get('/home', function () {
    return view('101021.homepage');
});
//Route::post('/feepayment', function () {
  //  return view('101021.homepage');
//});
Route::post('/feepayment','FeesController@newFeePayment');
Route::post('/studentregistration','StudentsController@newStudent');
Route::get('/viewstudents','RegisteredStudentsController@fetchStudents');
Route::post('/search','StudentsController@particularStudent');
