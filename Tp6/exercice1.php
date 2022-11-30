<?php
    $dom = new DomDocument;
    $dom->load("exercice1.xml");
    $listePays = $dom->getElementsByTagName('pays');
    foreach ($listePays as $pays)
        if ($pays==$_GET["text"]) {
            echo json_encode($pays);
        }
?>