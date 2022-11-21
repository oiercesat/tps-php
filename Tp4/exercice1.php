<?php
    $bdd="roose";
    $host="lakartxela.iutbayonne.univ-pau.fr";
    $user="roose";
    $mdp="roose";
    $compteur=0;
    
    //print("tentative de connexion sur la base de donnée");
    
    $link=mysqli_connect($host,$user,$mdp,$bdd) or die ("Impossible de se connecter à la base de données");
    
    $query="SELECT * FROM bourse";
    $resultat=mysqli_query($link,$query);
    
    if (mysqli_connect_errno()) {
        print("erreur de select");
        exit();
    }
    
    header("Content-type: image/jpeg");

    $image=imagecreate(500,500);

    $red = imagecolorallocate($image,255,0,0);
    $green = imagecolorallocate($image,0,255,0);
    $white = imagecolorallocate($image,255,255,255);

    imagefill($image,500,500,$red);

    while ($donnees=mysqli_fetch_assoc($resultat)) {
    
        $decalage=$compteur*35;

        $champ1=$donnees["ville"];
        $champ2=$donnees["indice"];

        imagefilledrectangle($image,70+$decalage,500,100+$decalage,500-$champ2*10,$green);
        imagestringup($image,2,80+$decalage,(500-$champ2*10)-20,$champ1." | ".strval($champ2),$white);

        $compteur++;
    }

    imagejpeg($image);

    imagedestroy($image);
?>