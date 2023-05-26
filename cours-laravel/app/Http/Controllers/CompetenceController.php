<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Competence;

class CompetenceController extends Controller
{
  public function all()
  {
      $competences = Competence::all();
      return view('competences.all', ['competences' => $competences]);
  }

  public function store(Request $request)
  {
      $nom = $request->Input('nom');
      $competence = new Competence;
      $competence->nom = $nom;
      $competence->save();

      return redirect()->action('CompetenceController@all'); //Redirection vers une action de contrôleur
  }

  public function find(Request $request){
      $nom = $request->Input('nom');

      $competences = Competence::where(['nom'=>$nom])->get();
      return view('competences.find', ['competences' => $competences]);
  }
}
