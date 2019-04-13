<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Chauffeur extends Controller{

    public function index(){

        return DB::table('chauffeur')->get();

    }

    public function show($id){

        return DB::table('chauffeur')
            ->where('chauffeur.idChauffeur' , $id)
            ->get();

    }

    public function showTransport($id){

        return DB::table('chauffeur')
            ->join('transport' , 'chauffeur.idTransport' , '=' , 'transport.idTransport')
            ->where('chauffeur.idChauffeur' , $id)
            ->select('transport.*')
            ->get();

    }

    public function showEcole($id){

        return DB::table('chauffeur')
            ->join('transport' , 'chauffeur.idTransport' , '=' , 'transport.idTransport')
            ->join('ecole' , 'ecole.idEcole' ,'=','Transport.idEcole')
            ->where('chauffeur.idChauffeur' , $id)
            ->select('ecole.*')
            ->get();

    }

}


?>
