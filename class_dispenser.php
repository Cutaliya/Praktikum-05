<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    const VOLUME_GELAS = 100;
    public $namaMinuman;

    public function __construct($namaMinuman, $volume, $hargaSegelas){
        $this->nama = $namaMinuman;
        $this->volume = $volume;
        $this->harga = $hargaSegelas;

        echo $this->nama;
        echo "<br>- Volume dari galon tersebut adalah " .$this->volume ." ML";
        echo "<br>- Pergelas seharga Rp." .$this->harga;
    }
    public function volume(){
        return "<br>- Cut membeli 1 gelas air dengan volume " .self::VOLUME_GELAS ." ML";
    }
    public function hasilAkhir(){
        $hasil = $this->volume-self::VOLUME_GELAS;
        echo "<br>- Volume dari galon sekarang ialah " .$hasil ." ML";
    }
}

$Cut = new Dispenser("<br/>Nestle Pure Life : <hr/>", 1000, 6500);
echo $Cut->volume();
echo $Cut->hasilAkhir();
?>