<?php

/*
 *
 *
 *  API ROUTES
 *
 *
 */


$router->group(['prefix' => 'api/public'] , function () use ($router){

    $router->group(['prefix' => 'ecole'] , function () use ($router){

        $router->get('' , 'Ecole@index');

        $router->get('{id}' , 'Ecole@show');

        $router->get('{id}/etudiants/' , 'Ecole@indexEtudiant');

        $router->get('{id}/parents/' , 'Ecole@indexParent');

        $router->get('{id}/chauffeurs/' , 'Ecole@indexChauffeur');

        $router->get('{id}/transports/' , 'Ecole@indexTransport');

        $router->get('{id}/transport/{idTransport}' , 'Ecole@showTransport');

        $router->get('{id}/transport/{idTransport}/chauffeur' , 'Ecole@showChauffeurByTransport');

        $router->get('{id}/transport/{idTransport}/etudiants/{query?}' , 'Ecole@indexEtudiantByTransport');

        $router->get('{id}/transport/{idTransport}/etudiant/{idEtudiant}' , 'Ecole@showEtudiantByTransport');

        $router->get('{id}/transport/{idTransport}/etudiant/{idEtudiant}/parent' , 'Ecole@showEtudiantParentByTransport');

        $router->get('{id}/transport/{idTransport}/etudiant/{idEtudiant}/localisation' , 'Ecole@showEtudiantLocalisationByTransport');

        $router->get('{id}/transport/{idTransport}/notification' , 'Ecole@showNotificationByTransport');

        $router->get('{id}/transport/{idTransport}/localisation' , 'Ecole@showLocalisationByTransport');

    });

    $router->group(['prefix' => 'transport'] , function () use($router){

        $router->get('' , 'Transport@index');

        $router->get('{id}' , 'Transport@show');

        $router->get('{id}/ecole' , 'Transport@showEcole');

        $router->get('{id}/chauffeur' , 'Transport@showChauffeur');

        $router->get('{id}/etudiants' , 'Transport@indexEtudiant');

        $router->get('{id}/etudiant/{idEtudiant}' , 'Transport@showEtudiant');

        $router->get('{id}/etudiant/{idEtudiant}/parent' , 'Transport@showEtudiantParent');

        $router->get('{id}/etudiant/{idEtudiant}/localisation' , 'Transport@showEtudiantLocalisation');

        $router->get('{id}/notification' , 'Transport@showNotification');

        $router->get('{id}/localisation' , 'Transport@showLocalisation');

    });

    $router->group(['prefix' => 'etudiant'] , function () use($router){

        $router->get('' , 'Etudiant@index');

        $router->get('{id}' , 'Etudiant@show');

        $router->get('{id}/parent' , 'Etudiant@showParent');

        $router->get('{id}/localisation' , 'Etudiant@showLocalisation');

        $router->get('{id}/transport' , 'Etudiant@showTransport');

        $router->get('{id}/transport/localisation' , 'Etudiant@showTransportLocalisation');

        $router->get('{id}/transport/chauffeur' , 'Etudiant@showTransportChauffeur');

        $router->get('{id}/transport/chauffeur/notification' , 'Etudiant@showTransportNotification');

    });

    $router->group(['prefix' => 'parent'] , function () use($router){

        $router->get('' , 'Parent@index');

        $router->get('{id}' , 'Parent@show');

        $router->get('{id}/etudiants' , 'Parent@indexEtudiant');

        $router->get('{id}/etudiant/{idEtudiant}' , 'Parent@showEtudiant');

        $router->get('{id}/etudiant/{idEtudiant}/localisation' , 'Parent_Etd@showEtudiantLocalisation');

        $router->get('{id}/etudiant/{idEtudiant}/transport' , 'Parent@showEtudiantTransport');

        $router->get('{id}/etudiant/{idEtudiant}/transport/localisation' , 'Parent@showEtudiantTransportLocalisation');

        $router->get('{id}/etudiant/{idEtudiant}/transport/chauffeur' , 'Parent@showEtudiantTransportChauffeur');

        $router->get('{id}/etudiant/{idEtudiant}/transport/notification' , 'Parent@showEtudiantTransportNotification');

    });

    $router->group(['prefix' => 'chauffeur'] , function () use($router){

        $router->get('' , 'Chauffeur@index');

        $router->get('{id}' , 'Chauffeur@show');

        $router->get('{id}/transport' , 'Chauffeur@showTransport');

        $router->get('{id}/ecole' , 'Chauffeur@showEcole');

    });

});
?>
