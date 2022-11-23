<?php
class Kalkulator{
    private $x;
    private $y;

    public function setSatu($x, $y){
        $this->x =$x;
        $this->y =$y;
        $satu = $this->x * $this->y / 100;
        $dua = $this->x - $satu;
        return $dua;
    }
}
?>