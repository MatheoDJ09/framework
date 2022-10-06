<?php

//Nouvelle instance du constructeur du conteneur 
$builder = new DI\ContainerBuilder();
// Ajout des definitions 

$builder->addDefinitions (__DIR__ . "/dependencies.php");
$container = $builder->build();

return $container; 



/* // Nouvelle instance du constructeur du conteneur 
$builder = new DI\ContainerBuilder();

// Ajout des définitions
// Les définitions représentent les dépendences internes dont notre application
$builder->addDefinitions(__DIR__ . "/config/dependenciesInjection/dependencies.php");

// Création d'une conteneur grâce à son builder
$container = $builder->build();

// Dès que ce fichier container sera appelé (require) quelque part,
// il doit nous retourner le conteneur
return $container; */