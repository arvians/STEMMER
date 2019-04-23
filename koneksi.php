<?php

$koneksi = new mysqli("localhost", "root", "", "kata");
if($koneksi->connect_error){
	echo "Gagal melakukan koneksi ke database: ".$koneksi->connect_error;
}
?>