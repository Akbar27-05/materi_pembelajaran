<?php 
class Rumus{
    public $x=0;
    public $y=0;

    public function luasLingkaran($r)
    {
        return 3.14 * $r * $r;
    }

    public function kelilingLingkaran($r)
    {
        return 2 * (3.14 * $r);
    }

    public function luasPersegiPanjang($p,$l)
    {
        return $p * $l;
    }

    public function kelilingPersegiPanjang($p,$l)
    {
        return 2 * ($p + $l);
    }

    public function luasSegitiga($a,$t)
    {
        return 0.5 * $a * $t;
    }

    public function kelilingSegitiga($a)
    {
        return 3 * $a;
    }
}
