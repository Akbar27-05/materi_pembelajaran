<?php 
    require_once ('connect.php');

    if (isset($_GET['ubah'])) {
        $id = $_GET['ubah'];
        $sql = "SELECT * FROM tblbuah WHERE idbuah=$id";
        $hasil = $conn->query($sql);
        $ro = $hasil->fetch_array();

        $buah = $ro[1];
        $deskripsi = $ro[2];
        $harga = $ro[3];
    }else {
        $buah = '';
        $deskripsi = '';
        $harga = '';
    }
?>

<form action="" method="post">
    Buah:
    <input type="text" name="buah" value="<?=$buah?>">
    Deskripsi:
    <input type="text" name="deskripsi" value="<?=$deskripsi?>">
    harga:
    <input type="text" name="harga" value="<?=$harga?>">
    <input type="submit" value="kirim" name="kirim">
</form>

<?php 
    if (isset($_POST['kirim'])) {
        if (isset($_GET['menu'])) {
            $buah = $_POST['buah'];
            $deskripsi = $_POST['deskripsi'];
            $harga = $_POST['harga'];

            $sql ="UPDATE tblbuah SET buah='$buah', deskripsi='$deskripsi', harga='$harga' WHERE idbuah=$id";
            $conn->query($sql);

            header('location:front.php');
        }else {
            $buah = $_POST['buah'];
            $deskripsi = $_POST['deskripsi'];
            $harga = $_POST['harga'];

            $sql ="INSERT INTO tblbuah (buah,deskripsi,harga) VALUES ('$buah','$deskripsi','$harga')";
            $conn->query($sql);

            header('location:front.php');
        }
    }

    $sql = "SELECT * FROM tblbuah";
    $hasil = $conn->query($sql);

        echo '<table border="1px">';
            echo '<tr>';
                echo '<th>Buah</th>';
                echo '<th>Deskripsi</th>';
                echo '<th>Harga</th>';
                echo '<th>Ubah</th>';

            echo '</tr>';
        while ($r = $hasil->fetch_array()){
            echo '<tr>';
                echo '<td>'.$r[1].'</td>';
                echo '<td>'.$r[2].'</td>';
                echo '<td>'.$r[3].'</td>';
                echo '<td><a href="?ubah='.$r[0].'&menu">Ubah</a></td>';
            echo '</tr>';
        }
        echo '</table>';
?>

