<?php
if ($_POST) {
	$jenis_barang=$_POST['jenis_barang'];
	$tahun_produksi=$_POST['tahun_produksi'];
	if (empty($jenis_barang)) {
		echo "<script>alert('nama jenis barang harus di isi');location.href='tampil_jenis_barang.php';</script>";
	} elseif(empty($tahun_produksi)) {
		echo "<scrip>alert('tahun produksi tidak boleh kosong');location.href='tampil_jenis_barang.php';</script>";
	} else {
		include"koneksi.php";
		$insert=mysqli_query($conn, "insert into jenis_barang (jenis_barang, tahun_produksi) value ('".$jenis_barang."','".$tahun_produksi."')");
		if ($insert) {
			echo "<script>alert('Sukses menambahkan data jenis_barang');location.href='tampil_jenis_barang.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan data jenis_barang');location.href='tampil_jenis_barang.php';</script>";
		}
	} 
}
?>