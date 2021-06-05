<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/emp_add', function () {
    return view('employees.addEmp');
});

Route::get('/allEmployees','AdminController@viewEmployees');

Route::get('viewEmp/{id}','AdminController@viewEmpData');
Route::get('deleteEmp/{id}','AdminController@deleteEmp');

Route::post('/addNewEmp','AdminController@addNewEmp');
