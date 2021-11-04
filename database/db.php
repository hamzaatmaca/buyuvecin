<?php 

$db = mysqli_connect("localhost","root","","bycnroot");
mysqli_set_charset($db,"utf8");
if(!$db){
	echo "Bağlantı Başarısız. Hata: " . $mysqli->connect_error;
	exit;
}

?>