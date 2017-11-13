<?php



// Données de configuration
$config= array(
  'MAIL_HOST' => 'smtp.gmail.com',   // celle-ci avec les deux suivante => données de connexion dans le fichier function.php pour l'envoi de mail   VOIR GMAIL
  'MAIL_USERNAME' => 'jeremydeumer@gmail.com',
  'MAIL_PASSWORD' => trim(file_get_contents(__DIR__.'/pwd.txt')),
);


//inclusion des fichiers
require_once __DIR__.'/functions.php';

// Inclusion de composer
require_once __DIR__.'/../vendor/autoload.php';



//Social network
//Create a Page instance with the url information
$socialLinksPage = new SocialLinks\Page([
    'url' => 'http://jeremy-deumer.com',
    'title' => 'CV de Jérémy Deumer',
    'text' => '',
    'image' => 'http://mypage.com/image.png',
    'icon' => 'http://mypage.com/favicon.png',
]);
