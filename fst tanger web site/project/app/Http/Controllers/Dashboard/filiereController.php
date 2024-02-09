<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Annonce;
use App\Models\Demande;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class filiereController extends Controller
{
    public function createAnnonce(Request $request){

        $ann = new Annonce;
        $ann->ID_fil = DB::table('filières')->where('Resp_fil', Auth::user()->id)->first()->ID_fil;
        $ann->Etat_ann = $request->input('etat_ann');
        $ann->Contenue = $request->input('contenue');
        $ann->Objet = $request->input('objet');
        $ann->save();

        return redirect()->route("Coord.Annonce.Show");
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
            array_push($dems_arr[$i],$dem->Objet);
            array_push($dems_arr[$i],$dem->Contenue);
            array_push($dems_arr[$i],$dem->Reponse);
            array_push($dems_arr[$i],$dem->ID_dem);
            $i++;
        }
        return view('dashboard.coordinateur.demande', ['demandes' => $dems_arr,
                                                        'size'=>$i]);
    }

    public function replyDemande(Request $request,$ID_dem){

        Demande::where("ID_dem",$ID_dem)->update(['Reponse' => $request->input("reponse")]);
        
        return redirect()->route("Coord.Demande");
    }

    public function annonce():View
    {
        return view('dashboard.coordinateur.annonceCreate');
    }
    
    public function showAnnonce():View
    {
        $ID_fil = DB::table('filières')->where('Resp_fil', Auth::user()->id)->first()->ID_fil;
        $anns = DB::table('annonces')->where('ID_fil', $ID_fil)->get();

        return view('dashboard.coordinateur.annonceShow',['annonces' => $anns]);
    }
    public function deleteAnnonce(Request $request,$ID_ann){

        DB::table('annonces')->where('ID_ann', $ID_ann)->delete();

        return redirect()->route("Coord.Annonce.Show");
    }


}
