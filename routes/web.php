<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\Modelislemleri;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\Veritabaniislemleri;
use App\Http\Controllers\ResimYukle;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/deneme', function () {
//     return view('ornek');
// });
Route::get("/phpturkiye/{isim}",[Ornek::class,'test']);

Route::get("/homepage",[Yonet::class,'site']);

Route::get("/ekle",[Veritabaniislemleri::class,'ekle']);

Route::get("/guncelle",[Veritabaniislemleri::class,'guncelle']);

Route::get("/modelguncelle",[Modelislemleri::class,'guncelle']);

Route::get("/modelsil",[Modelislemleri::class,'sil']);

Route::get("/sil",[Veritabaniislemleri::class,'sil']);

Route::get("/liste",[Modelislemleri::class,'liste']);

Route::get("/modelekle",[Modelislemleri::class,'ekle']);

Route::get("/iletisim",[Iletisim::class,'index']);

Route::get("/iletisimekleme",[Iletisim::class,'ekleme'])->name("iletisim");

Route::get("/bilgiler",[Veritabaniislemleri::class,'bilgiler']);

Route::get("/formislemleri",[Formislemleri::class,'gorunum']);

Route::middleware('arakontrol')->post("/form_sonuc",[Formislemleri::class,'sonuc'])->name('sonuc');

Route::get('/upload',function(){
    return view('upload');
});

Route::get('/tema',function(){
    return view('Pages.homepage');
});

Route::get('/uye',function(){
    return view('uyelik');
});

Route::post('uye-kayit',[App\Http\Controllers\UyelikIslemleri::class ,'uyekayit'])->name('uyekayit');

Route::post('/resimgonder',[ResimYukle::class,'resimyükleme'])->name('yukle');
