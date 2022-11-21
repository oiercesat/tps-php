<html>
    <body>
        <?php
        $mon_fichier = fopen("resto.csv","r");

        while(!feof($mon_fichier)){
            $ligne=fgets($mon_fichier);
            $tab=explode(";",$ligne);
            print("Prénom : ".$tab[0]." <BR>");
            print("Nom : ".$tab[1]." <BR>");
            print("Restaurant : ".$tab[2]." <BR>");
            print("<HR>");
        }
        fclose($mon_fichier);
        ?>
    </body>
</html>