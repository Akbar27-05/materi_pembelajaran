<?php 
$nav = ['Home','Kontak','Sejarah','Jurusan'];
$judul = ['Apel','Jeruk','Mangga','Pisang'];
$deskripsi = [
    'Apel adalah ...',
    'Jeruk adalah ...',
    'Mangga adalah ...',
    'Pisang adalah ...'
];

$link = [
    "home"=>"<a href='#'>home</a>",
    "kontak"=>"<a href='#'>kontak</a>",
    "sejarah"=>"<a href='#'>sejarah</a>",
    "jurusan"=>"<a href='#'>jurusan</a>"
];
    echo $link ['home'];
    foreach ($link as $key => $value) {
        echo '<li>'. $value .'</li>';
    }

    echo '<br><br>';

    $nilai = 50;
    if ($nilai > 70) {
        if ($nilai == 71) {
            echo 'KKM';
        }elseif ($nilai > 71 && $nilai <= 80){
            echo 'C';
        }elseif ($nilai >= 81 && $nilai <= 90){
            echo 'B';
        }else{
            echo 'A';
        }
    }elseif ($nilai < 69) {
        echo 'Tidak Lulus';
    }else{
        echo 'Nilai yang anda inputkan salah';
    }

    echo '<br><br>';

    

    function zodiac($t,$b){
    $tanggal = $t;
    $bulan = $b;
    if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 13) {
        if ($bulan ==1) {
            if ($tanggal >= 1 && $tanggal <= 20) {
                echo 'Zodiac andaa Caprycorn';
            }else {
                'Zodiac anda Aquarius';
            }
        }if ($bulan ==2) {
            if ($tanggal >= 1 && $tanggal <= 20) {
                echo 'Zodiac andaa Aquarius';
            }else {
                'Zodiac anda Taurus';
            }
        }
    }else{
        echo 'tanggal bulan salah';
    }
    }
    
    //zodiac(1,1);

    for ($i=1; $i < 13; $i++) { 
        zodiac(14,$i);
        echo '<br>';
    }
?>