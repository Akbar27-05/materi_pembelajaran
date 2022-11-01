<?php 
    //require_once ('connect.php');

    if (isset($_GET['ubah'])) {
        $id = $_GET['ubah'];
        $sql = "SELECT * FROM tblbuah WHERE idbuah=$id";
        $hasil = $connect->query($sql);
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

<form action="" method="post" enctype="multipart/form-data">
    Buah:
    <input type="text" name="buah" value="<?=$buah?>">
    Deskripsi:
    <input type="text" name="deskripsi" value="<?=$deskripsi?>">
    Harga:
    <input type="number" name="harga" value="<?=$harga?>"> <br>
    Gambar
    <input type="file" name="gambar">
    <input type="submit" value="kirim" name="kirim">
</form>

<?php 
    if (isset($_POST['kirim'])) {
        if (isset($_GET['menu'])) {
            $buah = $_POST['buah'];
            $deskripsi = $_POST['deskripsi'];
            $harga = $_POST['harga'];
            $gambar = $ro[4];
            $temp = $_FILES['gambar']['tmp_name'];

            if (!empty($temp)) {
                $gambar = $_FILES['gambar']['name'];
                move_uploaded_file($temp,'upload/'.$gambar);
            }

            $sql = "UPDATE tblbuah SET buah='$buah', deskripsi='$deskripsi', harga='$harga', gambar='$gambar' WHERE idbuah=$id";
            $connect->query($sql);

            header('location:tampilan.php');
        }else {
            $buah = $_POST['buah'];
            $deskripsi = $_POST['deskripsi'];
            $harga = $_POST['harga'];
            $gambar = $_FILES['gambar']['name'];
            $temp = $_FILES['gambar']['tmp_name'];

            if (empty($gambar)) {
                echo 'Gambar Kosong';
            }else {
                $sql = "INSERT INTO tblbuah (buah,deskripsi,harga,gambar) VALUES ('$buah','$deskripsi','$harga','$gambar')";

                move_uploaded_file($temp,'upload/'.$gambar);
                $connect->query($sql);
                header('location:tampilan.php');
            }
        }
    }

    $sql = "SELECT * FROM tblbuah";
    $hasil = $connect->query($sql);

    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus'];

        $sql = "DELETE FROM tblbuah WHERE idbuah=$id";
        $connect->query($sql);
        header('location:tampilan.php');
    }
    
    echo '<table border="1px">';
        echo '<tr>';
            echo '<th>Buah</th>';
            echo '<th>Desripsi</th>';
            echo '<th>Harga</th>';
            echo '<th>Gambar</th>';
            echo '<th>Hapus</th>';
            echo '<th>Ubah</th>';
        echo '</tr>';

        while ($r = $hasil->fetch_array()) {
            echo '<tr>';
                echo '<td>'.$r[1].'</td>';
                echo '<td>'.$r[2].'</td>';
                echo '<td>'.$r[3].'</td>';
                echo '<td><img src="upload/'.$r[4].'" alt="" width="100px" height="100px"></td>';
                echo '<td><a href="?hapus='.$r[0].'">Hapus</a></td>';
                echo '<td><a href="?ubah='.$r[0].'&menu">Ubah</a></td>';
            echo '</tr>';
        } 
    echo '</table>';
?>

