<?php 
    require_once 'db.php';
?>

<form action="" method="post">
    Nama:
    <input type="text" name="nama">
    
    alamat:
    <input type="text" name="alamat">
    
    sekolah:
    <input type="text" name="sekolah">
    <input type="submit" value="simpan" name="simpan">
</form>

<?php 
    $sql = "SELECT * FROM tblteman";
    $hasil = $koneksi->query($sql);

    if (isset($_POST['simpan'])) {
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $sekolah=$_POST['sekolah'];

        $sql="INSERT INTO tblteman (nama,alamat,asal_skolah) VALUES ( '$nama', '$alamat', '$sekolah')";

        $hasil = $koneksi->query($sql);
        header("location:http://localhost:8080/rpl/connect_mysql/tambpilan.php");
    }


    echo "<table border='1px'>";
        echo "<tr>";
            echo "<th> Nama </th>";
            echo "<th> Alamat </th>";
            echo "<th> Sekolah </th>";
            echo "<th> Hapus </th>";
            echo "<th> Ubah </th>";
        echo "</tr>";
    while ($row=$hasil->fetch_array()) {
        echo "<tr>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo '<td><a href="?hapus='.$row['id'].'">Hapus</a></td>';
            echo '<td><a href="?ubah='.$row['id'].'">Ubah</a></td>';
            echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

    if (isset($_GET['hapus'])) {
        $id=$_GET['hapus'];

        $sql="DELETE FROM tblteman WHERE id = $id";
        $hasil = $koneksi->query($sql);
        header("location:http://localhost:8080/rpl/connect_mysql/tambpilan.php");
    }


    if (isset($_GET['ubah'])) {
        $id=$_GET['ubah'];
        require_once 'ubah.php';
    }
?>

