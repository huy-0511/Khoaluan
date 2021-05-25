<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
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
// Route::group([
//     'prefix' => 'admin',
//     'namespace' => 'Admin',
// ], function () {
	
// });

//Backend
Route::get('/dashboard','App\Http\Controllers\Admin\AdminController@index');
Route::get('/profile','App\Http\Controllers\Admin\AdminController@profile');
Route::post('/profile','App\Http\Controllers\Admin\AdminController@update_profile');

Route::get('/quanlytaikhoan','App\Http\Controllers\Admin\UserController@list_tk');
Route::get('/quanlytaikhoan/edit/{id}','App\Http\Controllers\Admin\UserController@edit_taikhoan');
Route::post('/quanlytaikhoan/edit/{id}','App\Http\Controllers\Admin\UserController@update_taikhoan');
Route::get('/quanlytaikhoan/delete/{id}','App\Http\Controllers\Admin\UserController@delete_taikhoan');


Route::get('/quanlylichhen','App\Http\Controllers\Admin\LHController@list_lichhen');
Route::get('/chitietlichhen/{id}','App\Http\Controllers\Admin\LHController@chitiet');
Route::post('/update-lichhen','App\Http\Controllers\Admin\LHController@post_chitiet');

Route::get('/quanlybanggia','App\Http\Controllers\Admin\BGController@list_banggia');
Route::get('/quanlybanggia/them','App\Http\Controllers\Admin\BGController@add_banggia');
Route::post('/quanlybanggia/them','App\Http\Controllers\Admin\BGController@add_post_banggia');
Route::get('/quanlybanggia/delete/{id_banggia}','App\Http\Controllers\Admin\BGController@delete_banggia');
Route::get('/quanlybanggia/edit/{id_banggia}','App\Http\Controllers\Admin\BGController@edit_banggia');
Route::post('/quanlybanggia/edit/{id_banggia}','App\Http\Controllers\Admin\BGController@edit_post_banggia');

Route::get('/quanlytintuc','App\Http\Controllers\Admin\NewController@list_tintuc');
Route::get('/quanlytintuc/add','App\Http\Controllers\Admin\NewController@add_tintuc');
Route::post('/quanlytintuc/add','App\Http\Controllers\Admin\NewController@post_tintuc');
Route::get('/quanlytintuc/delete/{id_tintuc}','App\Http\Controllers\Admin\NewController@delete_tintuc');
Route::get('/quanlytintuc/edit/{id}','App\Http\Controllers\Admin\NewController@edit_tintuc');
Route::post('/quanlytintuc/edit/{id}','App\Http\Controllers\Admin\NewController@update');

Route::get('/quanlythongbao','App\Http\Controllers\Admin\NotiController@list_thongbao');
Route::get('/quanlythongbao/add','App\Http\Controllers\Admin\NotiController@add_thongbao');
Route::post('/quanlythongbao/add','App\Http\Controllers\Admin\NotiController@post_thongbao');
Route::get('/quanlythongbao/delete/{id_thongbao}','App\Http\Controllers\Admin\NotiController@delete_thongbao');
Route::get('/quanlythongbao/edit/{id_thongbao}','App\Http\Controllers\Admin\NotiController@edit_thongbao');
Route::post('/quanlythongbao/edit/{id_thongbao}','App\Http\Controllers\Admin\NotiController@edit_post_thongbao');

Route::get('/quanlydichvu','App\Http\Controllers\Admin\ServiceController@list_dichvu');
Route::get('/quanlydichvu/add','App\Http\Controllers\Admin\ServiceController@add_dichvu');
Route::post('/quanlydichvu/add','App\Http\Controllers\Admin\ServiceController@post_dichvu');
Route::get('/quanlydichvu/delete/{id_dichvu}','App\Http\Controllers\Admin\ServiceController@delete_dichvu');
Route::get('/quanlydichvu/edit/{id_dichvu}','App\Http\Controllers\Admin\ServiceController@edit_dichvu');
Route::post('/quanlydichvu/edit/{id_dichvu}','App\Http\Controllers\Admin\ServiceController@edit_post_dichvu');

 Route::get('/login','App\Http\Controllers\Admin\LoginController@get_login');
 Route::post('/login','App\Http\Controllers\Admin\LoginController@post_login');
 
 Route::get('/register','App\Http\Controllers\Admin\LoginController@get_register');
 Route::post('/register','App\Http\Controllers\Admin\LoginController@post_register');

 Route::get('/logout','App\Http\Controllers\Admin\LoginController@logout');



Route::get('/email', 'App\Http\Controllers\Admin\EmailController@create');
Route::post('/email', 'App\Http\Controllers\Admin\EmailController@sendEmail')->name('send.email');

Route::get('/hosobacsi', 'App\Http\Controllers\Admin\DoctorController@list_basi');
Route::get('/hosobacsi/add', 'App\Http\Controllers\Admin\DoctorController@add_basi');
Route::post('/hosobacsi/add', 'App\Http\Controllers\Admin\DoctorController@create_basi');
Route::get('/hosobacsi/delete/{id}', 'App\Http\Controllers\Admin\DoctorController@delete_basi');
Route::get('/hosobacsi/edit/{id}', 'App\Http\Controllers\Admin\DoctorController@edit_basi');
Route::post('/hosobacsi/edit/{id}', 'App\Http\Controllers\Admin\DoctorController@update_basi');


//---------------------------------Frontend------------------------------------//
Route::get('/trangchu','App\Http\Controllers\Frontend\UserController@index');
Route::get('/lienhe','App\Http\Controllers\Frontend\UserController@contact');

Route::get('/dichvu','App\Http\Controllers\Frontend\DichvuController@dichvu');
Route::get('/chitietdichvu/{id}','App\Http\Controllers\Frontend\DichvuController@chitietdichvu');

Route::get('/banggia','App\Http\Controllers\Frontend\BanggiaController@banggia');

Route::get('/tintuc','App\Http\Controllers\Frontend\TintucController@tintuc');
Route::get('/chitiettintuc/{id}','App\Http\Controllers\Frontend\TintucController@chitiettintuc');

Route::get('/thongbao','App\Http\Controllers\Frontend\ThongbaoController@thongbao');

Route::get('/khachhang/dangki','App\Http\Controllers\Frontend\LoginController@dangki');
Route::post('/khachhang/dangki','App\Http\Controllers\Frontend\LoginController@post_dangki');
Route::get('/khachhang/dangnhap','App\Http\Controllers\Frontend\LoginController@dangnhap');
Route::post('/khachhang/dangnhap','App\Http\Controllers\Frontend\LoginController@post_dangnhap');
Route::get('/khachhang/dangxuat','App\Http\Controllers\Frontend\LoginController@get_logout');


Route::get('/datlich','App\Http\Controllers\Frontend\DatlichController@datlich');
Route::post('/datlich','App\Http\Controllers\Frontend\DatlichController@post_datlich');

Route::get('/khachhang/qlttcn','App\Http\Controllers\Frontend\UserController@thongtincanhan');

Route::get('/khachhang/xemlichhen','App\Http\Controllers\Frontend\UserController@xemlichhen');
Route::get('/chitietbacsi/kim-dung','App\Http\Controllers\Frontend\UserController@chitietbacsi1');
Route::get('/chitietbacsi/vu-duc-dung','App\Http\Controllers\Frontend\UserController@chitietbacsi2');
Route::get('/chitietbacsi/kim-ngan','App\Http\Controllers\Frontend\UserController@chitietbacsi3');
Route::get('/khachhang/quan-ly-thong-tin-ca-nhan','App\Http\Controllers\Frontend\UserController@thongtincanhan');
Route::post('/khachhang/quan-ly-thong-tin-ca-nhan','App\Http\Controllers\Frontend\UserController@update_thongtincanhan');

Route::get('/quenmatkhau','App\Http\Controllers\Frontend\UserController@quenmatkhau');
Route::post('/recover-pass','App\Http\Controllers\Frontend\UserController@recover_pass');
Route::get('/update-new-pass','App\Http\Controllers\Frontend\UserController@update_new_pass');
Route::post('/reset-new-pass','App\Http\Controllers\Frontend\UserController@reset_new_pass');