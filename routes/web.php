<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WebsiteController;
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
//website
Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/servicelist', [WebsiteController::class, 'servicelist'])->name('servicelist');
Route::get('/productlist/{category?}', [WebsiteController::class, 'productlist'])->name('productlist');
Route::get('/fire-hydrant-installation', [WebsiteController::class, 'firehydrantinstallation'])->name('firehydrantinstallation');
Route::get('/fire-hydrant-system-installation-service', [WebsiteController::class, 'firehydrantsysteminstallationservice'])->name('firehydrantsysteminstallationservice');
Route::get('/sign-board-installation-service', [WebsiteController::class, 'signboardinstallationservice'])->name('signboardinstallationservice');
Route::get('/fire-extinguisher-installation-service', [WebsiteController::class, 'fireextinguisherinstallationservice'])->name('fireextinguisherinstallationservice');
Route::get('/product/{url}', [WebsiteController::class, 'productdetails'])->name('productdetails');
Route::get('/websiteblog', [WebsiteController::class, 'websiteblog'])->name('websiteblog');
Route::get('/blog/{url}', [WebsiteController::class, 'blogdetails'])->name('blogdetails');
Route::get('/websitegallery', [WebsiteController::class, 'websitegallery'])->name('websitegallery');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::post('/insertenquiry', [WebsiteController::class, 'insertenquiry'])->name('insertenquiry');
Route::get('/ensuring-safety-with-fixed-lifeline', [WebsiteController::class, 'ensuringsafetywithfixedlifeline'])->name('ensuringsafetywithfixedlifeline');


//adminpannel
Route::get('/adminlogin', [AuthenticationController::class, 'login'])->name('login');
Route::post('/logincheck', [AuthenticationController::class, 'logincheck'])->name('logincheck');
Route::middleware('auth')->group(function () {
Route::get('/enquiry', [WebsiteController::class, 'enquiry'])->name('enquiry');

    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin', [AuthenticationController::class, 'admin'])->name('admin');
    Route::post('/insertadmin', [AuthenticationController::class, 'insertadmin'])->name('insertadmin');
    Route::post('/updateadmin', [AuthenticationController::class, 'updateadmin'])->name('updateadmin');
    Route::post('/editadmin', [AuthenticationController::class, 'editadmin'])->name('editadmin');
    Route::get('/latestnews', [PageController::class, 'latestnews'])->name('latestnews');
    Route::post('/updatelatestnews', [PageController::class, 'updatelatestnews'])->name('updatelatestnews');
    Route::post('/inactivelatestmessage', [PageController::class, 'inactivelatestmessage'])->name('inactivelatestmessage');
    Route::post('/reactivelatestmessage', [PageController::class, 'reactivelatestmessage'])->name('reactivelatestmessage');
    Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
    Route::post('/uploadimage', [PageController::class, 'uploadimage'])->name('uploadimage');
    Route::post('/getgallery', [PageController::class, 'getgallery'])->name('getgallery');
    Route::post('/addcategory', [PageController::class, 'addcategory'])->name('addcategory');
    Route::post('/editimage', [PageController::class, 'editimage'])->name('editimage');
    Route::post('/deletegallery', [PageController::class, 'deletegallery'])->name('deletegallery');
    Route::get('/catalogue', [PageController::class, 'catalogue'])->name('catalogue');
    Route::post('/uploadcatalogue', [PageController::class, 'uploadcatalogue'])->name('uploadcatalogue');
    Route::post('/deletecatalogue', [PageController::class, 'deletecatalogue'])->name('deletecatalogue');
    Route::get('/blog', [PageController::class, 'blog'])->name('blog');
    Route::post('/addblog', [PageController::class, 'addblog'])->name('addblog');
    Route::post('/editblog', [PageController::class, 'editblog'])->name('editblog');
    Route::post('/updateblog', [PageController::class, 'updateblog'])->name('updateblog');
    Route::post('/deleteblog', [PageController::class, 'deleteblog'])->name('deleteblog');
    Route::get('/mainproduct', [PageController::class, 'mainproduct'])->name('mainproduct');
    Route::post('/insertmainproduct', [PageController::class, 'insertmainproduct'])->name('insertmainproduct');
    Route::post('/editmainproduct', [PageController::class, 'editmainproduct'])->name('editmainproduct');
    Route::post('/updatemainproduct', [PageController::class, 'updatemainproduct'])->name('updatemainproduct');
    Route::post('/deletemainproduct', [PageController::class, 'deletemainproduct'])->name('deletemainproduct');
    Route::get('/subproduct', [PageController::class, 'subproduct'])->name('subproduct');
    Route::post('/insertsubproduct', [PageController::class, 'insertsubproduct'])->name('insertsubproduct');
    Route::post('/editsubproduct', [PageController::class, 'editsubproduct'])->name('editsubproduct');
    Route::post('/updatesubproduct', [PageController::class, 'updatesubproduct'])->name('updatesubproduct');
    Route::post('/deletesubproduct', [PageController::class, 'deletesubproduct'])->name('deletesubproduct');
    Route::get('/logout', [PageController::class, 'logout'])->name('logout');
});
