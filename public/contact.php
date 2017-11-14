<?php


//inclusion du fichier config
require_once __DIR__.'/../inc/config.php';


// Initialisations
$lastName = '';
$firstName = '';
$email = '';
$message = '';



/*  Vérification des données
*****************************************/
// Si le tableau $_POST existe alors le formulaire a été envoyé
if(!empty($_POST))
{
  /*  Récupération des données
    *****************************************/
  $lastName = isset($_POST['lastName'])? $_POST['lastName']:'';
  $firstName = isset($_POST['firstName'])? $_POST['firstName']:'';
  $email = isset($_POST['email'])? $_POST['email']:'';
  $message = isset($_POST['message'])? $_POST['message']:'';

  /*  traitement des données
    *****************************************/
  $lastName = trim(strip_tags( $lastName ));   //trim — Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
  $firstName  = trim(strip_tags( $firstName ));  //strip_tags — Supprime les balises HTML et PHP d'une chaîne
  $email  = trim(strip_tags( $email ));
  $message = trim(strip_tags( $message ));

  /*  validation des données
    *****************************************/
  $formOk = true;

  // Le nom est-il rempli ?
  if(empty($lastName)){
        //echo 'Veuillez indiquer votre nom svp <br>';
        $formOk = false;
        $failedLastName[] = ' ! Veuillez indiquer votre nom svp <br>';
 }else if (strlen($lastName>=2)) { // nom de minimum 2 caractères
      //echo 'Le nom doit contenir au moins 2 caractères <br>';
      $formOk = false;
      $failedLastName[] = ' ! Le nom doit contenir au moins 2 caractères <br>';
  }



  // Le prénom est-il rempli ?
  if(empty($firstName)){
        //echo 'Veuillez indiquer votre prénom svp <br>';
        $formOk = false;
        $failedFirstName[] = ' ! Veuillez indiquer votre prénom svp <br>';
 }else if (strlen($firstName>=2)) { // prénom de minimum 2 caractères
      //echo 'Le prénom doit contenir au moins 2 caractères <br>';
      $formOk = false;
       $failedFirstName[] = ' ! Le prénom doit contenir au moins 2 caractères <br>';
  }


  // L'email est-il rempli ?
  if(empty($email)){
        //echo 'Veuillez indiquer votre email svp <br>';
        $formOk = false;
        $failedEmail[] = ' ! Veuillez indiquer votre email svp <br>';
 }else if (filter_var($email, FILTER_VALIDATE_EMAIL)=== false) { // Email format adpaté ?
      //echo 'Cet email a un format non adapté <br>';
      $formOk = false;
      $failedEmail[] = ' ! Cet email a un format non adapté <br>';
  }



  // Le message est-il rempli ?
  if(empty($message)){
        //echo 'Veuillez indiquer votre message svp <br>';
        $formOk = false;
        $failedEmail[] = ' ! Veuillez indiquer votre message svp <br>';
 }else if (strlen($message>=20)) { // message doit contenir au moins 20 caractères
      //echo 'Le message doit contenir au moins 20 caractères<br>';
      $formOk = false;
      $failedEmail[] = ' ! Le message doit contenir au moins 20 caractères<br>';
  }



  // Si aucune erreur de conditions
     if ($formOk) {
           //echo'Votre message a été envoyé';
           // On affiche au visiteur les données suivantes
           $successList[] = 'Votre message a été envoyé';



           $dataToEmail = 'From '.$firstName.' '.$lastName.'<br>email :'.$email.'<br>------------<br>'.$message;
           $subject = $firstName.' sent you a message';
           sendEmail($subject, $dataToEmail);
     }
}



// A la fin, j'affiche
require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/contact.php';
require_once __DIR__.'/../view/footer.php';
