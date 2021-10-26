<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Formislemleri extends Controller
{
    public function gorunum(){
      return view('form');
    }

    public function sonuc(Request $request){
      return $request->metin;
    }

    public function ekleme(Request $request)
    {
     
        $adsoyad=$request->adsoyad;
        $telefon=$request->telefon;
        $mail=$request->mail;
        $metin=$request->metin;
        echo $adsoyad;
        echo $telefon;
        echo $mail;
        echo $metin;
    }
}
