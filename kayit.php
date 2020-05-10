<?php

$kadi=$_POST["kadi"];
$ksifre=$_POST["ksifre"];
$kayitlikadi="g191210051@sakarya.edu.tr";
$kayitliksifre="123456";

function Yonlendir($url,$zaman = 0){
    if($zaman != 0){
        header("Refresh: $zaman; url=$url");
    }
        else header("Location: $url");
    }
if($kadi==""||$ksifre=="")
{
    echo " 
    <script type='text/javascript'>  
    alert('KULLANICI ADI, ŞİFRE BOŞ BIRAKILAMAZ TEKRAR DENEYİNİZ'); 
    </script> 
    ";
    Yonlendir("http://localhost/Web-Teknolojileri-Projesi/login.html",0.1);
}
else 
{
    if(filter_var($kadi,FILTER_VALIDATE_EMAIL)){ 
        if($kadi==$kayitlikadi&$ksifre==$kayitliksifre)
        {
            echo"Hoşgeldiniz *****G191210051*****";
        }
        else
        {
            echo " 
        <script type='text/javascript'>  
        alert('KULLANICI ADI VEYA ŞİFRE HATALI TEKRAR DENEYİNİZ'); 
        </script> 
        ";
        Yonlendir("http://localhost/Web-Teknolojileri-Projesi/login.html",0.1);
        };
    }
    else 
    
    {
        echo " 
        <script type='text/javascript'>  
        alert('E-POSTA ADRESİ GEÇERSİZ      KULLANICI ADI E-POSTA OLMALIDIR TEKRAR DENEYİNİZ'); 
        </script> 
        ";
        Yonlendir("http://localhost/Web-Teknolojileri-Projesi/login.html",0.1);
    }
    
}

    



 





?>