<?php
/**
 * Created by PhpStorm.
 * User: moinlau
 * Date: 08.05.2018
 * Time: 09:48
 */


// les contrôleurs accèdent à la config du site
//require_once 'inc/config.php';
require_once 'inc/utils.php';


//initialaisation des variables
$livret= null;
$errors=[];


//gestion du formulaire
if(isset($_GET['btnCalculer'])){
    $livret = filter_input(INPUT_GET, 'zLivret', FILTER_VALIDATE_INT, [
        'options' => [
            'min_range' => 1,
            'max_range' => 12
        ]
    ]);

    if ($livret === false) {
        $errors[]='pas dans la plage';
    }

    r($livret);
}




// appel de la vue corresppondante
include 'view/accueil.view.php';

