<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeRegistrationController;
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

/* Route Step-1 */
//Route::view('register','registrationemployee');

/* Route Step-2 */
// Route::get('register',function(){
//     return view('registrationemployee');
// });

/* Route Step-3 */
Route::get('register',[EmployeeRegistrationController::class,'index']); 