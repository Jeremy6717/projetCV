<?php



// Données de configuration
$config= array(
  'MAIL_HOST' => 'localhost',   // celle-ci avec les deux suivante => données de connexion dans le fichier function.php pour l'envoi de mail
  'MAIL_USERNAME' => 'jeremydeumer@gmail.com',
  'MAIL_PASSWORD' => file_get_contents('../inc/pwd.txt'),
);


//inclusion des fichiers
require_once __DIR__.'/functions.php';

// Inclusion de composer
require_once __DIR__.'/../vendor/autoload.php';

//Social network
//Create a Page instance with the url information
$socialLinksPage = new SocialLinks\Page([
    'url' => 'http://jeremy-deumer.com',
    'title' => 'CV Jérémy Deumer',
    'text' => '',
    'image' => 'http://mypage.com/image.png',
    'icon' => 'http://mypage.com/favicon.png',
]);
