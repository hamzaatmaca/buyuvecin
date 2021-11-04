<?php 
function showPage($src,$lang){
	include './views/components/header.php';
	include './views/components/nav.php';
	include $src;
	include $lang;
	include './views/components/footer.php';
}

?>