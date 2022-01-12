<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\informations\Faq;
use App\Http\Controllers\user\AssociationController;
use App\Http\Controllers\informations\Connaitre_plus;
use App\Http\Controllers\informations\Qui_peut_donner;
use App\Http\Controllers\AssociationUjoinedController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('frontend.homepage');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin'], 'namespace' => 'App\Http\Controllers\admin', 'as' => 'admin.'], function() {
    Route::resource('dashboard', 'DashboardController');
    Route::resource('user', 'UserController');
    Route::resource('bloodbank', 'BloodBankController');
    Route::resource('bloodpocket', 'BloodPocketController');
    Route::resource('bloodbankmanager', 'BloodBankManagerController');
    Route::resource('groupe', 'GroupeController');
    Route::resource('bloodbankaffiliation', 'BlooBankAffiliationController');
    Route::resource('slider', 'SliderController');
});

Route::group(['prefix' => 'directeur', 'middleware' => ['auth'], 'namespace' => 'App\Http\Controllers\directeur', 'as' => 'directeur.'], function() {
    Route::resource('dashboard', 'DashboardController');
        // Route::resource('dashboard', 'HomeDirectorController');
});

Route::group(['prefix' => 'responsable', 'middleware' => ['auth'], 'namespace' => 'App\Http\Controllers\responsable', 'as' => 'responsable.'], function() {
    Route::resource('dashboard', 'DashboardController');
});

// Route::group(['prefix' => 'gestionnaire', 'middleware' => ['auth'], 'namespace' => 'App\Http\Controllers\gestionnaire', 'as' => 'gestionnaire.'], function() {
//     Route::resource('dashboard', 'DashboardController');
// });

Route::group(['prefix' => 'user', 'middleware' => ['auth'], 'namespace' => 'App\Http\Controllers\user', 'as' => 'user.'], function() {
    Route::resource('dashboard', 'DashboardController');
    Route::resource('donation', 'DonationController');
    Route::resource('demander', 'DemanderController');
    Route::resource('association', 'AssociationController');
    Route::resource('unjoind', 'AssociationUjoinedController');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Foire aux Questions
Route::get('/faq/don_de_sang', [Faq::class, 'faq_don_de_sang'])->name('faq_don_de_sang');
Route::get('/faq/don_de_plasma', [Faq::class, 'faq_don_de_plasma'])->name('faq_don_de_plasma');
Route::get('/faq/don_de_plaquette', [Faq::class, 'faq_don_de_plaquette'])->name('faq_don_de_plaquette');
Route::get('/faq/don_de_cellules_souches', [Faq::class, 'faq_don_de_cellules_souches'])->name('faq_don_de_cellules_souches');

//connaitre plus
Route::get('/connaitre_plus/groupes_sanguins', [Connaitre_plus::class, 'cp_groupe_sanguins'])->name('cp_groupe_sanguins');
Route::get('/connaitre_plus/histoire_du_sang', [Connaitre_plus::class, 'cp_histoire_du_sang'])->name('cp_histoire_du_sang');
Route::get('/connaitre_plus/les_produits_sanguins', [Connaitre_plus::class, 'cp_les_produits_sanguins'])->name('cp_les_produits_sanguins');
Route::get('/connaitre_plus/parcours_d_une_poche_de_sang', [Connaitre_plus::class, 'cp_parcours_d_une_poche_de_sang'])->name('cp_parcours_d_une_poche_de_sang');
Route::get('/connaitre_plus/qu_est_ce_que_le_sang', [Connaitre_plus::class, 'cp_qu_est_ce_que_le_sang'])->name('cp_qu_est_ce_que_le_sang');

//qui peut donner
Route::get('/qui_peut_donner/condition', [Qui_peut_donner::class, 'qpd_condition'])->name('qpd_condition');
Route::get('/qui_peut_donner/contre_indication', [Qui_peut_donner::class, 'qpd_contre_indications'])->name('qpd_contre_indications');
Route::get('/qui_peut_donner/delai_entre_2_don', [Qui_peut_donner::class, 'qpd_delai_entre_2_don'])->name('qpd_delai_entre_2_don');
Route::get('/qui_peut_donner/puis_je_donner?', [Qui_peut_donner::class, 'qpd_puis_je_donner'])->name('qpd_puis_je_donner');
// //route pour le directeur

//directeur
Route::view('/dashboard', 'gestionnaire/index' )->name('gererbanque');
Route::get('/banques', 'App\Http\Controllers\director\BanksController@show' )->name('gererBanques');
Route::post('/addBank', 'App\Http\Controllers\director\BanksController@create' );
Route::get('/details', 'App\Http\Controllers\director\BanksController@voirPlus' )->name('voirPlusBanque');
Route::post('/editBank', 'App\Http\Controllers\director\BanksController@edit' );
Route::get('/delBank', 'App\Http\Controllers\director\BanksController@destroy' );

Route::get('/editBankForm', 'App\Http\Controllers\director\BanksController@editForm' );
Route::view('/ajout_banque', 'director/addBank' )->name('addBankForm');
Route::get('/Utilisateurs', 'App\Http\Controllers\director\UserController@show' )->name('gererUsers');
Route::get('/details_user', 'App\Http\Controllers\director\UserController@voirPlus' )->name('voirPlusUser');
Route::post('/affBank', 'App\Http\Controllers\director\UserController@affBank' );
Route::post('/affGrp', 'App\Http\Controllers\director\UserController@affGrp' );
Route::get('/delAffBank', 'App\Http\Controllers\director\UserController@delAffBank' );
Route::get('/delAffGrp', 'App\Http\Controllers\director\UserController@delAffGrp' );
Route::view('/ajout_user', 'director/addUser' )->name('addUserForm');
Route::post('/addUser', 'App\Http\Controllers\director\UserController@create' );
Route::get('/delUser', 'App\Http\Controllers\director\UserController@destroy' );
Route::get('/modif_user', 'App\Http\Controllers\director\UserController@editForm' )->name('editUserForm');
Route::post('/editUser', 'App\Http\Controllers\director\UserController@edit' );
Route::get('/Associations', 'App\Http\Controllers\director\AssoController@show' )->name('gererAsso');

//route pour le gestidetailAsssociationonnaire
Route::get('/dashboard/gestionnaire', [App\Http\Controllers\gestionnaire\GestionnaireController::class, 'index'])->name('gestionnaire');
Route::get('/gestionnaire/listegroupeAB', [App\Http\Controllers\gestionnaire\ListeGroupeSanguinController::class, 'groupeAB'])->name('gestionnaireGroupab');
Route::get('/gestionnaire/listegroupeA', [App\Http\Controllers\gestionnaire\ListeGroupeSanguinController::class, 'groupeA'])->name('gestionnaireGroupa');
Route::get('/gestionnaire/listegroupeB', [App\Http\Controllers\gestionnaire\ListeGroupeSanguinController::class, 'groupeB'])->name('gestionnaireGroupb');
Route::get('/gestionnaire/listegroupeO', [App\Http\Controllers\gestionnaire\ListeGroupeSanguinController::class, 'groupeO'])->name('gestionnaireGroupo');
Route::get('/gestionnaire/ajoutPocheSang', [App\Http\Controllers\gestionnaire\ListeGroupeSanguinController::class, 'index'])->name('ajoutPocheSang');
Route::post('/gestionnaire/addPocheSang', [App\Http\Controllers\gestionnaire\ListeGroupeSanguinController::class, 'store'])->name('addPocheSang');
Route::get('/gestionnaire/listeAssociation', [App\Http\Controllers\gestionnaire\AssociationController::class, 'index'])->name('listeAssoiationAffi');
Route::get('/gestionnaire/detailAssociation/{id}', [App\Http\Controllers\gestionnaire\AssociationController::class, 'show'])->name('');
Route::get('/gestionnaire/validerAssociation', [App\Http\Controllers\gestionnaire\ValiderAssociationController::class, 'index'])->name('validerAssoiationAffi');

//formulaire de demande ou de dont de sang
route:: get('/demandeDontSang', function() {
    return view('demandeDontSang');
});