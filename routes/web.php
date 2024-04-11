<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;





Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified' , 'normal'])->name('dashboard');

//Route::view('admin/index', 'admin.index')->middleware(['auth' , 'verified', 'admin'])->name('admin.index');


Route::middleware(['auth'])->group(function () {
    Route::get('/dash', [AdminController::class, 'index'])->name('admin.index');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





Route::get('/showtime', [AdminController::class, 'form'])->name('form');
Route::get('/home/data', [AdminController::class, 'datas'])->name('homedash');
Route::get('/user/data', [AdminController::class, 'userdata'])->name('userdata');
Route::get('/user/form', [AdminController::class, 'dawakari'])->name('userform');
Route::get('/user/data/{userId}', [AdminController::class, 'viewUser'])->name('kalle');
//Route::get('/reject/forms', [AdminController::class, 'rejection'])->name('rejected');
Route::get('/form/reject', [AdminController::class, 'rejectedUsers'])->name('userrejected');
Route::get('/nva/gyan/{userId}', [AdminController::class, 'viewlosers'])->name('nva');
Route::get('/accept/users', [AdminController::class, 'acceptedUsers'])->name('qbull');
Route::get('/shayma/jyan/{userId}', [AdminController::class, 'winners'])->name('sana');

Route::post('/toggle-status/{id}', 'YourController@toggleStatus')->name('toggleStatus');
Route::post('/accept/form/{id}', [AdminController::class , 'acceptStatus'])->name('acceptStatus');
Route::post('/user/sate/{id}', [AdminController::class , 'rejectStatus'])->name('rejectStatus');



Route::get('/contacts', [AdminController::class, 'dawakaryakan'])->name('dawakaryakan');
Route::get('/contacts/data', [AdminController::class, 'dawakarGet'])->name('dawakaryakan.get');













Route::controller(UserController::class)->group(function(){

Route::get('/user/logout' , 'destroy')->name('user.logout');
Route::get('/personal/step/one' , 'show')->name('personal.showone');
Route::get('/personal/step/yakwniw' , 'getdwam');
Route::post('/personal/step/yakwniw' , 'store')->name('personal.storeone');
Route::get('/personal/step/two' , 'persontwo')->name('chalaki.one');
Route::post('/personal/step/two' , 'storedw')->name('dwam.store');
Route::post('/personal/step/three' , 'xwendn')->name('xwendn.one');
Route::get('/personal/step/three' , 'xwendnn')->name('xwendn.getse');
Route::post('/personal/step/four' , 'xwendndw')->name('xwendn.dw');
Route::get('/personal/step/four' , 'xwendndww')->name('xwendn.get');
Route::post('/personal/step/five' , 'xwendnse')->name('store.third');
Route::get('/personal/step/five' , 'xwendnsee')->name('get.third');
Route::post('/personal/step/six' , 'xwendnchar')->name('store.five');
Route::get('/personal/step/six' , 'xwendncharr')->name('get.five');
Route::post('/personal/step/seven' , 'xwendnfive')->name('store.six');
Route::get('/personal/step/seven' , 'xwendnfivee')->name('get.six');
Route::post('/personal/step/eight' , 'xwendnsix')->name('post.seven');
Route::get('/personal/step/eight' , 'xwendnsixx')->name('get.seven');
Route::post('/personal/step/nine' , 'dllnyajor')->name('post.jori');
Route::get('/personal/step/nine' , 'dllnyajorr')->name('get.jori');
Route::post('/personal/step/ten' , 'rezlenan')->name('rezlenan.post');
Route::get('/personal/step/ten' , 'rezlenann')->name('rezlenan.get');
Route::post('/personal/step/eleven' , 'blawkrdnawa')->name('blawkrdnawa');
Route::get('/personal/step/eleven' , 'blawkrdnawaa')->name('blawkrdnawa.get');
Route::post('/personal/step/twelve' , 'chalakiyak')->name('chalaki.store');
Route::get('/personal/step/twelve' , 'chalakiyakk')->name('chalakk.get');
Route::post('/personal/step/thirteen' , 'chalakidwam')->name('chalaki.dw');
Route::get('/personal/step/thirteen' , 'chalakidwamm')->name('get.thirteen');
Route::post('/personal/step/fourteen' , 'chalakise')->name('chalaki.se');
Route::get('/personal/step/fourteen' , 'chalakisee')->name('get.se');
Route::post('/personal/step/fifteen' , 'andam')->name('andam.store');
Route::get('/personal/step/fifteen' , 'andamm')->name('get.andam');
Route::post('/personal/step/sixteen' , 'feedback')->name('feedback');
Route::get('/contact/form' , 'contact')->name('contact');
Route::post('/contact/form' , 'contactStore')->name('contact.store');


});







require __DIR__.'/auth.php';
