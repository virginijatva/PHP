<?php

class Krepsys {
   
    private $kiekis = 0;

  
    public function detiGryba(Grybas $grybas, $reikia)
    {
        if($grybas->valgomas && !$grybas->sukirmijes){
            $this->kiekis += $grybas->svoris;
        }
        return $reikia > $this->kiekis;
    }
}