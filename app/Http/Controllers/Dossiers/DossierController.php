<?php

namespace App\Http\Controllers\Dossiers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Models\Dossier\DossierPedagogique;
use App\Models\Dossier\DossierScientifique;
use App\Models\Dossier\DossierAdministratif;

class DossierController extends Controller
{


public function formDossiers(){
    return view('Dossiers.uploadDossiers');
}

    public function storeDossiers(request $req){
        $dossier_pedagogique    = new DossierPedagogique;
        $dossier_administratif  = new DossierAdministratif;
        $dossier_scientifique   = new DossierScientifique;



            $dossier_pedagogique->nom               = $req->dossier_pedagogique;
            $dossier_pedagogique->etat_dossier      ="En attente";
            $dossier_pedagogique->user_id           =Auth::user()->id;
            $dossier_pedagogique->nom_prof          =Auth::user()->name;
            $dossier_pedagogique->save();

            $dossier_administratif->nom               = $req->dossier_administratif;
            $dossier_administratif->etat_dossier      ="En attente";
            $dossier_administratif->user_id           =Auth::user()->id;
            $dossier_administratif->nom_prof          =Auth::user()->name;
            $dossier_administratif->save();


            $dossier_scientifique->nom               = $req->dossier_scientifique;
            $dossier_scientifique->etat_dossier      ="En attente";
            $dossier_scientifique->user_id           =Auth::user()->id;
            $dossier_scientifique->nom_prof          =Auth::user()->name;
            $dossier_scientifique->save();

            Toastr::success('successfully ','Success');
            return redirect()->route('userManagement');
    }

     public function validate_dossierPedagogique_ByAdmin($id){
        $update=[
            'etat_dossier' => 'valide',
        ];
        DB::table('dossier_pedagogiques')->where('id',$id)->update($update);
        return redirect()->route('home');

     }
     public function delete_dossierPedagogique_ByAdmin($id){
        $delete = DossierPedagogique::find($id);
        $delete->delete();
        Toastr::success('Dossier deleted successfully :)','Success');
        return redirect()->route('home');
     }

}
