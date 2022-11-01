<form action="" method="post">
    angka 1:
    <input type="number" name="angka-1">
    <br>
    <select name="operasi">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">:</option>
    </select>
    <br>
    angka 2:
    <input type="number" name="angka-2">
    <br>
    
    <input type="submit" value="hitung" name="hitung">
</form>

<?php 
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka-1'];
        $angka2 = $_POST['angka-2'];
        $operasi = $_POST['operasi'];

        switch ($operasi) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                echo $angka1. '+' .$angka2.' = '.$hasil;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                echo $angka1. ' - ' .$angka2.' = '.$hasil;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                echo $angka1. ' x ' .$angka2.' = '.$hasil;
                break;
            case 'bagi':
                $hasil = $angka1 / $angka2;
                echo $angka1. ' : ' .$angka2.' = '.$hasil;
                break;
            
            default:
                echo "Masukkan Angka";
                break;
        }
        
    }

?>