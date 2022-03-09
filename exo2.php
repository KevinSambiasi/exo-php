<?php


// $sex = readline('de quel sexe ête vous ? ');
// if ($sex == 'homme') {
//     echo 'vous êtes un monsieur';
// } elseif ($sex == 'femme') {
//     echo 'vous êtes une madame';
// } else {
//     echo 'vous n\'exister pas';
// }


// $budget = 1853.89;
// $achat = 1554.76;

// if ($budget < $achat) {
//     echo 'vous n\'avez pas asser d\'argent';
// } else {
//     echo 'vous avez asser d\'argent';
// }


// $age = 18;
// if ($age >= 18) {
//     echo 'vous êtes majeur';
// } else {
//     echo 'vous êtes mineur';
// }



$heure = (int)readline('quel heure est il ? ');
if ($heure >= 6 && $heure < 12) {
    echo 'c\'est le matin';
} elseif ($heure >= 12 && $heure < 16) {
    echo 'c\'est l\'après midi';
} elseif (($heure >= 16 && $heure <= 24) || ($heure >= 0 && $heure < 6)) {
    echo 'c\'est la nuit';
}else {
    echo 'donnez une heure valide';
}
