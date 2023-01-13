<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ShowArticle;
use App\Http\Controllers\ViewJurnalInformation;
use App\Http\Controllers\ViewObjectivesAndAxes;
use App\Http\Controllers\ViewReferees;

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

Route::get('/', Index::class)->name("index");

Route::get("/show-article/{id}" , ShowArticle::class)->name("show-article") ; 


Route::get("/logout" , LogoutController::class)->name("logout") ;

Route::get("/panels" , function(){})->middleware(["auth" , "RedirectOnAuthority"])->name("panel") ;


Route::get("اهداف-و-محورهای-مجله" , ViewObjectivesAndAxes::class)->name("objectives-and-axes") ;

Route::get("اطلاعات-مجله" , ViewJurnalInformation::class)->name("jurnal-information") ;
Route::get("داوران" , ViewReferees::class)->name("referees") ;

Route::get("developers" , function(){
    return view("developers");
})->name("developers") ;



// Route::get('/forgot-password', Index::class)->name("index");
// Route::get('/', Index::class)->name("index");