<?php 
	$host 		= "localhost";
	$username	= "root";
	$password 	= "";
	$db_name 	= "basiccrud";

	$connect = mysqli_connect($host, $username, $password);
	$select_db = mysqli_select_db($connect,$db_name);

	if (mysqli_connect_errno()) 
	{
		echo "koneksi gagal";
	}elseif (!$select_db) {
		echo "Database tidak ditemukan";
	}
?>