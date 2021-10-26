<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veriler;
use Bilgiler;

class Modelislemleri extends Controller
{
     public function liste(){
         $veriler=Veriler::where('id',2)->first();
         echo $veriler->metin;
     }
     public function ekle(){
       Veriler::create([
           "metin"=>"model dosyasından eklendi",
       ]);
    }
     public function guncelle(){
       Veriler::whereId(4)->update([
           "metin"=>"güncelleme başarılı",
       ]);
       
     }
     public function sil(){
       Veriler::whereId(4)->delete();
       
     }
}
