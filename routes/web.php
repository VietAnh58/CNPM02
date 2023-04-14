<?php

use App\Http\Controllers\fontend\WebController;
use App\Models\MenuTop;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[WebController::class, 'index']);



// Route::get('/index1', function () {
//     $Menu = MenuTop::table('users')->get();
//     // $Menuid = MenuTop::table('MenuId')->get();
//     // $Title = MenuTop::table('Title')->get();
//     // $Alias = MenuTop::table('Alias')->get();
//     // $Descripton = MenuTop::table('Descripton')->get();
//     // $Position = MenuTop::table('Position')->get();
//     // $CreatedDate = MenuTop::table('CreatedDate')->get();
//     // $IsActive = MenuTop::table('IsActive')->get();
//     return view('MenuTop', ['MenuTop' => $Menuid], ['MenuTop' => $Title],['MenuTop' => $Alias],['MenuTop' => $Descripton],['MenuTop' => $Position], ['MenuTop' => $CreatedDate], ['MenuTop' => $IsActive]);
// });

