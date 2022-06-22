<html>
    <head>
</head>
<body>
<?php

include("baglanti.php");

//degiskenleri formdan aliyoruz
$isim=$_POST['isim'];
$sifre=$_POST['sifre'];

if($_POST["isim"]=='' || $_POST["sifre"]==''){
    echo "şifre veya isim girmediniz</br>";
    echo "lütfen bilgilerinizi kontrol edip tekrar deneyiniz </br>";
}



$sql = "INSERT INTO kayit ".
       "(isim,sifre) ".
       "VALUES ( '$isim','$sifre')";
	   
$cevap = mysqli_query( $baglanti,$sql);

header("location:siparisverformu.php");

if(!$cevap)
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}

mysqli_close($baglanti);






?>
</body>
</html>

