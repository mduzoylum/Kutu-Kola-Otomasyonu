<?php

class Helper
{
    public static $response = null;

    public static function text($text)
    {
        $textToResponse =
            [
                "START_PROCESS" => "İşlem Başlatıldı",
                "END_PROCESS" => "İşlem Tamamlandı",
                "SUCCESS_BUY" => "Satın Alma İşlemi Başarılı",
                "SUCCESS_PUT" => "Yükleme İşlemi Başarılı",
                "STATE_EMPTY" => "Dolap Boş Olduğu İçin Ürün Satılamamaktadır(Satın Alma Denenmiştir)",
                "STATE_FULL" => "Dolap Dolu Olduğu İçin Daha Fazla Ürün Eklenemez(Ürün Ekleme Denenmiştir)"
            ];
        echo $textToResponse[$text]."<br>";
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

