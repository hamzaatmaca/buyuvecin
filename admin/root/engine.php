<?php
session_start();
ob_start();
if(!isset($_SESSION['admin'])){
	header("location:login.php");
}else{

	include '../database/db.php';
	/*Toplam Ziyaretçi Sayısı */

	$count = "SELECT COUNT(id) FROM users";
	$countUser = mysqli_query($db,$count);
	$yaz = mysqli_fetch_array($countUser);

	


	$tarih = "SELECT * FROM users";
	$result = mysqli_query($db, $tarih);

	/*Toplam Ziyaretçi Sayısı */

	/*Tarih Aralığını Bulma*/

	$scalee = "SELECT * FROM users ORDER BY tarih DESC LIMIT 1 ";
	$scalee2 = "SELECT * FROM users ORDER BY tarih  LIMIT 1 ";
	$scale = mysqli_query($db, $scalee);
	$scale2 = mysqli_query($db, $scalee2);
	$raw = mysqli_fetch_array($scale);
	$riw = mysqli_fetch_array($scale2);

	/*Tarih Aralığını Bulma*/

	/*Oturum bilgilerini kaydetme ve çekme*/

	$adminSession = $_SESSION['admin'];
	$adminIp = $_SERVER['REMOTE_ADDR'];
	$session = "INSERT INTO sessions(admin,ip) VALUES ('$adminSession','$adminIp') ";
	mysqli_query($db,$session);
	if(!$session){
		echo 'error_data';
	}
	$getAdmin="SELECT * FROM sessions";
	$getAdmin2=mysqli_query($db,$getAdmin);

	/*Oturum bilgilerini kaydetme*/

}




	

?>