<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
  protected $table = 'employes';         //Table liée au modèle
  protected $primaryKey = 'id_employe';  //Clé primaire
  protected $connexion = 'mysql';        //Connexion à utiliser

  public $timestamps = false; //Désactive l'ajout des timestamps dans la base de données
}
