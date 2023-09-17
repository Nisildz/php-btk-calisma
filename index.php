<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>extra eğitim</title>
</head>
<body>
    <?php

trait OzellikBir{
    function yazbir(){
        echo __TRAIT__;

    }
}

trait Ozellikİki{
    function yaziki(){
        echo __TRAIT__;

    }
}

class extraegitim{
    use OzellikBir;
    use Ozellikİki;
}

$Islem= new extraegitim;
$Islem->yazbir();
echo "<br />";
$Islem->yaziki();

    ?> 
</body>
</html>