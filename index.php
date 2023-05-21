<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>İletişim</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body class="body">
    
<div class="box">
<?php

$ad=$_POST["kullanici_adi"];
$sifre=$_POST["sifre"];

    if (!filter_var($ad, FILTER_VALIDATE_EMAIL)) 
    {
        
        $emailErr = "Geçersiz kullanıcı adı ! Lütfen tekrar deneyin <br>";
        echo $emailErr;
        #echo"<a href='0_login.html'>Login sayfasına git</a>";
        "<br>";
        header('Refresh: 5; Location: localhost/odev/index.html');
        
    }
    else
    {
        echo"Hoşgeldiniz ".$sifre."<br>";
        
        #echo"Kullanıcı adınız = ".$ad ."<br>"; 
        #echo"Şifreniz = ".$sifre."<br>";
        echo("Giriş başarıyla gerçekleştirildi.<br>");
        echo("Hakkımda sayfasına gitmek için: <a href=2_hakkimda.html>Tıklayın.</a>");
               
        
    
        #echo"<a href='1_girisSayfasi.html'>Giriş sayfasına git</a>";
    }

?>

</div>


</body>
</html>

