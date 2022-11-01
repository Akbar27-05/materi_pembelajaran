<form action="" method="get">
    tanggal :
    <input type="number" name="tanggal" max="12">
    bulan : 
    <select name="bulan">
        <option value="january">January</option>
        <option value="februari">Februari</option>
        <option value="maret">Maret</option>
        <option value="april">April</option>
    </select>

    <input type="submit" value="kirim" name="kirim">
</form>

<?php 
    if (isset($_GET['kirim'])) {
        $tgl = $_GET['tanggal'];
        $bulan = $_POST['bulan'];

        switch ($bulan) {
            case 'january':
                # code...
                break;
            
            default:
                # code...
                break;
        }
    }
?>