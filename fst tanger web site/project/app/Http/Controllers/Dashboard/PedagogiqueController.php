<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Etudiant;
use App\Models\User;
use App\Models\Local;
use App\Models\Module;
use App\Models\Filiere;
use App\Models\Activite;
use Illuminate\View\View;
use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PedagogiqueController extends Controller
{
    public  function salles(): View
    {
        $salles = DB::table('local')->get();
        $deps = DB::table('département')->get();


        return view('dashboard.pedagogique.salles', ["locals" => $salles,
                                                    "departements" => $deps]);

    }

    public function modifySalle(Request $request,$ID_loc){

        Local::where("ID_loc",$ID_loc)->update(['ID_dep' => $request->get("dep")]);
        
        return redirect()->route("Peda.Salles");
    }

    public  function departements(): View
    {
        $deps = DB::table('département')->get();
        $chef_dep = DB::table('users')->where("role",4)->get();


        return view('dashboard.pedagogique.departement', ["chefs" => $chef_dep,
                                                    "departements" => $deps]);

    }
    public function modifyDepartements(Request $request,$ID_dep){

        Departement::where("ID_dep",$ID_dep)->update(['Chef_dep' => $request->get("chef")]);
        
        return redirect()->route("Peda.Departements");
    }

    public function modifyFiliere(Request $request,$ID_fil){

        Filiere::where("ID_fil",$ID_fil)->update(['Resp_fil' => $request->get("chef")]);
        
        return redirect()->route("Peda.Filiere");
    }

    public  function filiere(): View
    {
        $fils = DB::table('filières')->get();
        $chef_fil = DB::table('users')->where("role",3)->get();


        return view('dashboard.pedagogique.filiere', ["chefs" => $chef_fil,
                                                    "filieres" => $fils]);

    }

    public function modifyModule(Request $request,$ID_mod){

        Module::where("ID_mod",$ID_mod)->update(['ID_prof' => $request->get("chef")]);
        
        return redirect()->route("Peda.Module");
    }

    public  function Module(): View
    {
        $mods = DB::table('module')->get();
        $chef_mod = DB::table('professeur')->get();
        $chef_arr = array();
        foreach($chef_mod as $ch){
            array_push($chef_arr,$ch->ID_user);
        }
        $us = DB::table('users')->whereIn('id',$chef_arr)->get();
        


        return view('dashboard.pedagogique.module', ["chefs" => $chef_mod,
                                                    "modules" => $mods,
                                                    "users" => $us]);

    }

    public  function filiereCont(Request $request): View
    {
        $fils = DB::table('filières')->get();

        $ID_fil = 1;
        if($request->filiere != null) $ID_fil = $request->filiere;

        $fil_wh = DB::table('filières')->where("ID_fil",$ID_fil)->first();



        return view('dashboard.pedagogique.filiereModify', ["filieres" => $fils,
                                                    "selected" => $fil_wh]);

    }

    public function filiereContModify(Request $request,$ID_fil)
    {
        Filiere::where("ID_fil",$ID_fil)->update(['OBJECTIFS' => $request->get("OBJECTIFS")]);
        Filiere::where("ID_fil",$ID_fil)->update(['PROGRAMME' => $request->get("PROGRAMME")]);
        Filiere::where("ID_fil",$ID_fil)->update(['COMPETENCES' => $request->get("COMPETENCES")]);
        return redirect()->route("Peda.FiliereModify");
    }

    public  function users(): View
    {
        $us = DB::table('users')->get();
        return view('dashboard.pedagogique.users', ["users" => $us]);

    }

    public function modifyUsers(Request $request,$id){
        User::where("id",$id)->delete();
        
        return redirect()->route("Peda.users");
    }

    public  function create(): View
    {
        return view('dashboard.pedagogique.create');
    }

    public function modifyCreate(Request $request){

        $user = new User;
        $user->name = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->password = Hash::make($request->input('password'));
        $user->save(); 
    
            
        return redirect()->route("Peda.users");
    }

    public  function createEtu(): View
    {
        $fils = DB::table('filières')->get();
        return view('dashboard.pedagogique.createEtu',["filieres" => $fils]);
    }

    public function modifyCreateEtu(Request $request){

        $user = new User;
        $user->name = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->role = 1;
        $user->password = Hash::make($request->input('password'));
        $user->save();
        
        $etu = new Etudiant;
        $etu->CNE = $request->input('cne');
        $etu->ID_user = DB::table('users')->where("email",$request->input('email'))->first()->id;
        $etu->ID_fil = $request->input('filiere');
        $etu->is_délégué = $request->input('delegue');
        $etu->save();

            
        return redirect()->route("Peda.users");
    }

    public  function createProf(): View
    {
        $deps = DB::table('département')->get();
        return view('dashboard.pedagogique.createProf',["departements" => $deps]);
    }

    public function modifyCreateProf(Request $request){

        $user = new User;
        $user->name = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->role = 2;
        $user->password = Hash::make($request->input('password'));
        $user->save();
        
        DB::table('professeur')->insert(array('ID_user' => DB::table('users')->where("email",$request->input('email'))->first()->id,
                                                'ID_dep' => $request->input('departement')));

            
        return redirect()->route("Peda.users");
    }

    

    public  function showEmploi(Request $request): View
    {
        //$ID_dep = DB::table('département')->where('Chef_dep', Auth::user()->id)->first()->ID_dep;
        $locs = DB::table('local')->where("ID_dep",null)->get();
        if(!(DB::table('local')->where("ID_dep",null)->exists())) return view('dashboard.pedagogique.sallesError');

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


        return view('dashboard.pedagogique.emploiModify', ["locals" => $locs,
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
        return redirect()->route("Peda.Emploi.Show");
    }

}
