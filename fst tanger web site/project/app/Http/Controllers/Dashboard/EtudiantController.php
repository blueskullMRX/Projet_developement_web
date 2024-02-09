<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Demande;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EtudiantController extends Controller
{
    public function annonce(): View
    {
        //$users = User::all();
        //$test3 = DB::table('users')->get();
        //$test2 = DB::select("SELECT * FROM users");
        
        //$req = "select CNE from etudiant where id_user = ".Auth::user()->id;
        //$cne = DB::select($req)[0]->CNE;
        //$req = "select ID_fil from etudiant where CNE = '".$cne."'";
        //$fil = DB::select($req)[0]->ID_fil;
        //$req = "select * from annonces where ID_fil = ".$fil;
        //$ann = DB::select($req);
        
        //annonces par filier
        $cne = DB::table('etudiant')->where('id_user', Auth::user()->id)->first()->CNE;
        $fil = DB::table('etudiant')->where('CNE', $cne)->first()->ID_fil;
        $fil_ann = DB::table('annonces')->where('ID_fil', $fil)->get();

        //annonces par departement
        $dep = DB::table('filières')->where('ID_fil', $fil )->first()->ID_dep;
        $dep_ann = DB::table('annonces')->where('ID_dep', $dep)->get();

        //annonces par module
        $mod = DB::table('module')->where('ID_fil', $fil )->get();
        $mod_arr = array();
        foreach($mod as $module) array_push($mod_arr , $module->ID_mod);
        $mod_ann = DB::table('annonces')->whereIn('ID_mod', $mod_arr)->get();



        return view('dashboard.etudiant.annonce', ['filieres' => $fil_ann,
                             'departements' => $dep_ann,
                             'modules' => $mod_ann]);
    }

    public function createDemande(Request $request){

           $user = new Demande;
           $user->CNE = DB::table('etudiant')->where('id_user', Auth::user()->id)->first()->CNE;
           $user->Destinataire = $request->input('id');
           $user->Contenue = $request->input('contenue');
           $user->Objet = $request->input('objet');
           $user->Type_dem = $request->input('type');;
           $user->save();

           return redirect()->route("Etu.Demande.Show");

    }
    public  function demande(): View
    {
        $ID_fil = DB::table('etudiant')->where('ID_user', Auth::user()->id)->first()->ID_fil;
        $Resp_fil = DB::table('filières')->where('ID_fil', $ID_fil)->first()->Resp_fil;
        
        $mod = DB::table('module')->where('ID_fil', $ID_fil )->get();
        $user_arr = array();
        array_push($user_arr , $Resp_fil);
        foreach($mod as $module) {
            $prof = DB::table('professeur')->where('ID_prof', $module->ID_prof)->first();
            $user =DB::table('users')->where('id', $prof->ID_user)->first();
            array_push($user_arr , $user->id);
        }




        $us = DB::table('users')->whereIn('id', $user_arr)->get();

        return view('dashboard.etudiant.demande', ['users' => $us]);   
    }



    public  function showDemande(): View
    {
        $cne = DB::table('etudiant')->where('id_user', Auth::user()->id)->first()->CNE;
        $dems = DB::table('demande')->where('CNE', $cne)->get();

        return view('dashboard.etudiant.showDemande', ['demandes' => $dems]);
    }

    public function emploi(): View
    {
        $cne = DB::table('etudiant')->where('id_user', Auth::user()->id)->first()->CNE;
        $fil = DB::table('etudiant')->where('CNE', $cne)->first()->ID_fil;

        $fil_name = DB::table('filières')->where('ID_fil', $fil )->first()->Nom_fil; 

        $mod = DB::table('module')->where('ID_fil', $fil )->get();
        $mod_arr = array();
        foreach($mod as $module) array_push($mod_arr , $module->ID_mod);
        $activite = DB::table('activité')->whereIn('ID_mod', $mod_arr)->get();

        $act_arr = array();
        for($i=0; $i < 6; $i++){
            array_push($act_arr , array());
            for($j=0; $j < 5; $j++){
                array_push($act_arr[$i] , array());
                array_push($act_arr[$i][$j] , "--");
            }
        }

        for ($i=0; $i < 6; $i++) { 
            foreach($activite as $act){
                if($act->jour == $i){
                    for ($j=0; $j < 5; $j++){
                        if($act->ID_cre == $j+1) {
                            $mod_name = DB::table('module')->where('ID_mod', $act->ID_mod)->first()->Nom_mod;
                            $act_arr[$i][$j][0] = $mod_name;
                        }
                    }
                }
            }
        }

        return view('dashboard.etudiant.emploi', ['act' => $act_arr,
                                                'filiere' => $fil_name]);
    }
}
