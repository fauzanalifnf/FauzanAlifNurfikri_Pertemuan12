<?php

//load koneksi database
include '../../koneksi.php';


//ambil data dari form
$nama_slider_post = $_POST['nama_slider_post'];

//proses upload Gambar
$gambar_post = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = './img/';

move_uploaded_file($source, $folder . $gambar_post);
//

//simpan data ke database
$insert = mysqli_query($koneksi, "INSERT INTO tb_slider VALUES (
        NULL, 
        '$nama_slider_post',
        '$gambar_post'
    )");
//

//cek apakah proses simpan ke database berhasil
if ($insert) {
  //jika berhasil tampilkan pesan berhasil simpan data
  echo "<script>
            alert('Data Berhasil Ditambahkan');
            window.location.href='index.php';
        </script>";
} else {
  //jika gagal tampilkan pesan gagal simpan data
  echo "<script>
            alert('Data Gagal Ditambahkan');
            window.location.href='index.php';
        </script>";
}
      //
