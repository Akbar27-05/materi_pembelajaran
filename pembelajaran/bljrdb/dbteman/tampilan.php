<?php 
    require_once ('koneksi.php');

    if (isset($_GET['ubah'])) {
        $id = $_GET['ubah'];
        $sql= "SELECT * FROM tblteman WHERE id = $id";
        $hasil = $connect->query($sql);
        $r=$hasil->fetch_array();

        $nama = $r[1];
        $alamat = $r[2];
        $sekolah = $r[3];
    }else {
        $nama = '';
        $alamat = '';
        $sekolah = '';
    }
?>
<form action="" method="post">
    Nama:
    <input type="text" name="nama" value="<?= $nama?>">
    Alamat:
    <input type="text" name="alamat" value="<?= $alamat?>">
    Asal Sekolah:
    <input type="text" name="sekolah" value="<?= $sekolah?>">
    <input type="submit" value="kirim" name="kirim">
</form>

<?php
    if (isset($_POST['kirim'])) {
        if (isset($_GET['update'])) {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $sekolah = $_POST['sekolah'];
        
            $sql = "UPDATE tblteman SET nama='$nama', alamat='$alamat',asal_skolah='$sekolah' WHERE id=$id";
            $connect->query($sql);

            header('location:tampilan.php');
        }else {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $sekolah = $_POST['sekolah'];

            $sql = "INSERT INTO tblteman (nama,alamat,asal_skolah) VALUES ('$nama','$alamat','$sekolah')";
            $connect->query($sql);
        }
    }

    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus'];

        $sql= "DELETE FROM tblteman WHERE id = $id";
        $connect->query($sql);
    }

    $sql = "SELECT * FROM tblteman";
    $hasil = $connect->query($sql);

    echo '<table border="1px">';
        echo '<tr>';
            echo '<th>Nama</th>';
            echo '<th>Alamat</th>';
            echo '<th>Asal Sekolah</th>';
            echo '<th>Hapus</th>';
            echo '<th>Ubah</th>';
        echo '</tr>';

        while ($r = $hasil->fetch_array()) {
            echo '<tr>';
                echo '<td>'.$r[1].'</td>';
                echo '<td>'.$r[2].'</td>';
                echo '<td>'.$r[3].'</td>';
                echo '<td><a href="?hapus='.$r[0].'">Hapus</a></td>';
                echo '<td><a href="?ubah='.$r[0].'&update">Ubah</a></td>';
            echo '</tr>';
        }
    echo '</table>';
?>