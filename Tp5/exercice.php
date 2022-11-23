<?php

    $tabIni=parse_ini_file("config.ini",true);

    $nomFichier=$tabIni['NOMFIC']['nom'];
    $nomFichier.=".html";

    $nombreCases=$tabIni['NB']['nbre'];

    $nomFormulaire=$tabIni['NOMS']['champs'];

    
    $html="<html>";
    $html.="<body>";
    $html.="<form>";
    
    for ($i=0; $i < $nombreCases; $i++) { 
        $html.="<input type='text' placeholder='".$nomFormulaire[$i]."'>";
    }
    
    
    $html.="</html>";
    $html.="</body>";
    $html.="</form>";
    
    
    $fichierHTML=fopen($nomFichier,"w");
    fputs($fichierHTML,$html);
    fclose($fichierHTML);

    print("<html><a href='".$nomFichier."' /a></html>")
?>
