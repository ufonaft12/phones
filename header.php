<?php 
function get_header($page_type) { ?>
<!DOCTYPE html>
<html dir="rtl" lang="he-IL" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name='robots' content='noindex,follow' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<!--WP-->
	<link rel='stylesheet' id='wp-css'  href='/wp/css/wp.css?ver=4.9.4' type='text/css' media='all' />
	
	<!--STANDART-->
	<link rel='stylesheet' id='bootstrap4-css'  href='inc/css/bootstrap.min.css?ver=4.0.0' type='text/css' media='all' />
    <link rel='stylesheet'  href='inc/css/owl.carousel.min.css' type='text/css' media='all' />
    <link rel='stylesheet'  href='inc/css/owl.theme.default.min.css' type='text/css' media='all' />
	<script type='text/javascript' src='/inc/js/jquery.js?ver=1.12.4'></script>
	<script type='text/javascript' src='/inc/js/jquery-migrate.min.js?ver=1.4.1'></script>
	<script type='text/javascript' src='/inc/js/bootstrap.min.js?ver=4.0.0'></script>
    <script type='text/javascript' src='/inc/js/owl.carousel.min.js'></script>
    <script type='text/javascript' src='/inc/js/equalheights.js'></script>

	<!--FONTS-->
	<link rel='stylesheet' id='fontawesome-css'  href='inc/css/fontawesome-all.min.css?ver=5.0.7' type='text/css' media='all' />
<!--	<link rel='stylesheet' id='linearicons-css'  href='/css/linearicons-free.min.css?ver=1.0.0' type='text/css' media='all' />-->
	<link rel='stylesheet' id='almoni-dl-aaa-css'  href='/inc/css/almoni-dl-aaa.min.css?ver=1.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='montserrat-css'  href='/inc/css/montserrat.min.css?ver=1.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='opensanshebrew-css'  href='/inc/css/opensanshebrew.min.css?ver=1.0.0' type='text/css' media='all' />
	
	<!--FOR PAGES-->
	<link rel='stylesheet' id='main-style-css'  href='/css/main.css' type='text/css' media='all' />
	<?php if($page_type==="front-page") { ?>
	<link rel='stylesheet' id='front-page-style-css'  href='/css/front-page.css' type='text/css' media='all' />
	<?php } ?>
	<script type='text/javascript' src='/js/main.js'></script>
	
</head>
<body class="rtl<?php echo ' '.$page_type; ?>">
	<header>
		<div class="container-fluid top-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form-wrap">
                            <form role="search" method="get" class="search-form form" action="">
                                <label for="form-search-input" class="sr-only"></label>
                                <div class="input-group">
                                    <input type="text" id="form-search-input" class="form-control" placeholder="חיפוש מהיר" value="" name="s" title="">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="social-block">
                            <ul>
                                <li><a href="" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<div class="container bottom-line">
			<div class="row">
				<div class="col-md-12">
                    <a class="mobile-menu-btn" href="#menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <div class="col-logo col-right col-table">
                        <a class="vertical-center" href="/" alt="">
                            <img src="img/logo.png" alt="logo" title="logo">
                        </a>
                    </div>
                    <div id="menu" class="col-menu col-right">
                        <ul id="menu-header" class="menu-header">
                            <li class="menu-item">
                                <a href="#">בית</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">אודות</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">שירותי תיקונים</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">שירותי מכירה</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">צור קשר</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">קריאת שירות</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-info col-left">
                        <div class="tel-wrap left-block">
                            <span class="tel-top">הודעה לוואטסאפ</span>
                            <a href="">052-8844223</a>
                        </div>
                        <div class="tel-wrap right-block">
                            <span class="tel-top">הודעה לוואטסאפ</span>
                            <a href="">052-8844223</a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</header>
	<div class="page-content">
    <link rel='stylesheet' id='main-style-css'  href='/css/header.css' type='text/css' media='all' />
<?php } ?>