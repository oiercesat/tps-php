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
        $html.="<input type='text' id=\"".$nomFormulaire[$i]."\" placeholder=\"".$nomFormulaire[$i]."\"/input>";
    }
    
    
    $html.="</html>";
    $html.="</body>";
    $html.="</form>";

    $php="<?php";

    
    $php.="?>";
    
    
    $fichierHTML=fopen($nomFichier,"w");
    fputs($fichierHTML,$html);
    fclose($fichierHTML);

    $a="<html>";
    $a.="<a href=\">";
    $a.=$nomFichier;
    $a.="\"/a></html>";

    print($a);
    print($nomFichier);
?>
