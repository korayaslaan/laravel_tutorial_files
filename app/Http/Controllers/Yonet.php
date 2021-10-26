<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yonet extends Controller
{
  public function site (){
    $data["yazi1"]="Php TÜrkiye";
    $data["yazi2"]="Deneme Yazisi 2";
    return view('web',$data);
  }
}
