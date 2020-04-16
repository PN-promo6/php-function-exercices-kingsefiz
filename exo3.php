<?php
function CanWrite($magazine, $message)
{
    $letterBank = array();
    for ($i = 0; $i < strlen($magazine); $i++) {
        $currentLetter1 = $magazine[$i];
        if (array_key_exists($currentLetter1, $letterBank)) {
            $letterBank[$currentLetter1] += 1;
        } else {
            $letterBank[$currentLetter1] = 1;
        }
    }

    for ($i = 0; $i < strlen($message); $i++) {
        $currentLetter2 = $message[$i];
        if (!array_key_exists($currentLetter2, $letterBank)) {
            echo "Vous ne pouvez pas écrire ce message";
            return false;
        } else if ($letterBank[$currentLetter2] > 0) {
            --$letterBank[$currentLetter2];
        } else {
            echo "Vous ne pouvez pas écrire ce message";
            return false;
        }
    }
    echo "Vous pouvez écrire ce message";
    return true;
}

CanWrite("Il a pas dit bonjour", "bonnjour");
