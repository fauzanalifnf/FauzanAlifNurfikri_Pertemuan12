<?php

//load koneksi database
include '../../koneksi.php';


//ambil data dari form
$nama_sosmed_post = $_POST['nama_Social_post'];
$link_post = $_POST['nama_Link_post'];

//proses upload Gambar
$icon_post = $_FILES['icon_post']['name'];
$source = $_FILES['icon_post']['tmp_name'];
$folder = './img/';

move_uploaded_file($source, $folder . $icon_post);
//

//simpan data ke database
$insert = mysqli_query($koneksi, "INSERT INTO tb_social VALUES (
        NULL, 
        '$nama_sosmed_post',
        '$link_post',
        '$icon_post'
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
