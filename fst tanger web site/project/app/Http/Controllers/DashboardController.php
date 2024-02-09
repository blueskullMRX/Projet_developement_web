<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        if(auth()->check()){
            switch(auth()->user()->role){
                case 0 : return view("dashboard.pedagogique.home");
                case 1 : return view("dashboard.etudiant.home");
                case 2 : return view("dashboard.professeur.home");
                case 3 : return view("dashboard.coordinateur.home");
                case 4 : return view("dashboard.departement.home");
            }
        }
    }

    public function annonce(){
        $ann = DB::table('annonces')->where('Etat_ann', "publique")->get();
        return view('annonce',['annonces' => $ann]);
    }
    public function filiere(){
        $fil = DB::table('filières')->get();
        return view('filiere',['filieres' => $fil]);
    }

    

}
