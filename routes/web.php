<?php

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

Route::get('hello',function(){
  return "hello world";
});

Route::get('hello1',function(){
  echo "hello 1";
});

// truyen tham so

Route::get('hoten/{ten}',function($ten){
  echo "ten cua ban ".$ten;
});

Route::get('ngay/{ngay}',function($ngay){
  echo "Ngay : ".$ngay;
})->  where(['ngay'=> '[0-9]+']);

// dinh danh

Route::get('route',['as'=>'myroute',function(){
  echo "my route";
}]);

Route::get('route2',function(){
  echo "this is route 2";
})->name('route2');

Route::get('goiten',function(){
  return redirect()->route('route2');
});

//group
Route::group(['prefix'=>'mygroup'], function(){
  Route::get('user1',function(){
    echo "this is group 1";
  });
  Route::get('user2',function(){
    echo "this is group 2";
  });
  Route::get('user3',function(){
    echo "this is group 3";
  });
});
