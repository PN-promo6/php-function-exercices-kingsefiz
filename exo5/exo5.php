<?php

function Decrypt($cryptedMessage, $codex)
{
    for ($i = 0; $i < strlen($cryptedMessage); $i++) {
        $currentLetter = $cryptedMessage[$i];
        echo $codex[$currentLetter];
    }
}

$message = "DAOMKT EGKZTAW LWK WF AKZKT HTKEIT MTFAOM TF LGF ZTE WF YKGDAUT DAOMKT KTFAKR HAK S GRTWK ASSTEIT SWO MOFM A HTW HKTL ET SAFUAUT TI ZGFPGWK DGFLOTWK RW EGKZTAW JWT XGWL TMTL PGSO JWT XGWL DT LTDZSTN ZTAW LAFL DTFMOK LO XGMKT KADAUT LT KAHHGKMT A XGMKT TDHSWDAUT XGWL TMTL ST HITFOV RTL IGMTL RT ETL ZGOL A ETL DGML ST EGKZTAW FT LT LTFM HAL RT PGOT TM HGWK DGFMKTK LA ZTSST XGOV OS GWXKT WF SAKUT ZTE SAOLLT MGDZTK LA HKGOT ST KTFAKR L TF LAOLOM TM ROM DGF ZGF DGFLOTWK AHHKTFTN JWT MGWM YSAMMTWK XOM AWV RTHTFL RT ETSWO JWO S TEGWMT ETMMT STEGF XAWM ZOTF WF YKGDAUT LAFL RGWMT ST EGKZTAW IGFMTWV TM EGFYWL PWKA DAOL WF HTW MAKR JW GF FT S B HKTFRKAOM HSWL";

$codex = array(
    "A" => "A",
    "Z" => "B",
    "E" => "C",
    "R" => "D",
    "T" => "E",
    "Y" => "F",
    "U" => "G",
    "I" => "H",
    "O" => "I",
    "P" => "J",
    "Q" => "K",
    "S" => "L",
    "D" => "M",
    "F" => "N",
    "G" => "O",
    "H" => "P",
    "J" => "Q",
    "K" => "R",
    "L" => "S",
    "M" => "T",
    "W" => "U",
    "X" => "V",
    "C" => "W",
    "V" => "X",
    "B" => "Y",
    "N" => "Z",
    " " => " "
);

Decrypt($message, $codex);

function Encrypt($message, $decodex)
{
    for ($i = 0; $i < strlen($message); $i++) {
        $currentLetter = $message[$i];
        echo $decodex[$currentLetter];
    }
}

$decodex = array(
    "A" => "A",
    "B" => "Z",
    "C" => "E",
    "D" => "R",
    "E" => "T",
    "F" => "Y",
    "G" => "U",
    "H" => "I",
    "I" => "O",
    "J" => "P",
    "K" => "Q",
    "L" => "S",
    "M" => "D",
    "N" => "F",
    "O" => "G",
    "P" => "H",
    "Q" => "J",
    "R" => "K",
    "S" => "L",
    "T" => "M",
    "U" => "W",
    "V" => "X",
    "W" => "C",
    "X" => "V",
    "Y" => "B",
    "Z" => "N",
    " " => " "
);

$messageToCrypt = "JE VIENS DE FINIR CETTE EXERCICE ET JE TESTE UN NOUVEAU CODE POUR CRYPTER DES MESSAGES";

Encrypt($messageToCrypt, $decodex);
