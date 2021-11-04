<?php
include './controller/controller.php';

if(!empty($_GET['url'])){
	$url = $_GET['url'];

	switch ($url) {
		case 'anasayfa':
			home();
			break;
		case 'giris':
			giris();
			break;
		case 'cinmusallati':
			cinmusallati();
			break;
		case 'buyumusallati':
			buyumusallati();
			break;
		case 'ruhsal':
			ruhsal();
			break;
		case 'tedavi':
			tedavi();
			break;
		case 'ayetler':
			ayetler();
			break;
		case 'dua':
			dua();
			break;
		case 'ruya':
			ruya();
			break;
		case 'ruhtani':
			ruhtani();
			break;
		case 'korunma':
			korunma();
			break;
		case 'video':
			video();
			break;
		case 'panel':
			panel();
			break;

		default:
			home();

	}
}
else{
	home();
}




?>