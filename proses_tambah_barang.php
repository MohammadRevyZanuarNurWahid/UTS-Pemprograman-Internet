<?php
if ($_POST) {
	$nama = $_POST['nama'];
	$tanggal_produksi = $_POST['tanggal_produksi'];
	$tempat_produksi = $_POST['tempat_produksi'];
	$kode_barang = $_POST['kode_barang'];
	if(empty($nama)){
			echo "<script>alert('Nama Barang Tidak Boleh Kosong');
			location.href='tambah_barang.php';</script>";

	} else {
		include "koneksi.php";
		$insert = mysqli_query($conn, "insert into barang (nama, tanggal_produksi, tempat_produksi, kode_barang) value ('".$nama."','".$tanggal_produksi."',
		'".$tempat_produksi."', '".$kode_barang."')")or die(mysqli_error($conn));
	if($insert){
			echo "<script>alert('sukses menambahkan barang'); location.href='tampil_barang.php';</script>";
		} else {
			echo "<script>alert('gagal menambahkan data barang'); location.href='tambah_barang.php';</script>";
			}
		}
	}
?>