<?php
if ($_POST) {
    $id_barang=$_POST['id_barang'];
    $nama=$_POST['nama'];
    $tanggal_produksi=$_POST['tanggal_produksi'];
    $tempat_produksi=$_POST['tempat_produksi'];
    $kode_barang=$_POST['kode_barang'];
    if (empty($nama)) {
        echo"<script>alert('nama tidak boleh kosong');location.href='tambah_barang.php';<script>";

    } else {
        include "koneksi.php";
        if (empty($password)) {
            $update=mysqli_query($conn,"update barang set nama='".$nama."',tanggal_produksi='".$tanggal_produksi."',tempat_produksi='".$tempat_produksi."',kode_barang='".$kode_barang."' where id_barang ='".$id_barang."'") or die(mysqli_error($conn));
        if ($update) {
            echo"<script>alert('Sukses update data');location.href='tambah_barang.php';</script>";
        }   else {
            echo"<script>alert('Gagal update data');location.href='ubah_barang.php?id_barang=".$id_barang."';<script>";
        }
        } else {
            $update=mysqli_query($conn."update barang set nama='".$nama."',tanggal_produksi='".$tanggal_produksi."',tempat_produksi='".$tempat_produksi."',kode_barang='".$kode_barang."' where id_barang = '".$id_barang."'") or die(mysqli_error($conn));
        if ($update) {
            echo"<script>alert('Sukses update data');location.href='tambah_barang.php';<script>";
        }   else {
            echo"<script>alert('Gagal update data');location.href='ubah_barang.php?id_barang=".$id_barang."';<script>";
            }
        }
    
    }
}
?>
