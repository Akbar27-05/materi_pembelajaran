<form action="" method="post">
    <input type="text" name="bulan" placeholder="Masukan Bulan">
    <input type="text" name="tanggal" placeholder="Masukan Tanggal">
    <input type="submit" value="kirim" name="kirim">
</form>
<?php 
    require_once "zodiac.php";

    // $rumus = new Rumus;
    
    // echo $rumus->luasLingkaran(3);
    // echo '<br>';

    // echo $rumus->kelilingLingkaran(2);
    // echo '<br>';

    // echo $rumus->luasPersegiPanjang(3,4);
    // echo '<br>';

    // echo $rumus->kelilingPersegiPanjang(4,3);
    // echo '<br>';

    // echo $rumus->luasSegitiga(5,6);
    // echo '<br>';

    // echo $rumus->kelilingSegitiga(4);

    // $zodiac = new Zodiac;

    // echo $zodiac->zodiak(1,2);

    if (isset($_POST['kirim'])) {
        $b = $_POST['bulan'];
        $t = $_POST['tanggal'];

        echo "Bulan :". $b ."<br>"."Tanggal :". $t ."<br><br>";

        echo Zodiac::zodiak($b,$t);
    }

?>