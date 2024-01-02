<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HoneyController;
use App\Http\Controllers\KyanhController;
use App\Http\Controllers\BotngheController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\GaSachSonKyController;
use App\Http\Controllers\LonrunglaikysonController;
use App\Http\Controllers\OiBinhMapController;
use App\Http\Controllers\LuonKhoiMyController;
use App\Http\Controllers\OcbuoudenController;
use App\Http\Controllers\thoitrangController;
use App\Http\Controllers\ThucphamQuanbeoController;
use App\Http\Controllers\BaotangController;
use App\Http\Controllers\CrawlerController;
use App\Http\Controllers\ThucphamquangtrangController;

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

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});



Route::get('/', [BaotangController::class, 'trangchu'])->name('baotangxoviet.posts.home');
Route::get('/chi-tiet-bai-viet/{slug}', [BaotangController::class, 'chitietbaiviet'])->name('baotangxoviet.posts.chitietbaiviet');
Route::get('/lien-he', [BaotangController::class, 'lienhe'])->name('baotangxoviet.posts.lienhe');
Route::post('/lien-he', [BaotangController::class, 'lienhes'])->name('baotangxoviet.posts.lienhe');
Route::get('/cau-hoi-thuong-gap', [BaotangController::class, 'question'])->name('baotangxoviet.posts.lienhe');
Route::get('/thu-vien-anh', [BaotangController::class, 'thuvienanh'])->name('baotangxoviet.posts.thuvienanh');
Route::get('/bai-viet/{slug}', [BaotangController::class, 'baiviet'])->name('baotangxoviet.posts.baiviet');
Route::get('/ho-so-chien-sy', [BaotangController::class, 'hosochiensy'])->name('baotangxoviet.posts.hosochiensy');
Route::get('/videos', [BaotangController::class, 'videos'])->name('baotangxoviet.posts.videos');
Route::get('/danh-muc/{slug}', [BaotangController::class, 'danhmuc'])->name('danhmuc');
Route::get('/tim-kiem', [BaotangController::class, 'timkiem'])->name('baotangxoviet.posts.searchpost');
Route::get('/ajax-title/{name}', [BaotangController::class, 'timkiemtitle'])->name('liendoan.timkiemtitle');
Route::get('/post-child/{danhmuc}', [BaotangController::class, 'postFromMenu'])->name('baotangxoviet.posts.post_child');
// Crawler Data 
Route::get('/craw-data', [CrawlerController::class, 'index'])->name('baotangxoviet.posts.post_child');
Route::get('/craw-data1', [CrawlerController::class, 'index1'])->name('baotangxoviet.posts.post_child1');