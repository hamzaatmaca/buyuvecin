<?php 
include 'database/db.php';
$count = "SELECT COUNT(id) FROM users";
$countUser = mysqli_query($db,$count);
$yaz = mysqli_fetch_array($countUser);

?>
<footer class="g-bg-color--dark">
	<!-- Links -->
	<div class="g-hor-divider__dashed--white-opacity-lightest">
		<div class="container g-padding-y-80--xs">
			<div class="row">
				<div class="col-sm-3 g-margin-b-20--xs g-margin-b-0--md">
					<ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
						<li><a style="border: 1px solid gold;padding: 5px;" class="g-font-size-15--xs g-color--white-opacity"><i class="fas fa-users"></i>  Ziyaretçi Sayısı : <?php echo $yaz[0]; ?> </a></li>
						<li><a class="g-font-size-15--xs g-color--white-opacity" href="anasayfa"><i class="fab fa-canadian-maple-leaf"></i> Anasayfa</a></li>
						<li><a class="g-font-size-15--xs g-color--white-opacity" href="giris"><i class="fab fa-canadian-maple-leaf"></i> Giriş</a></li>
						<li><a class="g-font-size-15--xs g-color--white-opacity" href="cinmusallati"><i class="fab fa-canadian-maple-leaf"></i> Cin Musallatı Nedir?</a></li>
						<li><a class="g-font-size-15--xs g-color--white-opacity" href="buyumusallati"><i class="fab fa-canadian-maple-leaf"></i> Büyü Musallatı Nedir? </a></li>

					</ul>
				</div>
				<div class="col-sm-3 g-margin-b-20--xs g-margin-b-0--md">
					<ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
						<li><a class="g-font-size-15--xs g-color--white-opacity" href="ruhsal"><i class="fab fa-canadian-maple-leaf"></i> Büyü Ve Cin Musallatı ile İlgili Ruhsal Sıkıntılar</a></li>
						<li><a class="g-font-size-15--xs g-color--white-opacity" href="tedavi"><i class="fab fa-canadian-maple-leaf"></i> Büyü Ve Cin Musallatının Tedavisi Nasıl Yapılır?</a></li>
						<li><a class="g-font-size-15--xs g-color--white-opacity" href="ayetler"><i class="fab fa-canadian-maple-leaf"></i> Kur'an-ı Kerim'de Cinler Ve Şeytanlar İle İlgili Ayetler</a></li>
						<li><a class="g-font-size-15--xs g-color--white-opacity" href="korunma"><i class="fab fa-canadian-maple-leaf"></i> Musallattan Korunma</a></li>-->
					</ul>
				</div>
				<div class="col-sm-3 g-margin-b-40--xs g-margin-b-0--md">
					<ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
						<li><a class="g-font-size-15--xs g-color--white-opacity" href="dua"><i class="fab fa-canadian-maple-leaf"></i> Metafizik Alem İle İletişim Dua Etmek </a></li>
						<li><a class="g-font-size-15--xs g-color--white-opacity" href="ruya"><i class="fab fa-canadian-maple-leaf"></i> Metafizik Aleme Açılan Pencere; Rüyalarımız </a></li>
						<li><a class="g-font-size-15--xs g-color--white-opacity" href="ruhtani"><i class="fab fa-canadian-maple-leaf"></i> Metafizik Yönümüz Ruhumuzu Tanıyalım</a></li>
						<li><a class="g-font-size-15--xs g-color--white-opacity" href="video"><i class="fab fa-canadian-maple-leaf"></i> Videolar</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
					<h3 class="g-font-size-18--xs g-color--gold">İletişim</h3>
					<p class="g-color--white-opacity">
						Her Türlü Şikayetiniz İçin İletişime Geçiniz<br><br>
						<span><i class="fas fa-user-circle"></i>&nbsp&nbsp Muzaffer Hoca</span><br><br>
						<span><i class="fas fa-phone"></i>&nbsp&nbsp Tel:+90(551) 110 43 06</span><br><br>
						<span><i class="fab fa-whatsapp"></i>&nbsp&nbsp Whatsapp:+90(551) 194 44 32</span>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Links -->

	
</footer>
<a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

<!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
<!-- Vendor -->
<script type="text/javascript" src="assets/vendor/jquery.min.js"></script>
<script type="text/javascript" src="assets/vendor/jquery.migrate.min.js"></script>
<script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/vendor/jquery.back-to-top.min.js"></script>
<script type="text/javascript" src="assets/vendor/scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/vendor/swiper/swiper.jquery.min.js"></script>
<script type="text/javascript" src="assets/vendor/waypoint.min.js"></script>
<script type="text/javascript" src="assets/vendor/counterup.min.js"></script>
<script type="text/javascript" src="assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="assets/vendor/jquery.parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
<script type="text/javascript" src="assets/vendor/jquery.wow.min.js"></script>

<!-- General Components and Settings -->
<script type="text/javascript" src="assets/js/global.min.js"></script>
<script type="text/javascript" src="assets/js/components/header-sticky.min.js"></script>
<script type="text/javascript" src="assets/js/components/scrollbar.min.js"></script>
<script type="text/javascript" src="assets/js/components/magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/js/components/swiper.min.js"></script>
<script type="text/javascript" src="assets/js/components/counter.min.js"></script>
<script type="text/javascript" src="assets/js/components/portfolio-3-col.min.js"></script>
<script type="text/javascript" src="assets/js/components/parallax.min.js"></script>
<!--<script type="text/javascript" src="assets/js/components/google-map.min.js"></script>-->
<script type="text/javascript" src="assets/js/components/wow.min.js"></script>



<!--========== END JAVASCRIPTS ==========-->
</body>
</html>