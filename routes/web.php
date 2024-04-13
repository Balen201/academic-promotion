<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;





Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware([ 'normal'])->name('dashboard');



Route::middleware(['auth'])->group(function () {
    Route::get('/dash', [AdminController::class, 'index'])->name('admin.index');





    Route::get('/showtime', [AdminController::class, 'form'])->name('form');
    Route::get('/home/data', [AdminController::class, 'datas'])->name('homedash');
    Route::get('/user/data', [AdminController::class, 'userdata'])->name('userdata');
    Route::get('/user/form', [AdminController::class, 'dawakari'])->name('userform');
    Route::get('/user/data/{userId}', [AdminController::class, 'viewUser'])->name('pending');
    Route::get('/form/reject', [AdminController::class, 'rejectedUsers'])->name('userrejected');
    Route::get('/accept/users', [AdminController::class, 'acceptedUsers'])->name('qbull');

    Route::post('/toggle-status/{id}', 'YourController@toggleStatus')->name('toggleStatus');
    Route::post('/accept/form/{id}', [AdminController::class , 'acceptStatus'])->name('acceptStatus');
    Route::post('/user/sate/{id}', [AdminController::class , 'rejectStatus'])->name('rejectStatus');



    Route::get('/contacts', [AdminController::class, 'dawakaryakan'])->name('dawakaryakan');
    Route::get('/contacts/data', [AdminController::class, 'dawakarGet'])->name('dawakaryakan.get');













});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});










Route::middleware(['auth'])->group(function () {
    Route::get('/user/logout', 'UserController@destroy')->name('user.logout');
    Route::get('/personal/step/one', 'UserController@show')->name('personal.showone');
    Route::get('/personal/step/yakwniw', 'UserController@getdwam');
    Route::post('/personal/step/yakwniw', 'UserController@storeone')->name('personal.storeone');
    Route::get('/personal/step/two', 'UserController@persontwo')->name('chalaki.one');
    Route::post('/personal/step/two', 'UserController@storedw')->name('dwam.store');
    Route::post('/personal/step/three', 'UserController@xwendn')->name('xwendn.one');
    Route::get('/personal/step/three', 'UserController@xwendnn')->name('xwendn.getse');
    Route::post('/personal/step/four', 'UserController@xwendndw')->name('xwendn.dw');
    Route::get('/personal/step/four', 'UserController@xwendndww')->name('xwendn.get');
    Route::post('/personal/step/five', 'UserController@xwendnse')->name('store.third');
    Route::get('/personal/step/five', 'UserController@xwendnsee')->name('get.third');
    Route::post('/personal/step/six', 'UserController@xwendnchar')->name('store.five');
    Route::get('/personal/step/six', 'UserController@xwendncharr')->name('get.five');
    Route::post('/personal/step/seven', 'UserController@xwendnfive')->name('store.six');
    Route::get('/personal/step/seven', 'UserController@xwendnfivee')->name('get.six');
    Route::post('/personal/step/eight', 'UserController@xwendnsix')->name('post.seven');
    Route::get('/personal/step/eight', 'UserController@xwendnsixx')->name('get.seven');
    Route::post('/personal/step/nine', 'UserController@dllnyajor')->name('post.jori');
    Route::get('/personal/step/nine', 'UserController@dllnyajorr')->name('get.jori');
    Route::post('/personal/step/ten', 'UserController@rezlenan')->name('rezlenan.post');
    Route::get('/personal/step/ten', 'UserController@rezlenann')->name('rezlenan.get');
    Route::post('/personal/step/eleven', 'UserController@blawkrdnawa')->name('blawkrdnawa');
    Route::get('/personal/step/eleven', 'UserController@blawkrdnawaa')->name('blawkrdnawa.get');
    Route::post('/personal/step/twelve', 'UserController@chalakiyak')->name('chalaki.store');
    Route::get('/personal/step/twelve', 'UserController@chalakiyakk')->name('chalakk.get');
    Route::post('/personal/step/thirteen', 'UserController@chalakidwam')->name('chalaki.dw');
    Route::get('/personal/step/thirteen', 'UserController@chalakidwamm')->name('get.thirteen');
    Route::post('/personal/step/fourteen', 'UserController@chalakise')->name('chalaki.se');
    Route::get('/personal/step/fourteen', 'UserController@chalakisee')->name('get.se');
    Route::post('/personal/step/fifteen', 'UserController@andam')->name('andam.store');
    Route::get('/personal/step/fifteen', 'UserController@andamm')->name('get.andam');
    Route::post('/personal/step/sixteen', 'UserController@feedback')->name('feedback');
    Route::get('/contact/form', 'UserController@contact')->name('contact');
    Route::post('/contact/form', 'UserController@contactStore')->name('contact.store');
});






require __DIR__.'/auth.php';
