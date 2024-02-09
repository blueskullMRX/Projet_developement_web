<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [App\Http\Controllers\LoginController::class, 'form'])->name('Form.Login');
Route::post('/loginCheck', [App\Http\Controllers\LoginController::class, 'login'] )->name('Login');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'] )->name('Logout')->middleware('auth');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'] )->name('Dashboard')->middleware('auth');
Route::get('/annonce', [App\Http\Controllers\DashboardController::class, 'annonce'])->name('Annonce');
Route::get('/filiere', [App\Http\Controllers\DashboardController::class, 'filiere'])->name('Filiere');



//pedarogique
Route::middleware(['auth', 'ispedarogique'])->group(function () {

    Route::get('/dashboard/salles', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'salles'] )->name('Peda.Salles');
    Route::put('dashboard/salles/modify/{ID_loc}', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'modifySalle'] )->name('Peda.Salles.Modify');

    Route::get('/dashboard/pedaEmploi', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'showEmploi'] )->name('Peda.Emploi.Show');
    Route::put('/dashboard/pedaEmploi/modify/{ID_loc}', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'modifyEmploi'] )->name('Peda.Emploi.Modify');

    Route::get('/dashboard/departements', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'departements'] )->name('Peda.Departements');
    Route::put('dashboard/departements/modify/{ID_dep}', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'modifyDepartements'] )->name('Peda.Departements.Modify');

    Route::get('/dashboard/filiere', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'filiere'] )->name('Peda.Filiere');
    Route::put('dashboard/filiere/modify/{ID_fil}', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'modifyFiliere'] )->name('Peda.Filiere.Modify');

    Route::get('/dashboard/module', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'module'] )->name('Peda.Module');
    Route::put('dashboard/module/modify/{ID_mod}', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'modifyModule'] )->name('Peda.Module.Modify');

    Route::get('/dashboard/filiereModify', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'filiereCont'] )->name('Peda.FiliereModify');
    Route::put('dashboard/filiereModify/modify/{ID_fil}', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'filiereContModify'] )->name('Peda.FiliereModify.Modify');

    Route::get('/dashboard/users', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'users'] )->name('Peda.users');
    Route::put('dashboard/users/modify/{id}', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'modifyUsers'] )->name('Peda.Users.Modify');

    Route::get('/dashboard/create', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'create'] )->name('Peda.Create');
    Route::post('dashboard/create/modify', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'modifyCreate'] )->name('Peda.Create.Modify');

    Route::get('/dashboard/createEtu', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'createEtu'] )->name('Peda.CreateEtu');
    Route::post('dashboard/createEtu/modify', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'modifyCreateEtu'] )->name('Peda.CreateEtu.Modify');

    Route::get('/dashboard/createProf', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'createProf'] )->name('Peda.CreateProf');
    Route::post('dashboard/createProf/modify', [App\Http\Controllers\Dashboard\PedagogiqueController::class, 'modifyCreateProf'] )->name('Peda.CreateProf.Modify');
});


//etudaint
Route::middleware(['auth', 'isetudiant'])->group(function () {

    Route::get('/dashboard/emploi', [App\Http\Controllers\Dashboard\EtudiantController::class, 'emploi'] )->name('Etu.Emploi');

    Route::get('/dashboard/annonce', [App\Http\Controllers\Dashboard\EtudiantController::class, 'annonce'] )->name('Etu.Annonce');

    Route::get('/dashboard/demande', [App\Http\Controllers\Dashboard\EtudiantController::class, 'demande'] )->name('Etu.Demande');
    Route::post('/dashboard/demandeCreate', [App\Http\Controllers\Dashboard\EtudiantController::class, 'createDemande'] )->name('Etu.Demande.Create');

    Route::get('/dashboard/demandeShow', [App\Http\Controllers\Dashboard\EtudiantController::class, 'showDemande'] )->name('Etu.Demande.Show');
});

//professeur
Route::middleware(['auth', 'isprofesseur'])->group(function () {

Route::get('/dashboard/profAnnonce', [App\Http\Controllers\Dashboard\ProfesseurController::class, 'annonce'] )->name('Prof.Annonce');
Route::post('/dashboard/AnnonceCreate', [App\Http\Controllers\Dashboard\ProfesseurController::class, 'createAnnonce'] )->name('Prof.Annonce.Create');

Route::get('/dashboard/profAnnonceShow', [App\Http\Controllers\Dashboard\ProfesseurController::class, 'showAnnonce'] )->name('Prof.Annonce.Show');
Route::put('dashboard/annonces/delete/{ID_ann}', [App\Http\Controllers\Dashboard\ProfesseurController::class, 'deleteAnnonce'] )->name('Prof.Annonce.Delete');

Route::get('/dashboard/profDemande', [App\Http\Controllers\Dashboard\ProfesseurController::class, 'demande'] )->name('Prof.Demande');
Route::put('/dashboard/profDemande/reply/{ID_dem}', [App\Http\Controllers\Dashboard\ProfesseurController::class, 'replyDemande'] )->name('Prof.Annonce.Reply');
});


//cordinateur
Route::middleware(['auth', 'iscoord'])->group(function () {

Route::get('/dashboard/coordAnnonce', [App\Http\Controllers\Dashboard\filiereController::class, 'annonce'] )->name('Coord.Annonce');
Route::post('/dashboard/coordAnnonceCreate', [App\Http\Controllers\Dashboard\filiereController::class, 'createAnnonce'] )->name('Coord.Annonce.Create');

Route::get('/dashboard/coordAnnonceShow', [App\Http\Controllers\Dashboard\filiereController::class, 'showAnnonce'] )->name('Coord.Annonce.Show');
Route::put('dashboard/coordAnnonces/delete/{ID_ann}', [App\Http\Controllers\Dashboard\filiereController::class, 'deleteAnnonce'] )->name('Coord.Annonce.Delete');

Route::get('/dashboard/coordDemande', [App\Http\Controllers\Dashboard\filiereController::class, 'demande'] )->name('Coord.Demande');
Route::put('dashboard/coordDemande/reply/{ID_dem}', [App\Http\Controllers\Dashboard\filiereController::class, 'replyDemande'] )->name('Coord.Annonce.Reply');
});

//chef
Route::middleware(['auth', 'ischef'])->group(function () {

Route::get('/dashboard/depAnnonce', [App\Http\Controllers\Dashboard\DepartementController::class, 'annonce'] )->name('Departement.Annonce');
Route::post('/dashboard/depAnnonceCreate', [App\Http\Controllers\Dashboard\DepartementController::class, 'createAnnonce'] )->name('Departement.Annonce.Create');

Route::get('/dashboard/depAnnonceShow', [App\Http\Controllers\Dashboard\DepartementController::class, 'showAnnonce'] )->name('Departement.Annonce.Show');
Route::put('dashboard/depAnnonces/delete/{ID_ann}', [App\Http\Controllers\Dashboard\DepartementController::class, 'deleteAnnonce'] )->name('Departement.Annonce.Delete');

Route::get('/dashboard/depEmploi', [App\Http\Controllers\Dashboard\DepartementController::class, 'showEmploi'] )->name('Departement.Emploi.Show');
Route::put('/dashboard/depEmploi/modify/{ID_loc}', [App\Http\Controllers\Dashboard\DepartementController::class, 'modifyEmploi'] )->name('Departement.Emploi.Modify');
});




