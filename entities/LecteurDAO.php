<?php

function selectAll(PDO $pdo) {
    $liste = array();
    try {
        $sql = 'SELECT prenomLecteur, nomLecteur, nomVille FROM lecteur INNER JOIN ville ON lecteur.idVille=ville.idVille ORDER BY nomVille';
        $lrs = $pdo->query($sql);
        $lrs->setFetchMode(PDO::FETCH_ASSOC);
        while ($enr = $lrs->fetch()) {
            $liste[] = $enr;
        }
    } catch (PDOException $e) {
        $enr = array();
        $enr[] = $e->getMessage();
        $liste[] = $enr;
    }
    return $liste;
}

?>
