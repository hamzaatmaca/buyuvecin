<?php 
include 'functions/functions.php';

function home(){
	showPage('./views/pages/home.php','./views/components/add/dil.php');
}
function giris(){
	showPage('./views/pages/giris.php','./views/components/add/dil.php');
}
function cinmusallati(){
	showPage('./views/pages/cinmusallati.php','./views/components/add/dil.php');
}
function buyumusallati(){
	showPage('./views/pages/buyumusallati.php','./views/components/add/dil.php');
}
function ruhsal(){
	showPage('./views/pages/ruhsal.php','./views/components/add/dil.php');
}
function tedavi(){
	showPage('./views/pages/tedavi.php','./views/components/add/dil.php');
}
function ayetler(){
	showPage('./views/pages/ayetler.php','./views/components/add/dil.php');
}
function dua(){
	showPage('./views/pages/dua.php','./views/components/add/dil.php');
}
function ruya(){
	showPage('./views/pages/ruya.php','./views/components/add/dil.php');
}
function ruhtani(){
	showPage('./views/pages/ruhtani.php','./views/components/add/dil.php');
}
function korunma(){
	showPage('./views/pages/korunma.php','./views/components/add/dil.php');
}
function video(){
	showPage('./views/pages/video.php','./views/components/add/dil.php');
}
function panel(){
	header('location:admin/admin.php');
}


?>