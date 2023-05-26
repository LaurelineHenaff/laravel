<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvoir extends Migration
{
      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
          Schema::create('avoir', function (Blueprint $table) {
              $table->unsignedInteger('id_employe');
              $table->unsignedInteger('id_competence');

              $table->primary(['id_employe', 'id_competence']); //Double index

              //Clés étrangères
              $table->foreign('id_employe')
                  ->references('id_employe')->on('employes')
                  ->onDelete('cascade');

              $table->foreign('id_competence')
                  ->references('id_competence')->on('competences')
                  ->onDelete('cascade');
          });
      }

      /**
       * Reverse the migrations.
       *
       * @return void
       */
      public function down()
      {
          Schema::dropIfExists('avoir');
      }
}
