<?php

class Pinigine {
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti($kiekis){
        if($kiekis <= 2 && $kiekis > 0){
            $this->metaliniaiPinigai += $kiekis;
            echo 'Pinigineje dabar yra: '.$this->popieriniaiPinigai.' popieriniu pinigu ir '.$this->metaliniaiPinigai.' metaliniu<br>';
        } else {
            $this->popieriniaiPinigai += $kiekis;
            echo 'Pinigineje dabar yra: '.$this->popieriniaiPinigai.' popieriniu pinigu ir '.$this->metaliniaiPinigai.' metaliniu<br>';
        }
    }

    public function skaiciuoti(){
        $suma = $this->metaliniaiPinigai + $this->popieriniaiPinigai;
        echo 'Pinigineje is viso yra: '.$suma.' pinigu<br>';
    }

}