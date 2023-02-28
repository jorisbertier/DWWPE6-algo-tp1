<?php 
function dateAvant($annee1, $mois1, $jour1, $annee2, $mois2, $jour2) {
    if($annee1 < $annee2 
    || ($annee1 == $annee2 && $mois1 < $mois2)
    || ($annee1 == $annee2 && $mois1 == $mois2 && $jour1 < $jour2)) {
        return true;
    }
    return false;
}

echo "Test dateAvant: ";
var_dump(dateAvant(2021, 10, 10, 2020, 10, 10));

function memeDate($annee1, $mois1, $jour1, $annee2, $mois2, $jour2) {
    if($annee1 == $annee2
    && $mois == $mois2
    && $jour1 == $jour2) {
        return true;
    }
    return false;
}

echo "Test memeDate: ";
var_dump(memeDate(2021, 10, 10, 2020, 10, 10));