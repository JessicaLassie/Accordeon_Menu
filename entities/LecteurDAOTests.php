<?php

require_once "LecteurDAO.php";

try {
    $lcn = new PDO("mysql:host=localhost;dbname=5Minutes", "root", "");
    $lcn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $lcn->setAttribute(PDO::ATTR_AUTOCOMMIT, FALSE);
    $lcn->exec("SET NAMES 'UTF8'");

    echo "<hr>selectAll<hr>";
    $lsContenu = "";
    $tLines = selectAll($lcn);

    foreach ($tLines as $line) {
        foreach ($line as $field => $value) {
            $lsContenu .= $value;
        }
        $lsContenu .= "\n";
    }
    echo nl2br($lsContenu);
} catch (PDOException $e) {
    $lsMessage = $e->getMessage();
}
?>

