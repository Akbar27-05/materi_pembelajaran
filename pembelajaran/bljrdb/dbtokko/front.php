<?php 
require_once ('db.php');

if (isset($_GET['ubah'])) {
    $id = $_GET['ubah'];
    $sql = "SELECT * FROM tblbarang WHERE idbarang = $id";
    $hasil = $connect->query($sql);
    $ro = $hasil->fetch_array();

    $barang = $ro[1];
    $stock = $ro[2];
}else {
    $barang = '';
    $stock = '';
}
?>

<form action="" method="post">
    Barang:
    <input type="text" name="barang" value="<?= $barang?>">
    Stock:
    <input type="number" name="stock" value="<?= $stock?>">
    <input type="submit" value="kirim" name="kirim">
</form>

<?php 

if (isset($_POST['kirim'])) {
    if (isset($_GET['menu'])) {
        $barang = $_POST['barang'];
        $stock = $_POST['stock'];

        $sql = "UPDATE tblbarang SET barang='$barang', stock='$stock' WHERE idbarang = $id";
        $connect->query($sql);

        header('location:front.php');
    }else {
        $barang = $_POST['barang'];
        $stock = $_POST['stock'];

        $sql = "INSERT INTO tblbarang (barang,stock) VALUES ('$barang','$stock')";
        $connect->query($sql);

        header('location:front.php');
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    $sql = "DELETE FROM tblbarang WHERE idbarang = $id";
    $connect->query($sql);

    header('location:front.php');
}

$sql = 'SELECT * FROM tblbarang';
$hasil = $connect->query($sql);

    echo '<table border="1px">';
        echo '<tr>';
            echo '<th> Barang </th>
                <th> Stock </th>
                <th>  Hapus </th>
                <th>  Ubah </th>';
        echo '</tr>';

        while ($r = $hasil->fetch_array()){
        echo '<tr>';
            echo '<td>'.$r[1].'</td>
                <td>'.$r[2].'</td>
                <td><a href="?hapus='.$r[0].'">Hapus</a></td>
                <td><a href="?ubah='.$r[0].'&menu=ubah">Ubah</a></td>';
        echo '</tr>';
        }
    echo '</table>';

?>