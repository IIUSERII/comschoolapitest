<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Transport extends Controller
{

    public function index(){

        return DB::table('transport')
            ->get();

    }

    public function show($id){

        return DB::table('transport')
            ->where('transport.idTransport' , $id)
            ->get();

    }

    public function showEcole($id){

        return DB::table('transport')
            ->join('ecole' , 'transport.idEcole' , '=' , 'ecole.idEcole')
            ->select('ecole.*')
            ->get();

    }

    public function showChauffeur($id){

        return DB::table('transport')
            ->join('chauffeur' , 'transport.idTransport' , '=' , 'chauffeur.idTransport')
            ->where('transport.idTransport' , $id)
            ->select('chauffeur.*')
            ->get();

    }

    public function indexEtudiant($id){

        return DB::table('transport')
            ->join('etudiant' , 'transport.idTransport' , '=' , 'etudiant.idTransport')
            ->where('transport.idTransport' , $id)
            ->select('etudiant.*')
            ->get();

    }

    public function showEtudiant($id , $idEtudiant){

        return DB::table('transport')
            ->join('etudiant' , 'transport.idTransport' , '=' , 'etudiant.idTransport')
            ->where('transport.idTransport' , $id)
            ->where('etudiant.idEtudiant' , $idEtudiant)
            ->select('etudiant.*')
            ->get();

    }

    public function showEtudiantParent($id , $idEtudiant){

        return DB::table('transport')
            ->join('etudiant' , 'transport.idTransport' , '=' , 'etudiant.idTransport')
            ->join('parent' , 'etudiant.idParent' , '=' , 'parent.idParent')
            ->where('transport.idTransport' , $id)
            ->where('etudiant.idEtudiant' , $idEtudiant)
            ->select('parent.*')
            ->get();

    }

    public function showEtudiantLocalisation($id , $idEtudiant){

        return DB::table('transport')
            ->join('etudiant' , 'transport.idTransport' , '=' , 'etudiant.idTransport')
            ->join('localisation_etudiant' , 'etudiant.idEtudiant' , '=' , 'localisation_etudiant.idEtudiant')
            ->where('transport.idTransport' , $id)
            ->where('etudiant.idEtudiant' , $idEtudiant)
            ->select('localisation_etudiant.*')
            ->get();

    }

    public function showNotification($id){

        return DB::table('transport')
            ->join('notification' , 'transport.idTransport' , '=' , 'notification.idTransport')
            ->where('transport.idTransport' , $id)
            ->select('notification.*')
            ->get();

    }

    public function showLocalisation($id){

        return DB::table('transport')
            ->join('localisation' , 'transport.idTransport' , '=' , 'localisation.idTransport')
            ->where('transport.idTransport' , $id)
            ->select('localisation.*')
            ->get();

    }

}

?>
