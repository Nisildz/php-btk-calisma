<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>extra eğitim</title>
</head>
<body>
    <?php


$sayi=1453; 

echo gettype($sayi)."<br>";//integer yazacak

settype($sayi,"string")."<br>";//veri tipi string oldu

echo gettype($sayi)."<br>";//Ekrana string yazacak

$a=3.27;

echo gettype($a)."<br>";//double yazacak

settype($a,"integer")."<br>";//veri tipi integer oldu

echo gettype($a)."<br>";//Ekrana integer yazacak

echo "a'nın değeri..:".$a;


</body>
</html>