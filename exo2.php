<?php
function DecodeDNA(string $gen1, string $gen2): string
{
    $adn = ""; // Variable qui va contenir les différentes lettres
    for ($i = 0; $i < strlen($gen1) && $i < strlen($gen2); $i++) { // Boucle qui commence à 0 et qui s'arrête quand l'une des deux chaines sont terminées"
        $currentLetter1 = $gen1[$i]; // On stocke la variable $gen1[i] dans une variable $currentLetter1 pour la manipuler facilement
        $currentLetter2 = $gen2[$i]; // On stocke la variable $gen2[i] dans une variable $currentLetter 2 pour la manipuler facilement
        if ($currentLetter1 != $currentLetter2) {
            $adn = $adn . "^"; // Si la lettre du gêne 1 est différente de la lettre du gêne 2 on ajoute "^" à la chaine $adn.
        } else {
            $adn = $adn . " "; // Si la lettre du gêne 1 est identique à la lettre du gêne 2 on ajoute un espace " " à la chaine $adn.
        }
    }
    return $adn;
}

$gen1 = "GAGCCTACTAACGGGAT";
$gen2 = "CATCGTAATGACGGCCT";
echo (DecodeDNA($gen1, $gen2));
