<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

// main pages
use App\Http\Controllers\frontEnd\HomeController;
use App\Http\Controllers\frontEnd\ServicesController;
use App\Http\Controllers\frontEnd\AboutController;
use App\Http\Controllers\frontEnd\ProductController;
use App\Http\Controllers\frontEnd\ProjectsController;
use App\Http\Controllers\frontEnd\PortfolioController;
use App\Http\Controllers\frontEnd\ContactController;

// service pages
use App\Http\Controllers\frontEnd\services\appServiceController;
use App\Http\Controllers\frontEnd\WebServiceController;
use App\Http\Controllers\frontEnd\services\digiMartServicesController;
use App\Http\Controllers\frontEnd\services\SoftDepServicesController;
use App\Http\Controllers\frontEnd\services\SysAdmServicesController;
use App\Http\Controllers\frontEnd\services\GrapDesignServicesController;


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
// ======================
//  FrontEnd
// =====================
// main pages
Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
// Route::get('/about', 'App\Http\Controllers\frontEnd\AboutController@index');
Route::get('/services',[ServicesController::class,'index']);
Route::get('/products',[ProductController::class,'index']);
Route::get('/portfolio',[PortfolioController::class,'index']);
Route::get('/projects',[ProjectsController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);


// Service pages routing

Route::get('/MobAppServices',[appServiceController::class,'index']);
Route::get('/WebDepServices',[WebServiceController::class,'index']);
Route::get('/digiMartServices',[digiMartServicesController::class,'index']);
Route::get('/GrapDesignServices',[GrapDesignServicesController::class,'index']);
Route::get('/SoftDepServices',[SoftDepServicesController::class,'index']);
Route::get('/SysAdmServices',[SysAdmServicesController::class,'index']);

// product pages routing
// project pages routing
// ===============================
//  Admin Routing
// ===============================
// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('/home');

Route::group(['middleware' =>['auth','admin']], function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    // here @registered is function belongs to controller.
    Route::get('/role-register', 'App\Http\Controllers\Admin\DashboardController@registered');
    // edit role
    Route::get('/role-edit/{id}', 'App\Http\Controllers\Admin\DashboardController@registeredit');
    // update role
    Route::put('/role-register-update/{id}','App\Http\Controllers\Admin\DashboardController@registerupdate');


    //==============================
    //about-us
    Route::get('/about-us', 'App\Http\Controllers\Admin\AboutusController@index');
    //about-edit
    Route::get('/about-edit/{id}', 'App\Http\Controllers\Admin\AboutusController@edit');
    //about-save
    Route::post('/about-save', 'App\Http\Controllers\Admin\AboutusController@save');
    //about-update
    Route::put('/about-update/{id}', 'App\Http\Controllers\Admin\AboutusController@update');
    //about-Delete
    Route::delete('/about-delete/{id}', 'App\Http\Controllers\Admin\AboutusController@delete');

    //==============================
    // Focus
    //about-us
    // Route::get('/about-us', 'App\Http\Controllers\Admin\FocusController@index');
    //about-edit
    Route::get('/about-edit_focus/{id}', 'App\Http\Controllers\Admin\About\FocusController@edit');
    //add-focus
    Route::get('/about-add_focus', 'App\Http\Controllers\Admin\About\FocusController@add');
    //about-save
    Route::post('/about-store-focus', 'App\Http\Controllers\Admin\About\FocusController@store');
    //about-update
    Route::put('/about-update-focus/{id}', 'App\Http\Controllers\Admin\About\FocusController@update');
    //about-Delete
    Route::delete('/about-delete/{id}', 'App\Http\Controllers\Admin\About\FocusController@delete');



    //==============================
    // Global Content

    //about-us
    Route::get('/global-content', 'App\Http\Controllers\Admin\Global\ClientController@index');
    // - edit
    Route::get('/clients-edit/{id}', 'App\Http\Controllers\Admin\Global\ClientController@edit');
    //-add
    Route::get('/clients-add', 'App\Http\Controllers\Admin\Global\ClientController@add');
    //-save
    Route::post('/clients-save', 'App\Http\Controllers\Admin\Global\ClientController@store');
    //-update
    Route::put('/clients-update/{id}', 'App\Http\Controllers\Admin\Global\ClientController@update');
    //-Delete
    Route::delete('/clients-delete/{id}', 'App\Http\Controllers\Admin\Global\ClientController@delete');




    //==============================
    //Contact-us
    Route::get('/contact-us', 'App\Http\Controllers\Admin\ContactusController@index');
    //about-edit
    Route::get('/contact-edit/{id}', 'App\Http\Controllers\Admin\ContactusController@edit');
    //about-save
    Route::post('/contact-save', 'App\Http\Controllers\Admin\ContactusController@save');
    //about-update
    Route::put('/contact-update/{id}', 'App\Http\Controllers\Admin\ContactusController@update');
    //about-Delete
    Route::delete('/contact-delete/{id}', 'App\Http\Controllers\Admin\ContactusController@delete');

    //==============================
    //Home
    Route::get('/Admin-Home', 'App\Http\Controllers\Admin\Home\SliderController@index');
    Route::post('/home-slider', 'App\Http\Controllers\Admin\Home\SliderController@store');
    //about-edit
    Route::get('/slider-edit/{id}', 'App\Http\Controllers\Admin\Home\SliderController@edit');
    //about-update
    Route::put('/slider-update/{id}', 'App\Http\Controllers\Admin\Home\SliderController@update');
    //about-Delete
    Route::delete('/slider-delete/{id}', 'App\Http\Controllers\Admin\Home\SliderController@delete');




    // =================================
    //  Newsletter -admin
    // ==================================

    Route::get('/newsletter-admin', 'App\Http\Controllers\Admin\Newsletter\NewsletterController@index');
});

//contact-uk-message

Route::get('/contact-us-uk', 'App\Http\Controllers\frontEnd\Contact\UkContactController@index');
Route::post('/contact-uk', 'App\Http\Controllers\frontEnd\Contact\UkContactController@store');

//contact-pk-message

Route::get('/contact-us-pk', 'App\Http\Controllers\frontEnd\Contact\pkContactController@index');
Route::post('/contact-pk', 'App\Http\Controllers\frontEnd\Contact\pkContactController@store');

//Newsletter

Route::get('/demo', 'App\Http\Controllers\frontEnd\demoController@index');
// Route::get('/newsletter', 'App\Http\Controllers\frontEnd\demoController@index');
Route::post('/newsletter-sending', 'App\Http\Controllers\frontEnd\demoController@store');


