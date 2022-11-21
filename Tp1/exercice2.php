<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1</title>
</head>
<body>
    <?php
    $tableauChaine=explode(".",$_SERVER["REMOTE_ADDR"]);
    $ip0=$tableauChaine[0];
    settype($ip0,"integer");
    

    if($ip0<128){
        print("Adresse : ".$_SERVER["REMOTE_ADDR"]."(classe A)");
    }
    else if($ip0>=128 && $ip0<193){
        print("Adresse : ".$_SERVER["REMOTE_ADDR"]."(classe B)");
    }
    else{
        print("Adresse : ".$_SERVER["REMOTE_ADDR"]."(classe C)");
    }
    ?>
</body>
</html>