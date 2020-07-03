<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('template');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

$nom = 'Jerem';
$title = "Titre de la page";
$template = $twig->load('base.html.twig');
echo $template->render(['title'=> $title , 'nom'=> $nom]);