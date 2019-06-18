<?php
if (isset($_POST['chiffre'])) {
    $nbr = $_POST['chiffre'];
    if ($_POST['chiffre']=== null || empty($_POST['chiffre']) || $_POST['chiffre'] === 'valeurnulle') {
        $nbr = 0;
    }
    $traitement = fopen('nombre.txt', 'w');
        if (fwrite($traitement, $nbr)) {
            echo intval($nbr);
        }
    fclose($traitement);
}
