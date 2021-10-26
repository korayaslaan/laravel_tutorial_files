<?php

namespace App\Http\Controllers;

use Bilgiler;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class Veritabaniislemleri extends Controller
{
    public function ekle()
    {
        DB::table("veriler")->insert([
            "metin" => "dadidadiadaidaidiaidaidiaidadiaid"
        ]);
    }
    public function guncelle()
    {
        DB::table("veriler")->where("id", 1)->update([
            "metin" => "Güncellendi"
        ]);
    }
    public function bilgiler()
    {
        $veriler = DB::table("veriler")->get();
     /*   foreach ($veriler as $key => $bilgi) {
            echo $bilgi->metin;
            echo "<br>";
        }*/
        $veri=DB::table("veriler")->where("id",3)->first();
        echo $veri->metin;
    }
    public function sil()
    {
        DB::table("veriler")->where("id", 1)->delete();
    }
}
