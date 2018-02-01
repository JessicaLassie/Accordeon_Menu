<?php

require_once '../entities/LecteurDAO.php';
require_once '../lib/Connexion.php';

try {

    $lcn = seConnecter("../conf/5minutes.ini");

    $tLines = selectAll($lcn);

    $soufflet = "";
    $villeBefore = "";
    $lbPremier = true;

    for ($i = 0; $i < count($tLines); $i++) {

        $villeCurrent = $tLines[$i]["nomVille"];

        if ($villeCurrent != $villeBefore) {

            if (!$lbPremier) {
                $soufflet .= "</ul>\n";
                $soufflet .= "</div>\n";
            }

            $soufflet .= "<div class = 'soufflet'>\n";
            $soufflet .= "<h5><a href = '#'>" . $tLines[$i]["nomVille"] . "</a></h5>\n";
            $soufflet .= "<div class = 'contenuSoufflet'>\n";
            $soufflet .= "<ul>\n";

            $villeBefore = $villeCurrent;
        }
        $soufflet .= "<li>" . $tLines[$i]["prenomLecteur"] . " " . $tLines[$i]["nomLecteur"] . "</li>\n";

        if ($i == 0) {
            $lbPremier = false;
        }
    }

    echo $soufflet;

    $lcn = null;
} catch (PDOException $e) {
    $lsMessage = $e->getMessage();
}

