<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pradeep', function () {
    $data = ['name'=>'pradeep','surname'=>'prajapati'];
    return view('pradeep',$data);
});
Route::get('/myfriend', function () {
    return view('myfriend');
}); 
Route::get('/student',[StudentController::class,'student1']
);