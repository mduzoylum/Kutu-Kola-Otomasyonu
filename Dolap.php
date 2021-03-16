<?php
require_once 'Ayar.php';
require_once 'Helper.php';

class Dolap
{
    private $process_status = null;
    private $kapi_durumu = null;
    private $doluluk_orani = null;
    private $raf_sayisi = null; //3
    private $raf_kolonu = null; //20
    private $raf = array();

    public function __construct()
    {
        $this->raf_sayisi = AYAR::RAF;
        $this->raf_kolonu = AYAR::KAPASITE;
        $this->process_status = false;
        $this->initialParameters();
    }

    public function initialParameters()
    {
        for ($i = 0; $i < $this->raf_sayisi; $i++) {
            for ($j = 0; $j < $this->raf_kolonu; $j++) {
                $this->raf[$i][$j] = 0;
            }
        }
    }

    public function checkDoorStatus()
    {
        if ($this->kapi_durumu) {
            return "Kapı Açık";
        }
        return "Kapı kapalı";
    }

    public function checkSolidityRadio()
    {
        $full = 0;
        $empty = 0;

        for ($i = 0; $i < $this->raf_sayisi; $i++) {
            $full += $this->fullShelf($i);
            $empty += $this->spaceShelf($i);
        }

        if ($full == ($this->raf_sayisi * $this->raf_kolonu)) {
            echo Helper::text("RATE_OF_FULL").Helper::text("FULL");
        } elseif ($empty == ($this->raf_sayisi * $this->raf_kolonu)) {
            echo Helper::text("RATE_OF_FULL").Helper::text("EMPTY");
        } else {
            echo Helper::text("RATE_OF_FULL").Helper::text("PARTIALLY_FULL");
        }
    }

    public function processStatus()
    {
        if ($this->process_status) {
            return "İşlem Devam Ediyor";
        }
        return "İşlem Yok";
    }

    public function spaceShelf($shelf)
    {
        if (in_array(0, $this->raf[$shelf])) {
            $spaceCount = array_count_values($this->raf[$shelf]);
            return $spaceCount[0];
        }
        return 0;
    }

    public function fullShelf($shelf)
    {
        if (in_array(1, $this->raf[$shelf])) {
            $spaceCount = array_count_values($this->raf[$shelf]);
            return $spaceCount[1];
        }
        return 0;
    }

    public function displayShelf($shelf)
    {
        $result = "";
        foreach ($this->raf[$shelf] as $raf) {
            $result .= $raf ? " Dolu" : " Boş";
        }
        return ($shelf + 1) . ".Raf :" . $result;
    }

    /*
    Bu Function Dolabı Kısayoldan Doldurmak İçin Yazılmıştır(Doluluk testlerini yapabilmek için).
    Normal şartlarda tek tek doldurulabilir yada satın alınabilinir
    */
    public function fillShelf($shelf)
    {
        for ($i = 0; $i < $this->raf_kolonu; $i++) {
            $this->raf[$shelf][$i] = 1;
        }
        echo "<b>".($shelf + 1) . ". Raf Test Amaçlı Dolu Varsayıldı"."</b>". "<br>";
    }

    public function buyProduct()
    {
        for ($i = 0; $i < $this->raf_sayisi; $i++) {
            $checkCount = $this->fullShelf($i);
            if ($checkCount) {
                $findIndex = array_search(1, $this->raf[$i]);
                $this->raf[$i][$findIndex] = 0;
                return Helper::text("SUCCESS_BUY");
            }
        }
        return Helper::text("STATE_EMPTY");
    }

    public function addProduct()
    {
        for ($i = 0; $i < $this->raf_sayisi; $i++) {
            $checkCount = $this->spaceShelf($i);
            if ($checkCount) {
                $findIndex = array_search(0, $this->raf[$i]);
                $this->raf[$i][$findIndex] = 1;
                return Helper::text("SUCCESS_PUT");
            }
        }
        return Helper::text("STATE_FULL");
    }


}

