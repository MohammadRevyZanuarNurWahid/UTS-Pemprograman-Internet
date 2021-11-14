<?php
$conn=mysqli_connect('localhost','root','','db_barang');	
if (mysqli_connect_error()) {
	printf("Connct failed", mysql_error());
	exit();
}