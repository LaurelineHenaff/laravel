<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Employe;

class EmployeController extends Controller
{
  public function all()
  {
      $employes = Employe::all();
  return view('employes.all', ['employes' => $employes]);
  }

  public function store(Request $request)
  {
      $nom = $request->Input('nom');
      $prenom = $request->Input('prenom');
      $employe = new Employe;
      $employe->nom = $nom;
      $employe->prenom = $prenom;
      $employe->save();

      return redirect()->action('EmployeController@all'); //Redirection vers une action de contrôleur
  }

  public function find(Request $request){
      $nom = $request->Input('nom');
      $prenom = $request->Input('prenom');

      $employes = Employe::where(['nom'=>$nom, 'prenom'=>$prenom])->get();
      return view('employes.find', ['employes' => $employes]);
  }
}
