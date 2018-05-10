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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', function () {
    return view('blog');
});

//http://localhost:8000/hello/นาจา  //view = Hi, I Am Beginner In Laravel นาจาา
Route::get('hello/{value}',function ($value) {
    return "Hi, I Am Beginner In Laravel ".$value;
});

// get parameter without controller
/*Route::get('/', function () {
    return view('registerwithoutcontroller'); // โหลด register view แสดง html form ในครั้งแรก
});
Route::post('registerwithoutcontroller',function (Request $request) {
	$name = $request->input('name'); // รับตัวแปร name จาก html form
	$data = array(
		'name' => $name
	);
    return view("registerwithoutcontroller",$data); // return ค่าออกไปแสดงที่ register view
});*/

Route::get('/',"RegisterController@index"); 
Route::post('register',"RegisterController@save");

Route::get('check-connect',function(){
 if(DB::connection()->getDatabaseName())
 {
 return "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
 }else{
 return 'Connection False !!';
 }
 
});

Route::resource('product', 'ProductController');


