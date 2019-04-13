<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Etudiant extends Controller
{

    public function index(){

        return DB::table('etudiant')
            ->get();

    }

    public function show($id){

        return DB::table('etudiant')
            ->where('etudiant.idEtudiant' , $id)
            ->get();

    }

    public function showParent($id){

        return DB::table('etudiant')
            ->join('parent' , 'etudiant.idParent' , '=' , 'parent.idParent')
            ->where('etudiant.idEtudiant' , $id)
            ->select('parent.*')
            ->get();

    }

    public function showLocalisation($id){

        return DB::table('etudiant')
            ->join('localisation_etudiant' , 'etudiant.idEtudiant' , '=' , 'localisation_etudiant.idEtudiant')
            ->where('etudiant.idEtudiant' , $id)
            ->select('localisation_etudiant.*')
            ->get();

    }

    public function showTransport($id){

        return DB::table('etudiant')
            ->join('transport' , 'etudiant.idTransport' , '=' , 'transport.idTransport')
            ->where('etudiant.idEtudiant' , $id)
            ->select('transport.*')
            ->get();

    }

    public function showTransportLocalisation($id){

        return DB::table('etudiant')
            ->join('transport' , 'etudiant.idTransport' , '=' , 'transport.idTransport')
            ->join('localisation' , 'transport.idTransport' , '=' , 'localisation.idTransport')
            ->where('etudiant.idEtudiant' , $id)
            ->select('localisation.*')
            ->get();

    }

    public function showTransportChauffeur($id){

        return DB::table('etudiant')
            ->join('transport' , 'etudiant.idTransport' , '=' , 'transport.idTransport')
            ->join('localisation' , 'transport.idTransport' , '=' , 'localisation.idTransport')
            ->where('etudiant.idEtudiant' , $id)
            ->select('localisation.*')
            ->get();

    }

    public function showTransportNotification($id){

        return DB::table('etudiant')
            ->join('transport' , 'etudiant.idTransport' , '=' , 'transport.idTransport')
            ->join('notification' , 'transport.idTransport' , '=' , 'notification.idTransport')
            ->where('etudiant.idEtudiant' , $id)
            ->select('notification.*')
            ->get();

    }

}

?>
