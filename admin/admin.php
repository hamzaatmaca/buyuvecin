<?php 
include 'root/engine.php';

if(!isset($_SESSION['admin'])){
	header("location:login.php");
}else{
    ?>
    <!DOCTYPE html>
    <html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ADMIN</title>
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
        <link href="assets/css/admin.css" rel="stylesheet">
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <script src="https://kit.fontawesome.com/5b17f452e4.js" crossorigin="anonymous"></script>
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== PAGE CONTENT ==========-->
        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v1 g-bg-color--primary-to-blueviolet-ltr g-fullheight--md">
            <div class="container g-ver-center--md g-padding-y-100--xs">
                <div class="row g-hor-centered-row--md g-margin-t-30--xs g-margin-t-20--sm">
                    <div class="col-lg-6 col-sm-6 g-hor-centered-row__col g-text-center--xs g-text-left--md g-margin-b-60--xs g-margin-b-0--md">
                        <div class="s-promo-block-v1__square-effect g-margin-b-60--xs">
                            <h1 class="g-font-size-32--xs g-font-size-45--sm g-font-size-50--lg g-color--white">Büyü Ve Cin Musallatına Şifa Yönetim Paneli</h1>
                            
                        </div>
                        <span class="g-display-block--xs g-display-inline-block--lg g-margin-b-10--xs g-margin-b-10--lg">
                            <a href="logout.php" class="s-btn s-btn--xs s-btn--white-brd g-padding-x-30--xs g-radius--50">
                                <span class="s-btn__element--left">
                                    <i class="g-font-size-20--xs fas fa-sign-out-alt"></i>
                                </span>
                                <span class="s-btn__element--right g-padding-x-10--xs">
                                    <span class="g-font-size-16--xs">ÇIKIŞ YAP</span>
                                </span>
                            </a>
                        </span>
                        <span class="g-padding-x-0--xs g-padding-x-10--lg">
                            <a href="https://www.google.com" class="s-btn s-btn--xs s-btn--white-brd g-padding-x-30--xs g-radius--50" target="_blank">
                                <span class="s-btn__element--left">
                                    <i class="g-font-size-20--xs fas fa-home"></i>
                                </span>
                                <span class="s-btn__element--right g-padding-x-10--xs">
                                    <span class="g-font-size-16--xs">WEB SİTESİNE GİT</span>
                                </span>
                            </a>
                        </span>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 col-sm-4 g-hor-centered-row__col">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                           <i class="g-font-size-150--xs fas fa-cogs g-color--white"></i>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!--========== END PROMO BLOCK ==========-->
       <!-- Mockup -->
       <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--xsm">
        <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-80--xs g-margin-b-100--md">
            <div class="col-sm-5 g-hor-centered-row__col">
                <p class=" g-font-size-24--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-35--xs">Oturum Bilgileri</p>
                <p class="g-font-size-18--sm">Yandaki Tablodan Tüm Yapılan Admin Girişlerini Kontrol Edebilirsiniz</p>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5 g-hor-centered-row__col">
                <div class="adminIpTable">
                    <?php include 'partials/_session.php'; ?>
                </div>
            </div>
        </div>
        <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-80--xs g-margin-b-100--md">
            <?php include 'partials/_dateScale.php'; ?>
            <div class="col-sm-1"></div>
            <div class="col-sm-5 g-hor-centered-row__col">
                <div class="adminIpTable">
                    <?php include 'partials/_customer.php'; ?>
                </div>
            </div>
        </div>
        <!--<div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-80--xs g-margin-b-100--md">
            <div class="col-sm-5 g-hor-centered-row__col">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Kontroller</p>
                <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">Başlık</h2>
                <p class="g-font-size-18--sm">yazı</p>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5 g-hor-centered-row__col">
                boş alan
            </div>
        </div>-->

    </div>

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
}
ob_end_flush();
$db->close();
?>