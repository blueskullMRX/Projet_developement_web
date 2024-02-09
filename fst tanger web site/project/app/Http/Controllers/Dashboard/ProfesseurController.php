<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Annonce;
use App\Models\Demande;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfesseurController extends Controller
{
    public function createAnnonce(Request $request){

        $prof = DB::table('professeur')->where('ID_user', Auth::user()->id)->first()->ID_prof;

        $user = new Annonce;
        $user->ID_mod = DB::table('module')->where('ID_prof', $prof)->first()->ID_mod;
        $user->Etat_ann = $request->input('etat_ann');
        $user->Contenue = $request->input('contenue');
        $user->Objet = $request->input('objet');
        $user->save();

        return redirect()->route("Dashboard");
    }

    public function demande():View
    {
        $dems = DB::table('demande')->where('Destinataire', Auth::user()->id)->get();
        $dems_arr = array();
        $i = 0;
        foreach($dems as $dem)
        {
            array_push($dems_arr,array());
            $id = DB::table('etudiant')->where('CNE', $dem->CNE)->first()->ID_user;
            $etu = DB::table('users')->where('id', $id)->first();
            array_push($dems_arr[$i],$etu->name);
            array_push($dems_arr[$i],$etu->prenom);
            array_push($dems_arr[$i],$dem->Type_dem);
            array_push($dems_arr[$i],$dem->Objet);
            array_push($dems_arr[$i],$dem->Contenue);
            array_push($dems_arr[$i],$dem->Reponse);
            array_push($dems_arr[$i],$dem->ID_dem);
            $i++;
        }
        return view('dashboard.professeur.demande', ['demandes' => $dems_arr,
                                                        'size'=>$i]);
    }

    public function replyDemande(Request $request,$ID_dem){

        Demande::where("ID_dem",$ID_dem)->update(['Reponse' => $request->input("reponse")]);
        
        return redirect()->route("Prof.Demande");
    }

    public function annonce():View
    {
        return view('dashboard.professeur.annonceCreate');
    }
    
    public function showAnnonce():View
    {
        $ID_prof = DB::table('professeur')->where('ID_user', Auth::user()->id)->first()->ID_prof;
        $mods = DB::table('module')->where('ID_prof', $ID_prof)->get();
        $mods_arr = array();
        foreach($mods as $mod) array_push($mods_arr , $mod->ID_mod);
        $anns = DB::table('annonces')->whereIn('ID_mod', $mods_arr)->get();

        return view('dashboard.professeur.annonceShow',['annonces' => $anns]);
    }
    public function deleteAnnonce(Request $request,$ID_ann){

        DB::table('annonces')->where('ID_ann', $ID_ann)->delete();

        return redirect()->route("Prof.Annonce.Show");
    }


}
