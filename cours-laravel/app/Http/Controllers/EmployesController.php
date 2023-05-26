<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EmployesController extends Controller
{
    /**
     * affiche la liste de tous les employés.
     *
     * @return Response
     */
    public function index()
    {
        $employes = DB::table('employes')->get();

        return view('employes', ['employes' => $employes]);
    }
}
?>
