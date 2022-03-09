<?php

// // variables valides : $a $1a $a1


$a = '42';
$b = 42;
$c = 'Hello Wolrd';
echo "$a $b $c ";





$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;
$moyenne = ($note_francais + $note_histoire_geo + $note_maths) / 3;
echo 'La moyenne est de ' . $moyenne . ' / 20.';




$prix_ht = 50;
$tva = 20;
$prix_ttc = $prix_ht + ($prix_ht * ($tva / 100));
echo 'Le prix TTC du produit est de ' . $prix_ttc . ' €.';


