
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles/iletisimphp.css">
</head>
<body>
  
<div class="box">
<?php
$ad=$_POST["isim-soyisim"];
$email=$_POST["e-posta"];
$mesaj=$_POST["mesaj"];
$alan=$_POST["alan"];
$secimler = $_POST['secimler'];

echo "<b>Adınız ve soyadınız : </b>".$ad."<br> <br>";
echo "<b>E-posta adresiniz : </b> ".$email."<br> <br>";
echo "<b>Öğrenmek istediğiniz alan :  </b>".$alan."<br> <br>";
echo "<b>Mesajınız : </b> ".$mesaj."<br> <br>";
echo "<b>Beğendiğiniz sayfalar : </b> <br> <br>";
foreach($secimler as $secim) {
    echo $secim . "<br>";
   
  }

?>
<div class="donus"><a href="2_hakkimda.html">Hakkımda sayfasına dön</a></div>

</div>
</body>
</html>