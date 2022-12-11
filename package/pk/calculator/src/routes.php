<?php
use Illuminate\Support\Facades\Route;
use pk\calculator\CalculatorController;


Route::get('/calculator',function (){
   echo 'Hello Calculator';
});
Route::get('add/{a}/{b}',[CalculatorController::class,'add']);
Route::get('subtract/{a}/{b}',[CalculatorController::class,'subtract']);

