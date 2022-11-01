<?php 
    class Zodiac{
        public static function zodiak($b,$t)
        {
            if ($b < 1 || $b > 12 && $t < 1 || $t > 31) {
                $hasil = "Tanggal / Bulan salah";
            }else {
                if ($b == 1) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "Aquarius";
                    }if ($t > 0 && $t < 20) {
                        $hasil = "taurus";
                    }
                }if ($b == 2) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "B2 tnggl 20 - 30";
                    }if ($t > 0 && $t < 20) {
                        $hasil = "B2 tnggl 1 - 19";
                    }
                }if ($b == 3) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "B3 tnggl 20 - 30";
                    }if ($t > 0 && $t < 20) {
                        $hasil = "B3 tnggl 1 - 19";
                    }
                }
            }
            return $hasil;
        }
    }
?>