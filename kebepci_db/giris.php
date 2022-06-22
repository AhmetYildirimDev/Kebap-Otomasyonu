<?php
require('baglanti.php'); 
extract($_POST);

$isim=$_POST['isim'];
$sifre=$_POST['sifre'];

setcookie("isim",$isim ,time() + (86400 * 30), "/");
 

if (isset($_POST['isim']) and isset($_POST['sifre'])){ 
extract($_POST); 

 

$sql = "SELECT * FROM `kayit` WHERE isim='$isim' and sifre='$sifre'"; 
// kullanıcılar tablosunu getirdik

// tablodan kullanıcı adı ve şifresi eşleşen kullanıcıyı bulmaya calıstık
 // yukarıdaki sql degiskenine ekleme yaptık

$cevap = mysqli_query($baglanti, $sql); 
//baglanti degiskenindeki database e baglandık ve sql formunu gonderdik 
//eger cevap FALSE ise hata yazdiriyoruz.       

if(!$cevap ){ 

    echo '<br>Hata:' . mysqli_error($baglanti); 

} 

//veritabanindan dönen satır sayısını bul 

$say = mysqli_num_rows($cevap); 
// tablodan kullanıcı adı ve şifresi eşleşen kullanıcıyı bulduk
if ($say == 1){ 

    $_SESSION['isim'] = $isim; 

    header("location:siparisverformu.php");

 }else{ 

$mesaj = "<h1> Hatalı Kullanıcı adı veya Şifre!</h1>"; 

 } 

} 

 
   
   ?> 