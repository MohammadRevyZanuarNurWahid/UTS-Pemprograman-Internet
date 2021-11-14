<?php
	if ($_GET['kode_barang']) {
		include "koneksi.php";
		$qry_hapus=mysqli_query($conn,"delete form jenis_barang where kode_barang='".$_GET['kode_barang']."'");
		if ($qry_hapus) {
			echo"<script>alert('Sukses hapus jenis barang');location.href='tampil_jenis_barang.php';</script>";
		} else {
			echo"<script>alert('Gagal hapus jenis barang');location.href='tampil_jenis_barang.php';</script>";
		}
	}
?>