<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;
}

.input-container {
  display: -ms-flexbox; 
  display: flex;
  width: 100%;
  margin-bottom: 20px;
}

.icon {
  padding: 10px;
  background:  rgb(30, 176, 255);
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid rgb(30, 176, 255);
}

/* Set a style for the submit button */
.btn {
  background-color: rgb(30, 176, 255);
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn a {
  background-color:  rgb(30, 176, 255);
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  text-decoration: none;
}
h2{
  text-align: center;
   font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif

}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="detailpenjualan.php" style="max-width:500px;margin:auto" method="POST">
  <h2>Form Detail Penjualan</h2>
  <div class="input-container">
  
      <i class="fa fa-bars icon"></i>
      <label class="input-field">PenjualanID</label>
      <select class="input-filed" name="penjualanID">
        <option>silahkan pilih ID Penjualan</option>
      <?php
      include "koneksi.php";
      $query = mysqli_query ($koneksi, "SELECT * FROM detailpenjualan")
      or die(mysqli_eror($koneksi));
      while ($data = mysqli_fetch_array($query)){
        echo "<option value = $data[PenjualanID]> $data[PenjualanID]</option>";
      }
    ?>
    </select>
    </div>
  </div>

  <div class="input-container">
  <i class="fa fa-bars icon"></i>
      <label class="input-field">ProdukID</label>
      <select class="input-filed" name="produkID">
        <option>silahkan pilih ID Produk</option>
      <?php
      include "koneksi.php";
      $query = mysqli_query ($koneksi, "SELECT * FROM detailpenjualan")
      or die(mysqli_eror($koneksi));
      while ($data = mysqli_fetch_array($query)){
        echo "<option value = $data[ProdukID]> $data[ProdukID]</option>";
      }
    ?>
    </select>
    </div>
  
  <div class="input-container">
    <i class="	fa fa-bar-chart-o icon"></i>
    <label class="input-field">Jumlah Produk</label>
    <input class="input-field" type="text" placeholder="Jumlah Produk" name="jumlahproduk">
  </div>

  <div class="input-container">
    <i class="	fa fa-bar-chart-o icon"></i>
    <label class="input-field">Subtotal</label>
    <input class="input-field" type="text" placeholder="Subtotal" name="Subtotal">
  </div>

  </select>
  </div>

  <button type="submit" name="submit" class="btn">Tambah</button><br><br>
  <button type="text" class="btn"><a href="tampilandetailpenjualan.php"> Batal Tambah</button>
</form>

</body>
</html>
