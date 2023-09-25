<?php

use App\Models\banner;
use Illuminate\Routing\RouteGroup;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use phpDocumentor\Reflection\Types\Resource_;
use App\Http\Controllers\backend\logoController;
use App\Http\Controllers\backend\bannerController;
use App\Http\Controllers\backend\courseController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\seminarController;
use App\Http\Controllers\frontend\contactController;
use Illuminate\Http\Resources\Json\ResourceResponse;
use App\Http\Controllers\frontend\frontendController;
use App\Http\Controllers\backend\imgseminarController;
use App\Http\Controllers\backend\postController;
use App\Http\Controllers\backend\registrationController;
use App\Http\Controllers\backend\seminarleadController;
use App\Http\Controllers\backend\textController;

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

Route::get('/',[frontendController::class,'index'])->name('frontend.home');

//--------castomar contact-------//
Route::post('/contact',[contactController::class, 'store'])->name('contact.store');
Route::post('/seminarlead',[seminarleadController::class, 'store'])->name('seminarlead.store');

//-------registration-----------//
Route::post('/registration',[registrationController::class, 'registration'])->name('registration.post');

    


Auth::routes(['verify' => true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('deshboard')->name('deshboard.')->group(function () {
    
    Route::get('/', [BackendController::class, 'index'])->name('home');

//------Add-----banner-----------//
   
    Route::resource('/banner', bannerController::class);
    Route::get('/banner/restore/{id}',[bannerController::class, 'bannerRestore'])->name('banner.restore');
    Route::get('/banner/PermanentDelete/{id}',[bannerController::class, 'PermanetDelete'])->name('banner.PermanentDelete');


//-----only---admin&editor-----Access-Route---//
Route::group(['middleware' => ['role:admin',]], function () {
        
       
//----------Logo------------//
    Route::get('/logo/edit',[logoController::class, 'index'])->name('logo.index');
    Route::PUT('/logo/update/{id}',[logoController::class, 'update'])->name('logo.update');

//----------course----------//
    Route::resource('/course', courseController::class);

//----------seminar----------//
    Route::resource('/seminar', seminarController::class);

//-----seminar---image----------//
    Route::get('/seminarimage',[imgseminarController::class, 'index'])->name('imgseminar.index');
    Route::POST('/seminarimage/edit/{id}',[imgseminarController::class, 'edit'])->name('imgseminar.edit');
    
//post_create//
    Route::get('/All_post',[postController::class, 'allpost'])->name('all.post');
    Route::get('/post_create',[postController::class, 'create'])->name('create.post');
    Route::post('/post_store',[postController::class, 'store'])->name('store.post');
    
});

//------Only--admin-Access---Route--------------//
//----------Role&Permition----route----//

Route::group(['middleware' => ['role:admin']], function () {
        
    Route::get('/permition',[textController::class,'text'])->name('text.home');
    Route::get('/permition',[textController::class,'rolepermition'])->name('all.role');
    Route::post('/permition',[textController::class,'addpermition'])->name('add.permition');
    Route::get('/create_permiton_to_role/{id}',[textController::class,'create_permition_to_role'])->name('create.assign');
    Route::post('/store_permition_to_role/{id}',[textController::class,'store_permition_to_role'])->name('store.assign');
});
    
    
});





  







