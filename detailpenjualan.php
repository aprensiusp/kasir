<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $penjualanID = $_POST['penjualanID'];
    $produkID = $_POST ['produkID'];
    $jumlahproduk = $_POST ['jumlahproduk'];
    $subtotal = $_POST ['subtotal'];


    $produk = "INSERT INTO produk (PenjualanID, ProdukID, JumlahProduk, Subtotal)
VALUES ('$penjualanID', ' $produkID', '$jumlahproduk', '$subtotal')";

if ($koneksi->query($detailpenjualan) === TRUE) {
    ?>

    <script>
        alert('Data Berhasil Ditambahkan')
        window.location = "tampilandetailpenjualan.php";
        </script>
<?php
} else {
  echo "Error: " . $detailpenjualan . "<br>" .$koneksi->error;
}

$koneksi->close();
}
?>