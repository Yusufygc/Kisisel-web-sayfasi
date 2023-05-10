
<?php

$ad=$_POST["kullanici_adi"];
$sifre=$_POST["sifre"];

    if (!filter_var($ad, FILTER_VALIDATE_EMAIL)) 
    {
        
        $emailErr = "Geçersiz kullanıcı adı ! Lütfen tekrar deneyin <br>";
        echo $emailErr;
        #echo"<a href='0_login.html'>Login sayfasına git</a>";
        "<br>";
        header('Refresh: 5; Location: localhost/odev/0_login.html');
        die("5 saniye sonra yönlendirileceksiniz. Beklememek için
                <a href='0_login.html'>Tıklayın.</a>");
    }
    else
    {
        echo"hoşgeldiniz ".$sifre."<br>";
        #echo"Kullanıcı adınız = ".$ad ."<br>"; 
        #echo"Şifreniz = ".$sifre."<br>";
        echo("Giriş başarıyla gerçekleştirildi.<br>");

        header('Refresh: 5; Location: localhost/odev/1_girisSayfasi.html');
        die("5 saniye sonra yönlendirileceksiniz. Beklememek için
                <a href=1_girisSayfasi.html>Tıklayın.</a>");
    
        #echo"<a href='1_girisSayfasi.html'>Giriş sayfasına git</a>";
    }

?>
