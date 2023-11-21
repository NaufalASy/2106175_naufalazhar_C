<!DOCTYPE html>
<html>
<head>
	<title>DATA BARANG GUDANG</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>

<form  method="post" action="./proses_input.php">
  <div class="wrapper">
    <div class="header">
      <ul>
        <li class="active form_1_progessbar">
          <div>
            <p>1</p>
          </div>
        </li>
        <li class="form_2_progessbar">
          <div>
            <p>2</p>
          </div> 
        </li>
        <li class="form_3_progessbar">
          <div>
            <p>3</p>
          </div>
        </li>
      </ul>
    </div>
    <div class="form_wrap">
      <div class="form_1 data_info">
        <h2>FORM PENDATAAN BARANG GUDANG</h2>
        
          <div class="form_container">
            <div class="input_wrap">
              <label for="Namabarang" >Nama Barang</label>
              <input type="text" name="nama_barang" class="input" id="Namabarang">
            </div> 
            <div class="input_wrap">
              <label for="jumlah">Jumlah Barang ( Box )</label>
              <input type="number" name="jumlah_barang" class="input" id="jumlah">
            </div> 
            <div class="input_wrap">
              <label for="kodebarang">Kode Barang</label>
              <input type="text" name="kode_barang" class="input" id="kodebarang">
            </div>
          </div>
      
      </div>
      <div class="form_2 data_info" style="display: none;">
        <h2>FORM PENDATAAN BARANG GUDANG</h2>
     
          <div class="form_container">
            <div class="input_wrap">
              <label for="namasupplier">Nama Supplier</label>
              <input type="text" name="nama_supplier" class="input" id="namasupplier">
            </div>
            <div class="input_wrap">
              <label for="Kodesupplier">Kode Supplier</label>
              <input type="text" name="kode_supplier" class="input" id="Kodesupplier">
            </div>
            <div class="input_wrap">
              <label for="alamat">Alamat Supplier</label>
              <input type="text" name="alamat_supplier" class="input" id="alamat">
            </div>
          </div>
    
      </div>
      <div class="form_3 data_info" style="display: none;">
        <h2>FORM PENDATAAN BARANG GUDANG</h2>
      
          <div class="form_container">
            <div class="input_wrap">
              <label for="jenisbarang">Jenis Barang</label>
          <select name="jenis_barang" class="input" id="jenis_barang">
              <option value="Berat">Berat</option>
              <option value="Ringan">Ringan</option>
          </select>
            </div>
            <div class="input_wrap">
              <label for="tglmasukbarang">Tanggal Masuk Barang</label>
              <input type="date" name="tanggal_masuk_barang" class="input" id="tglmasukbarang">
            </div>
            <div class="input_wrap">
              <label for="totalharga">Total Harga</label>
              <input type="number" name="total_harga" class="input" id="totalharga">
            </div>
          </div>
      
      </div>
    </div>
    <div class="btns_wrap">
      <div class="common_btns form_1_btns">
        <button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
      </div>
      <div class="common_btns form_2_btns" style="display: none;">
        <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
        <button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
      </div>
      <div class="common_btns form_3_btns" style="display: none;">
        <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
        <button type="submit" class="btn_done">Done</button>
      </div>
    </div>
  </div>
</form>

<div class="modal_wrapper">
	<div class="shadow"></div>
	<div class="success_wrap">
		<span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
		<p>Selamat Kamu Berhasil Memasukkan Barang.</p>
	</div>
</div>

<script type="text/javascript" src="scripts.js"></script>

</body>
</html>