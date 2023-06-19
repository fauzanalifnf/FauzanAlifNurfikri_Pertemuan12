<?php

//load koneksi database 
include '../../koneksi.php';


//ambil data dari form
$id = $_POST['id'];
$nama_slider_post = $_POST['nama_slider'];

//
$gambar_post = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = './img/';

move_uploaded_file($source, $folder . $gambar_post);

//update data ke database
$update = mysqli_query($koneksi, "UPDATE tb_slider SET 
nama_slider = '$nama_slider_post',
gambar = '$gambar_post'
WHERE id = '$id'");

//cek apakah proses edit ke database berhasil
if ($update) {
    //jika berhasil tampilkan pesan berhasil edit data
    echo "<script>
            alert('Data Berhasil Diubah');
            window.location.href='index.php';
        </script>";
} else {
    //jika gagal tampilkan pesan gagal edit data
    echo "<script>
            alert('Data Gagal Diubah');
            window.location.href='index.php';
        </script>";
}
    //
