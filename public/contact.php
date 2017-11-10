<?php


//inclusion du fichier config
require_once __DIR__.'/../inc/config.php';


// Initialisations
$name = '';
$firstName = '';
$message = '';



/*  Vérification des données
*****************************************/
// Si le tableau $_POST existe alors le formulaire a été envoyé
if(!empty($_POST))
{
  /*  Récupération des données
    *****************************************/
  $name = isset($_POST['name'])? $_POST['name']:'';
  $firstName = isset($_POST['firstName'])? $_POST['firstName']:'';
  $message = isset($_POST['message'])? $_POST['message']:'';

  /*  traitement des données
    *****************************************/
  $name = trim(strip_tags( $name ));   //trim — Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
  $firstName  = trim(strip_tags( $firstName ));
  $message = trim(strip_tags( $message ));

  /*  validation des données
    *****************************************/
  $formOk = true;

  // Le nom est-il rempli ?
  if(empty($name)){
        echo 'Veuillez indiquer votre nom svp <br>';
        $formOk = false;
 }else if (strlen($name>=2)) { // nom de minimum 2 caractères
      echo 'Le nom doit contenir au moins 2 caractères <br>';
      $formOk = false;
  }



  // Le prénom est-il rempli ?
  if(empty($firstName)){
        echo 'Veuillez indiquer votre prénom svp <br>';
        $formOk = false;
 }else if (strlen($firstName>=2)) { // prénom de minimum 2 caractères
      echo 'Le prénom doit contenir au moins 2 caractères <br>';
      $formOk = false;
  }


  // Le prénom est-il rempli ?
  if(empty($message)){
        echo 'Veuillez indiquer votre message svp <br>';
        $formOk = false;
 }else if (strlen($name>=20)) { // message doit contenir au moins 20 caractères
      echo 'Le message doit contenir au moins 20 caractères<br>';
      $formOk = false;
  }



  // Si aucune erreur de conditions
 //    if ($formOk) {


//}

// A la fin, j'affiche
require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/contact.php';
require_once __DIR__.'/../view/footer.php';
