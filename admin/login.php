<?php
session_start();
ob_start();
include 'partials/_security.php';
if(isset($_POST['gonder'])){
	$ad = security($_POST['ad']);
	$sifre = security($_POST['sifre']);
	
	if($ad == 'HAMZA' && $sifre == '12345' || $ad == 'ATMACA' && $sifre == '5678'){
		
		$_SESSION['admin'] = $ad;
		header("location:admin.php");
		
		
	}else{
		echo "<script>
		alert('hatalı şifre')

		</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Begin Head -->
<head>
	<!-- Basic -->
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>LOGIN</title>
	<meta name="keywords" content="HTML5 Theme" />
	<meta name="description" content="Megakit - HTML5 Theme">
	<meta name="author" content="keenthemes.com">

	<!-- Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

	<!-- Vendor Styles -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
	<link href="assets/vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>

	<!-- Theme Styles -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/global/global.css" rel="stylesheet" type="text/css"/>

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
</head>
<!-- End Head -->

<!-- Body -->
<body>


	<!--========== PAGE CONTENT ==========-->
	<!-- Feedback Form -->
	<div class="g-position--relative g-bg-color--primary">
		<div class="g-container--md g-padding-y-125--xs">
			<div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">
				<p id="controlText" class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">KONTROL PANELİ</p>
				<h2 class="g-font-size-32--xs g-font-size-36--sm g-color--white">GİRİŞ EKRANI</h2>
			</div>
			<form method="post" action="" class="center-block g-width-500--sm g-width-550--md">
				<div class="g-margin-b-30--xs">
					<input type="text" name="ad" class="form-control s-form-v3__input" placeholder="* Admin Adı">
				</div>
				<div class="g-margin-b-30--xs">
					<input type="text" name="sifre" class="form-control s-form-v3__input" placeholder="* ADMIN Parolası">
				</div>

				<div class="g-text-center--xs">
					<button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs" name="gonder">Giriş yap</button>
				</div>
			</form>
		</div>
	</div>
	<!-- End Feedback Form -->
	<!--========== END PAGE CONTENT ==========-->



	<!-- Back To Top -->
	<a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

	<!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
	<!-- Vendor -->
	<script type="text/javascript" src="assets/vendor/jquery.min.js"></script>
	<script type="text/javascript" src="assets/vendor/jquery.migrate.min.js"></script>
	<script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/vendor/jquery.smooth-scroll.min.js"></script>
	<script type="text/javascript" src="assets/vendor/jquery.back-to-top.min.js"></script>
	<script type="text/javascript" src="assets/vendor/scrollbar/jquery.scrollbar.min.js"></script>

	<!-- General Components and Settings -->
	<script type="text/javascript" src="assets/js/global.min.js"></script>
	<script type="text/javascript" src="assets/js/components/scrollbar.min.js"></script>
	<!--========== END JAVASCRIPTS ==========-->

</body>
<!-- End Body -->
</html>

<?php
ob_end_flush();
?>