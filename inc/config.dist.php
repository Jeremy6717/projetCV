<?php



// Données de configuration
$config= array(
  'DB_HOST' => '',
  'DB_USERNAME' => '',
  'DB_PASSWORD' => '',
  'DB_DATABASE' => ''
);


//inclusion des fichiers
require_once __DIR__.'/db.php';
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
