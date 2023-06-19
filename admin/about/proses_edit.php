<?php

//load koneksi database 
include '../../koneksi.php';


//ambil data dari form
$id = $_POST['id'];
$judul_post = $_POST['nama_About_post'];
$isi_post = $_POST['isi_About_post'];
//

//update data ke database
$update = mysqli_query($koneksi, "UPDATE tb_about SET judul = '$judul_post',
isi = '$isi_post'
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
