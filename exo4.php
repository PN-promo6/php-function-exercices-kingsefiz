<?php
function Sum($array) // Fonction qui permet d'aditionner des entiers
{
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        $currentElement = $array[$i]; // On boucle sur le tableau $array pour récupérer la valeur actuelle du tableau
        if (is_array($currentElement)) { // Si la valeur contenue dans $currentElement est un tableau on lui applique la fonction Sum()
            $sum = $sum + Sum($currentElement); // La somme $sum vaudra la somme des précedents éléments plus la somme des élements du tableau $currentElement
        } else {
            $sum = $sum + $currentElement; // Si $currentElement est un entier et pas un tableau on se contente de l'aditionner à la somme précédente
        }
    }
    return $sum; // On retourne la somme de tous les élements
}

$tab = [1, 2, 3, array(1, 2, 3, array(4, 7, 9, 8, 7, 9, 5, 9, 5, 95, 49, 77))];
$result = Sum($tab);
echo $result; // Affichera 296
