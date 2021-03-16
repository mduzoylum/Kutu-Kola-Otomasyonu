<?php

class Helper
{

    public static function text($text)
    {
        $textToResponse =
            [
                "WELCOME" => "<b>OTOMAT BAŞLATILDI</b>"."<br>",
                "START_PROCESS" => "İşlem Başlatıldı"."<br>",
                "END_PROCESS" => "İşlem Tamamlandı"."<br>",
                "SUCCESS_BUY" => "<b>Satın Alma İşlemi Başarılı</b>"."<br>",
                "SUCCESS_PUT" => "<b>Yükleme İşlemi Başarılı</b>"."<br>",
                "STATE_EMPTY" => "<b>Dolap Boş Olduğu İçin Ürün Satılamamaktadır</b>(<u>Satın Alma Denenmiştir</u>)"."<br>",
                "STATE_FULL" => "<b>Dolap Dolu Olduğu İçin Daha Fazla Ürün Eklenemez</b>(<u>Ürün Ekleme Denenmiştir</u>)"."<br>",
                "RATE_OF_FULL" => "<b>Doluluk Oranı : </b>",
                "FULL" => " Dolu",
                "EMPTY" => " Boş",
                "PARTIALLY_FULL" => "Kısmen Dolu"
            ];
        echo $textToResponse[$text];
    }

    public static function EOF()
    {
        echo "<br>";
    }

    public function LINE()
    {
        echo "<br>----------------------------------<br>";
    }
}

