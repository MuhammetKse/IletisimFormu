<?php
if(!$_POST){
 echo("Yanlış Sayfaya Yönlendirildiniz");
}

else {
    $isim_soyisim=$_POST["isim-soyisim"];
    $e_posta=$_POST["E-Posta"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];
    $ip=$_SERVER["REMOTE_ADDR"];
    if (!$isim_soyisim)
    {
        echo("İsim Soyisim Kısmı Boş Bırakılamaz");
    }
    else {
        if (!$e_posta) {
            echo("E-posta Kısmı Boş Bırakılamaz");
        }
        else {
            if (!$konu) {
                echo("Konu Kısmı Boş Bırakılamaz");
            }
            else {
                if (!$mesaj) {
                    echo("Mesaj Kısmı Boş Bırakılamaz");
                }
                else {
                    echo ("<b>İsim Soyisim:</b>".$isim_soyisim."<br>");
                    echo ("<b>E-posta:</b>".$e_posta."<br>");
                    echo ("<b>Konu:</b>".$konu."<br>");
                    echo ("<b>Mesaj:</b>".$mesaj."<br>");
                    echo ("<b>Ip:</b>".$ip."<br>");
                }
            }
        }
    }
}


?>