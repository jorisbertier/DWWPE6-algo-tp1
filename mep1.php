<?php 

function estBissextile($annee)
{
    if (($annee % 400) == 0) {
        return true;
    }
    if(($annee % 100) == 0) {
        return false;
    }
    if(($annee % 4) == 0) {
        return true;
    }
    return false;
}

echo "Test de 1600: ";
var_dump(estBissextile(1600));



function estValideJour($annee, $mois, $jour)
{
    if($jour < 1) {
        return false;
    }
    if(($mois == 4 || $mois == 6 || $mois == 9 || $mois == 11) && $jour <= 30) {
        return true;           
    }
    if($mois == 2) {
        if(estBissextile($annee) && $jour <= 29 || $jour <= 28) {
            return true;
            
        }
        else{
            return false;
        }
    }
    if($jour <= 31) {
        return true;
    }
    return false;
}

echo "Test de février: ";
var_dump(estValideJour(2021, 02, 31));

function estValideMois($mois) {
    if($mois >= 1 && $mois <= 12) {
        return true;
    }
    return false;
}
echo "Test de mois: ";
var_dump(estValideMois(12));


function estValideAnnee($annee) {
    if ($annee != 0) {
        return true;
    }
    return false;
}

echo "Test de année: ";
var_dump(estValideMois(1));

function estValide($annee, $mois, $jour) {
    if(estValideAnnee($annee) && estValideMois($mois) && estValideJour($annee, $mois, $jour)) {
        return true;
    }
    return false;
}

echo "Test de année mois et jour: ";
var_dump(estValide(2025, 14, 12));

