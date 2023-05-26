<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CompetencesController extends Controller
{
    /**
     * affiche la liste de tous les employés.
     *
     * @return Response
     */
    public function index()
    {
        $competences = DB::table('competences')->get();

        return view('competences', ['competences' => $competences]);
    }
}
?>
