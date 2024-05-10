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
Route::prefix('/mp')->group(function(){
    Route::get('/neemuch', function (){
        return view ('mp.neemuch');
    });
    Route::get('/indore', function (){
        return 'Hello from indore ';
    });
    Route::get('/ratlam', function (){
        return 'Hello from ratlam ';
    });
    Route::get('/bhpal', function (){
        return 'Hello from bhopal ';
    });
    Route::get('/kanjarda', function (){
        return 'Hello from kanjarda ';
    });
    Route::get('/manasa', function (){
        return 'Hello from manasa ';
    });
});