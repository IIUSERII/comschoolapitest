<?php

namespace App\Http\Controllers;

use App\Library\QueryBuilder;
use Illuminate\Support\Facades\DB;

class Ecole extends Controller
{

    public function index(){
        return DB::table('ecole')
            ->get();

    }


    public function show($id){

        return DB::table('ecole')
            ->where('idEcole' , $id)
            ->get();

    }

    public function indexTransport($id){

        return DB::table('ecole')
            ->join('transport' , 'ecole.idEcole' , '=' , 'transport.idEcole')
            ->where('ecole.idEcole' , $id)
            ->select('transport.*')
            ->get();

    }

    public function indexEtudiant($id){

        return DB::table('ecole')
            ->join('etudiant' , 'ecole.idEcole' , '=' , 'etudiant.idEcole')
            ->where('ecole.idEcole' , $id)
            ->select('etudiant.*')
            ->get();

    }

    public function indexParent($id){

        return DB::table('ecole')
            ->join('parent' , 'ecole.idEcole' , '=' , 'parent.idEcole')
            ->where('ecole.idEcole' , $id)
            ->select('parent.*')
            ->get();

    }

    public function indexChauffeur($id){

        return DB::table('ecole')
            ->join('chauffeur' , 'ecole.idEcole' , '=' , 'chauffeur.idEcole')
            ->where('ecole.idEcole' , $id)
            ->select('chauffeur.*')
            ->get();

    }

    public function showTransport($id , $idTransport){

        return DB::table('ecole')
            ->join('transport' , 'ecole.idEcole' , '=' , 'transport.idEcole')
            ->where('ecole.idEcole' , $id)
            ->where('transport.idTransport' , $idTransport)
            ->select('transport.*')
            ->get();

    }

    public function showChauffeurByTransport($id , $idTransport){

        return DB::table('ecole')
            ->join('transport' , 'ecole.idEcole' , '=' , 'transport.idEcole')
            ->join('chauffeur' , 'transport.idTransport' , '=' , 'chauffeur.idTransport')
            ->where('ecole.idEcole' , $id)
            ->where('transport.idTransport' , $idTransport)
            ->select('chauffeur.*')
            ->get();

    }

    public function indexEtudiantByTransport($id , $idTransport){

        return DB::table('ecole')
            ->join('transport' , 'ecole.idEcole' , '=' , 'transport.idEcole')
            ->join('etudiant' , 'transport.idTransport' , '=' , 'etudiant.idTransport')
            ->where('ecole.idEcole' , $id)
            ->where('transport.idTransport' , $idTransport)
            ->select('etudiant.*')
            ->get();

    }

    public function showEtudiantByTransport($id , $idTransport , $idEtudiant){

        return DB::table('ecole')
            ->join('transport' , 'ecole.idEcole' , '=' , 'transport.idEcole')
            ->join('etudiant' , 'transport.idTransport' , '=' , 'etudiant.idTransport')
            ->where('ecole.idEcole' , $id)
            ->where('transport.idTransport' , $idTransport)
            ->where('etudiant.idEtudiant' , $idEtudiant)
            ->select('etudiant.*')
            ->get();

    }

    public function showEtudiantParentByTransport($id , $idTransport , $idEtudiant){

        return DB::table('ecole')
            ->join('transport' , 'ecole.idEcole' , '=' , 'transport.idEcole')
            ->join('etudiant' , 'transport.idTransport' , '=' , 'etudiant.idTransport')
            ->join('parent' , 'etudiant.idParent' , '=' , 'parent.idParent')
            ->where('ecole.idEcole' , $id)
            ->where('transport.idTransport' , $idTransport)
            ->where('etudiant.idEtudiant' , $idEtudiant)
            ->select('parent.*')
            ->get();

    }

    public function showEtudiantLocalisationByTransport($id , $idTransport , $idEtudiant){

        return DB::table('ecole')
            ->join('transport' , 'ecole.idEcole' , '=' , 'transport.idEcole')
            ->join('etudiant' , 'transport.idTransport' , '=' , 'etudiant.idTransport')
            ->join('localisation_etudiant' , 'etudiant.idEtudiant' , '=' , 'localisation_etudiant.idEtudiant')
            ->where('ecole.idEcole' , $id)
            ->where('transport.idTransport' , $idTransport)
            ->where('etudiant.idEtudiant' , $idEtudiant)
            ->select('localisation_etudiant.*')
            ->get();

    }

    public function showNotificationByTransport($id , $idTransport){

        return DB::table('ecole')
            ->join('transport' , 'ecole.idEcole' , '=' , 'transport.idEcole')
            ->join('notification' , 'transport.idTransport' , '=' , 'notification.idTransport')
            ->where('ecole.idEcole' , $id)
            ->where('transport.idTransport' , $idTransport)
            ->select('notification.*')
            ->get();

    }

    public function showLocalisationByTransport($id , $idTransport){

        return DB::table('ecole')
            ->join('transport' , 'ecole.idEcole' , '=' , 'transport.idEcole')
            ->join('localisation' , 'transport.idTransport' , '=' , 'localisation.idTransport')
            ->where('ecole.idEcole' , $id)
            ->where('transport.idTransport' , $idTransport)
            ->select('localisation.*')
            ->get();

    }


}

?>
