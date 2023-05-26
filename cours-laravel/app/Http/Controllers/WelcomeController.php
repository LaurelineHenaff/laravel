<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function bonjour(){
    session(['user_name' => ""]);
    return view('bonjour')->with('nom',"");
  }

  public function bonjouravecnom($n)
  {
    session(['user_name' => $n]);
    return view('bonjour')->with('nom',$n);
  }

  public function bonjouravecnombis(Request $request){
    $nom = $request->Input('nom');
    session(['user_name' => $nom]);
    return view('bonjour')->with('nom',$nom);
  }
}
