<?php

use Illuminate\Support\Facades\Route;
use App\Models\Test;
use App\Models\Tests;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/tests', function () {
          $students = [ 
            'users'=> Tests::all()
          ];

    return view('test',$students);
});

Route::get('/tests/{id}', function ($id){
    
      // $students=[
      //     [
      //       'id'=>1,
      //       'name'=>'Sara',
      //       'mobile'=>'637248900',
      //       'city'=>'Egypt',
      //       'email'=>'sara@gmail.com',
      //     ],
      //     [
      //       'id'=>2,
      //       'name'=>'Ahmed',
      //       'mobile'=>'637248900',
      //       'city'=>'Cairo',
      //       'email'=>'ahmed@gmail.com',
      //     ]

      //     ];


      // foreach($students as $student){
      //   if($id == $student['id']){
      //        return  view('tests',$student);
      //   }
      // }
      $student = Tests::find($id);
      return view('tests',$student);

});

