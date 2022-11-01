<?php 
    require_once("db.php");

    if (isset($_GET['id'])& isset($_GET['menu'])) {
        $id = $_GET['id'];
        $menu = $_GET['menu'];

        if ($menu == 'hapus') {
            $nama = '';
            $alamat = '';
            $skolah = '';
            
            $sql = "DELETE FROM tblteman WHERE id = $id";
            $koneksi->query($sql);
        }else {
            $sql = "SELECT * FROM tblteman WHERE id = $id";
            $hasil = $koneksi->query($sql);
            $row = $hasil->fetch_array();
            
            $nama = $row[1];
            $alamat = $row[2];
            $skolah = $row[3];
        }
    }else {
        $nama = '';
        $alamat = '';
        $skolah = '';
    }
?>

<form action="" method="post">
    Nama Teman:
    <input type="text" name="nama" value="<?= $nama?>"><br>
    Alamat:
    <input type="text" name="alamat" value="<?= $alamat?>"><br>
    Asal Skolah
    <input type="text" name="skolah" value="<?= $skolah?>"><br>
    <input type="submit" value="kirim" name="kirim">
</form>

<?php 

    if (isset($_POST['kirim'])) {
        if (isset($_GET['menu'])) {
            $id = $_GET['id'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $skolah = $_POST['skolah'];

            $sql = "UPDATE tblteman SET nama='$nama',alamat='$alamat',asal_skolah='$skolah' WHERE id=$id";
            $koneksi->query($sql);
            header("location:http://localhost:8080/rpl/project-tentangbuah.com/");

        }else {
            $teman = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $skolah = $_POST['skolah'];
            $sql = "INSERT INTO tblteman (id,nama,alamat,asal_skolah) VALUES (NULL,'$teman','$alamat','$skolah')";
            $koneksi->query($sql);
        }
    }

    $sql = "SELECT * FROM tblteman";
    // echo $sql;

    $hasil = $koneksi->query($sql);

    // print_r($hasil);

    // echo $hasil->num_rows;
    echo '<table border="1px">';
    echo '<tr>
        <th>id</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Asal Skolah</th>
        <th>Hapus</th>
        <th>Ubah</th>
    </tr>';
    if ($hasil->num_rows > 0) {
        while ($row=$hasil->fetch_array()) {
            echo '<tr>';
            echo '<td>'.$row['0'].'</td>';
            echo '<td>'.$row['nama'].'</td>';
            echo '<td>'.$row[2].'</td>';
            echo '<td>'.$row[3].'</td>';
            echo '<td><a href="?id='.$row[0].'&menu=hapus">Hapus</a></td>';
            echo '<td><a href="?id='.$row[0].'&menu=edit">Ubah</a></td>';
            echo '</tr>';
        }
    }else{
        echo 'kosong';
    }
    echo '</table>';
?>



