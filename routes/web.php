<?php
use App\Http\Controllers\loginconroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
Route::get('/dashboard',[loginconroller::class,'dashboard']);
Route::get('/login',[loginconroller::class,'index']);
Route::get('/singup',function (){return view('Form.signup');});
Route::post('/custom-login',[loginconroller::class,'customlogin']);
Route::post('/custom-registration',[loginconroller::class,'customRegistration']);
