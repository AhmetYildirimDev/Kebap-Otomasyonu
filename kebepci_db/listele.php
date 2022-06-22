<html>
<head>
    
<title>Sipariş Listesi Sayfası</title>
  <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</head>

<style>
  body {
    background-image: url('kaydethtmlback.jpg');
       
        background-size: cover;
  }
</style>

<body>
<div class="jumbotron text-center">
<div class="text-success">
<?php

//mysql baglanti kodunu ekliyoruz
include("baglanti.php");
$isim = $_COOKIE["isim"];

//sorguyu hazirliyoruz
$sql = "SELECT * FROM kayit WHERE isim = '$isim' AND isim!='' " ;

//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}



//sorgudan gelen tüm kayitlari tablo içinde yazdiriyoruz.
//önce tablo başlıkları oluşturalım
echo "<table border=2>";
echo "<tr><th>kayıt id</th><th>isim</th><th>yiyecekler</th><th>icecekler</th><th>tatlılar</th></tr>";

//veritabanından gelen cevabı satır satır alıyoruz.
while($gelen=mysqli_fetch_array($cevap))
{
    // veritabanından gelen değerlerle tablo satırları oluşturalım
    echo "<tr><td>".$gelen['kayit_id']."</td>";
    echo "<td>".$gelen['isim']."</td>";
    echo "<td>".$gelen['yiyecekler']."</td>";
    echo "<td>".$gelen['icecekler']."</td>";
    echo "<td>".$gelen['tatlilar']."</td></tr>";    
}
// tablo kodunu bitirelim.
echo "</table>";

//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);

echo "Yeni kayıt eklemek için  <a href='siparisverformu.php'> Tiklayiniz</a>\n";

?>
  </div>
</div>
</body>
</html>