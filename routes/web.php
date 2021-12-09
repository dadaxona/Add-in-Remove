<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AmaliyController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\PradutController;
use App\Http\Controllers\Prod2Controller;
use App\Http\Controllers\PriblController;
use App\Http\Controllers\Tekcontroller;
use App\Http\Controllers\KarzinaController;
use App\Http\Controllers\AddRemoveFieldController;


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

//Add Remowe
Route::get("addmore",[AddRemoveFieldController::class ,'index'])->name('addmore');
Route::post('addRemove', [AddRemoveFieldController::class, 'store'])->name('addRemove');
Route::get('dobov', [AddRemoveFieldController::class, 'dobov'])->name('dobov');
Route::post('ketmaket', [AddRemoveFieldController::class, 'create'])->name('ketmaket');

//Internet magazin
Route::get('indexkarzin/{clent}', [KarzinaController::class, 'index'])->name('indexkar');
Route::delete('delkarzin/{id}', [KarzinaController::class, 'delete'])->name('delkarzin');
Route::post('showkarzina', [KarzinaController::class, 'show'])->name('showkarzina');
Route::get('karz', [KarzinaController::class, 'karz'])->name('karz');
Route::post('kerzincreate', [KarzinaController::class, 'store'])->name('ketdi');

// Autharisation
Route::get('/login', [CustomAuthController::class,'login'])->name('login')->middleware('alreadyLoggedIn');
Route::get('/registration', [CustomAuthController::class,'registration'])->name('registration');
Route::post('/registr-user', [CustomAuthController::class,'registrUser'])->name('registr-user');
Route::post('login-user', [CustomAuthController::class,'loginuser'])->name('login-user');
Route::get('/dashbord', [CustomAuthController::class,'dashbord'])->middleware('isLoggedIn');
Route::get('/logaut', [CustomAuthController::class,'logaut']);


Route::get('/ind', [Tekcontroller::class, 'index']);
Route::post('/subscribe', [Tekcontroller::class, 'subscribe'])->name('subscribe');

Route::get("email", [MailerController::class, "email"])->name("email");

Route::post("send-email", [MailerController::class, "composeEmail"])->name("send-email");

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', [Tekcontroller::class, 'index'])->name('test');
Route::get('test2', [Tekcontroller::class, 'test2'])->middleware('id');
Route::post('cr', [Tekcontroller::class, 'create'])->name('cr-us');
Route::post('log', [Tekcontroller::class, 'log'])->name('log-us');
Route::get('pro', [Tekcontroller::class, 'pro'])->middleware('id2');
Route::get('admin', [Tekcontroller::class, 'admin'])->middleware('id2');
Route::get('logau', [Tekcontroller::class, 'logaut']);

// Route::post('creat',[UpdateController::class,'create']);
// Route::get('qw',[UpdateController::class,'show']);
// Route::get('qwe/{id}',[UpdateController::class,'edit']);
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/feedback', [FeedbackController::class,'send'])->name('feedback.send');

Route::get('jami',[PradutController::class,'index']);
Route::post('prod',[PradutController::class,'create'])->name('jonat');
Route::get('p2',[PradutController::class,'show']);
Route::get('ed/{id}',[PradutController::class,'edit']);
Route::post('upda/',[PradutController::class,'update'])->name('updatename');
Route::get('ddeel/{id}',[PradutController::class,'delete']);



Route::get('w1',[Prod2Controller::class,'show']);
Route::get('ww',[Prod2Controller::class,'show3']);
Route::get('ww2',[Prod2Controller::class,'show4']);
Route::get('w2',[Prod2Controller::class,'show2']);


Route::get('www',[PriblController::class,'show4']);
Route::post('w3',[PriblController::class,'update']);
Route::get('d/{id}',[PriblController::class,'delete']);

 //topshiriq
Route::get('amal', [AmaliyController::class,'amal']);
Route::get('show', [AmaliyController::class,'show']);
Route::post('jonat', [AmaliyController::class,'create']);


//Bimomo routlari


// Route::view('e','e');
Route::get('e',[NewController::class, 'e']);
Route::get('list',[NewController::class,'show']);
Route::get('sho/{id}',[NewController::class,'sho']);
Route::get('add',[NewController::class,'addbinomo']);
Route::get('edit/{id}',[NewController::class,'edit']);
Route::post('create',[NewController::class,'create']);
Route::post('edit',[NewController::class,'update']);
Route::get('delete/{id}',[NewController::class,'delete']);




// Route::get('doska',[UpdateController::class,'doska']);
Route::post('creat',[UpdateController::class,'create']);
Route::get('qw',[UpdateController::class,'show']);
Route::get('qwe/{id}',[UpdateController::class,'edit']);
Route::post('upd',[UpdateController::class,'update']);
Route::get('del/{id}',[UpdateController::class,'delete']);
Route::get('api',[ApiController::class,'index']);

// Tek
Route::get('tek', [Tekcontroller::class, 'tek']);