<?php

// Récuperer les datas provenant du pets.json et les stocker dans la var $pets
function get_pets()
{
    $petsJson = file_get_contents('data/pets.json');
    $pets = json_decode($petsJson, true);

    return $pets;
}

// Enregistrement des datas dans le fichier JSON pets.json
function save_pets($petsToSave)
{
  $json = json_encode($petsToSave, JSON_PRETTY_PRINT);
  file_put_contents('data/pets.json', $json);
}
