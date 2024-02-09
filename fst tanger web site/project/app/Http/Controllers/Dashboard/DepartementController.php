<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Activite;
use App\Models\Annonce;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DepartementController extends Controller
{
    public function emploi(Request $request): View
    {
        $locs = DB::table('local')->get();
        
        $ID_loc = 1;
        if($request->local != null) $ID_loc = $request->local;

        $activite = DB::table('activité')->where('ID_loc', $ID_loc)->get();

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
                        if($act->ID_cre == $j) {
                            $mod_name = DB::table('module')->where('ID_mod', $act->ID_mod)->first()->Nom_mod;
                            $act_arr[$i][$j][0]=$mod_name;
                        }
                    }
                }
            }
        }

        return view('test8', ['locals' => $locs,
                                'acts' => $act_arr,
                                'selected' => $ID_loc]);

    }

    public function createAnnonce(Request $request){

        $user = new Annonce;
        $user->ID_dep = DB::table('département')->where('Chef_dep', Auth::user()->id)->first()->ID_dep;
        $user->Etat_ann = $request->input('etat_ann');
        $user->Contenue = $request->input('contenue');
        $user->Objet = $request->input('objet');
        $user->save();

        return redirect()->route("Dashboard");
    }

    public function annonce():View
    {
        return view('dashboard.departement.annonceCreate');
    }

    public function showAnnonce():View
    {
        $ID_dep = DB::table('département')->where('Chef_dep', Auth::user()->id)->first()->ID_dep;
        $anns = DB::table('annonces')->where('ID_dep', $ID_dep)->get();

        return view('dashboard.departement.annonceShow',['annonces' => $anns]);
    }

    public function deleteAnnonce(Request $request,$ID_ann){

        DB::table('annonces')->where('ID_ann', $ID_ann)->delete();

        return redirect()->route("Departement.Annonce.Show");
    }

    public  function showEmploi(Request $request): View
    {
        $ID_dep = DB::table('département')->where('Chef_dep', Auth::user()->id)->first()->ID_dep;
        $locs = DB::table('local')->where("ID_dep",$ID_dep)->get();
        if(!(DB::table('local')->where("ID_dep",$ID_dep)->exists())) return view('dashboard.departement.sallesError');


        $ID_loc = $locs->first()->ID_loc;
        if($request->local != null) $ID_loc = $request->local;

        $loc_wh = DB::table('local')->where("ID_loc",$ID_loc)->first();

        $activite = DB::table('activité')->where('ID_loc', $ID_loc)->get();

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
                        if($act->ID_cre == $j+1 && $act->ID_mod !=null) {
                            $mod_name = DB::table('module')->where('ID_mod', $act->ID_mod)->first()->Nom_mod;
                            $act_arr[$i][$j][0] = $mod_name;
                        }
                    }
                }
            }
        }

        $mods = DB::table('module')->get();


        return view('dashboard.departement.emploiModify', ["locals" => $locs,
                                                    "selected" => $loc_wh,
                                                    "modules" => $mods,
                                                "acts" => $act_arr]);

    }

    public function modifyEmploi(Request $request,$ID_loc)
    {   
        for($i=0;$i<6;$i++){
            for($j=0;$j<5;$j++){
                $target = "act".$i.$j;
                if(Activite::where("ID_loc",$ID_loc)->where("jour",$i)->where("ID_cre",$j+1)->exists())
                    Activite::where("ID_loc",$ID_loc)->where("jour",$i)->where("ID_cre",$j+1)->update(['ID_mod' => $request->get($target)]);
                else {
                    $act = new Activite;
                    $act->ID_loc = $ID_loc;
                    $act->jour = $i;
                    $act->ID_cre = $j+1;
                    $act->ID_mod = $request->get($target);
                    $act->save();  
                }
            }
        }
        return redirect()->route("Departement.Emploi.Show");
    }


}
