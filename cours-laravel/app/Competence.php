<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
  protected $table = 'competences';           // Table liée au modèle
  protected $primaryKey = 'id_competence';    // Clé primaire
  protected $connexion = 'mysql';             // Connexion à utiliser

  public $timestamps = false; //Désactive l'ajout des timestamps dans la base de données
}
