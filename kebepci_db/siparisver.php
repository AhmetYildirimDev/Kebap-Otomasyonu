<html>
    <head>
</head>
<body>
<?php

include("baglanti.php");

//degiskenleri formdan aliyoruz
$icecekler=$_POST["icecekler"];
$yiyecekler=$_POST['yiyecekler'];
$tatlilar=$_POST['tatlilar'];
$isim=$_COOKIE["isim"];




if($_POST["icecekler"]=='' || $_POST["yiyecekler"]=='' || $_POST["tatlilar"]==''){
    echo "şifre veya isim girmediniz</br>";
    echo "lütfen bilgilerinizi kontrol edip tekrar deneyiniz </br>";
}



$sql = "INSERT INTO kayit ".
       "(icecekler,yiyecekler,tatlilar,isim) ".
       "VALUES ( '$icecekler','$yiyecekler','$tatlilar','$isim')";
	   
       $cevap = mysqli_query( $baglanti,$sql);

       header("location:listele.php");

if(!$cevap)
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}

mysqli_close($baglanti);

?>
</body>
</html>

