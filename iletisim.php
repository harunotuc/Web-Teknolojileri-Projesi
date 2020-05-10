<?php

$isim=$_POST["isim"];
$telefon=$_POST["telefon"];
$email=$_POST["E-Mail"];
$mesaj=$_POST["mesaj"];
$takim=$_POST["takim"];
$cinsiyet='Erkek';
if($_POST["checkbox"]=="on")
{
    $checkbox="Onaylandı";
}
else {
    $checkbox="Onaylanmadı";
}


print "Ad Soyad: $isim<br>";
print "Telefonunuz: $telefon<br>";
print "E-Mail: $email<br>";
print "Mesajınız: $mesaj<br>";
print "Takımınız: $takim<br>";
print "Cinsiyet: $cinsiyet";
print "Sözleşme onayı: $checkbox<br>";


?>