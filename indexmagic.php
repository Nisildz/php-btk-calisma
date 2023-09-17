<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>extra eğitim</title>
</head>
<body>
    <?php

    echo "buluduğu satır numarası=" . __LINE__;
    echo "<br />".__DIR__;
    echo "<br />".__FILE__;

function Elma(){
    echo "<br />".__FUNCTION__;
}
Elma();

class Deger {
    function Deneme(){
        echo "<br />".__CLASS__;
        echo "<br />".__METHOD__;
    

    }
}

$Islem= new Deger;
$Islem->Deneme();
    



    ?> 
</body>
</html>