<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Parent_Etd extends Controller{

    public function index(){

        return DB::table('parent')
            ->get();

    }

    public function show($id){

        return DB::table('parent')
            ->where('parent.idParent' , $id)
            ->get();

    }

    public function indexEtudiant($id){

        return DB::table('parent')
            ->join('etudiant' , 'parent.idParent' , '=', 'etudiant.idParent')
            ->where('parent.idParent' , $id)
            ->select('etudiant.*')
            ->get();

    }

    public function showEtudiant($id , $idEtudiant){

        return DB::table('parent')
            ->join('etudiant' , 'parent.idParent' , '=', 'etudiant.idParent')
            ->where('parent.idParent' , $id)
            ->where("etudiant.idEtudiant" , $idEtudiant)
            ->select('etudiant.*')
            ->get();

    }

    public function showEtudiantLocalisation($id , $idEtudiant){

        return DB::table('parent')
            ->join('etudiant' , 'parent.idParent' , '=', 'etudiant.idParent')
            ->join('localisation_etudiant' , 'etudiant.idEtudiant' , '=' , 'localisation_etudiant.idEtudiant')
            ->where('parent.idParent' , $id)
            ->where("etudiant.idEtudiant" , $idEtudiant)
            ->select('localisation_etudiant.*')
            ->get();

    }

    public function showEtudiantTransport($id , $idEtudiant){

        return DB::table('parent')
            ->join('etudiant' , 'parent.idParent' , '=' , 'etudiant.idParent')
            ->join('transport' , 'transport.idTransport' , '=' , 'etudiant.idTransport')
            ->where('parent.idParent' , $id)
            ->where('etudiant.idEtudiant' , $idEtudiant)
            ->select('transport.*')
            ->get();

    }

    public function showEtudiantTransportLocalisation($id , $idEtudiant){

        return DB::table('parent')
            ->join('etudiant' , 'parent.idParent' , '=' , 'etudiant.idParent')
            ->join('transport' , 'transport.idTransport' , '=' , 'etudiant.idTransport')
            ->join('localisation' , 'transport.idTransport' , '=' , 'localisation.idTransport')
            ->where('parent.idParent' , $id)
            ->where('etudiant.idEtudiant' , $idEtudiant)
            ->select('localisation.*')
            ->get();

    }

    public function showEtudiantTransportChauffeur($id , $idEtudiant){

        return DB::table('parent')
            ->join('etudiant' , 'parent.idParent' , '=' , 'etudiant.idParent')
            ->join('transport' , 'transport.idTransport' , '=' , 'etudiant.idTransport')
            ->join('chauffeur' , 'transport.idTransport' , '=' , 'chauffeur.idParent')
            ->where('parent.idParent' , $id)
            ->where('etudiant.idEtudiant' , $idEtudiant)
            ->get();

    }

    public function showEtudiantTransportNotification($id , $idEtudiant){

        return DB::table('parent')
            ->join('etudiant' , 'parent.idParent' , '=' , 'etudiant.idParent')
            ->join('transport' , 'transport.idTransport' , '=' , 'etudiant.idTransport')
            ->join('notification' , 'transport.idTransport' , '=' , 'notification.idTransport')
            ->where('parent.idParent' , $id)
            ->where('etudiant.idEtudiant' , $idEtudiant)
            ->get();

    }

}
