<?php
$koneksi = mysqli_connect("localhost", "root", "", "e-katalog");

if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
}
