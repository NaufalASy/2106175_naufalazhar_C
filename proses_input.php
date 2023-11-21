<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "2106175_naufal_c";

// Membuat koneksi ke MySQL
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = $_POST["nama_barang"];
    $jumlah_barang = $_POST["jumlah_barang"];
    $kode_barang = $_POST["kode_barang"];
    $jenis_barang = $_POST["jenis_barang"];
    $nama_supplier = $_POST["nama_supplier"];
    $kode_supplier = $_POST["kode_supplier"];
    $alamat_supplier = $_POST["alamat_supplier"];
    $tanggal_masuk_barang = $_POST["tanggal_masuk_barang"];
    $total_harga = $_POST["total_harga"];

    // Menyimpan data ke dalam database
    $sql = "INSERT INTO databaranggudang (nb, jml, kb, jb, ns, ks, als, tmb, th) VALUES ('$nama_barang', '$jumlah_barang','$kode_barang','$jenis_barang','$nama_supplier','$kode_supplier','$alamat_supplier','$tanggal_masuk_barang','$total_harga')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>