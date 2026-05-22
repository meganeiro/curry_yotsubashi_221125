<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
<title><?php echo wp_get_document_title(); ?></title>
<?php wp_head(); ?>
</head>

<body><!-- id付け -->

	<header>
	<!-- ロゴ -->
	<div id="logo">
		<h1>四ツ橋カレー激戦区
			<img src="<?php echo get_template_directory_uri(); ?>/assets/common/logo220921.png">
		</h1>
	</div>

	<div class="btn-trigger" id="btn17"><!-- ハンバーガー -->
		<span></span>
		<span></span>
		<span></span>
	</div>

	<nav>
		<ul class="slide_menu">
			<?php wp_nav_menu(
					array(
						'theme_location' => 'place_global',
						'container' => false,
					)
			);
			?>
			<!--
			<li><a href="<?php home_url(); ?>">トップ</a></li>
			<li><a href="#chaos">カオススパイスダイナー<span> 四ツ橋アメリカ店</span></a></li>
			<li><a href="#yellowspice">札幌スープカレー<span>イエロースパイス 北堀江店</span></a></li>
			<li><a href="#shigeru">スパイス茂</a></li>
			<li><a href="#devi">インド・ネパール料理<span> DEVI 南堀江2号店</span></a></li>
			<li><a href="#bonabona">チキンカレーの店<span> ボナボナ</span></a></li>
			<li><a href="#lakshmi">ラクシュミ</a></li>
			<li><a href="#bindu">BINDU 北堀江店</a></li>
			<li><a href="#condor">カレーコンドル</a></li>
			<li>お問い合わせはコチラ</li>-->
		</ul>
	</nav>



	<!-- ファーストビュー -->
	<article id="first">
		<section id="drop-target">
			<div class="swiper">
				<ul class="swiper-wrapper">
					<li id="item-1" class="dragged-item swiper-slide">
						<a class="swiper-no-swiping" href="#chaos"></a>
					</li>
					<li id="item-2" class="dragged-item swiper-slide">
						<a class="swiper-no-swiping" href="#yellowspice"></a>
					</li>
					<li id="item-3" class="dragged-item swiper-slide">
						<a class="swiper-no-swiping" href="#shigeru"></a>
					</li>
					<li id="item-4" class="dragged-item swiper-slide">
						<a class="swiper-no-swiping" href="#devi"></a>
					</li>
					<li id="item-5" class="dragged-item swiper-slide">
						<a class="swiper-no-swiping" href="#bonabona"></a>
					</li>
					<li id="item-6" class="dragged-item swiper-slide">
						<a class="swiper-no-swiping" href="#lakshmi"></a>
					</li>
					<li id="item-7" class="dragged-item swiper-slide">
						<a class="swiper-no-swiping" href="#bindu"></a>
					</li>
					<li id="item-8" class="dragged-item swiper-slide">
						<a class="swiper-no-swiping" href="#condor"></a>
					</li>
				</ul>
				<div class="swiper-pagination"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>

			<!-- お皿 -->
			<div class="dish_b">
				<div class="dish_s">
					<a href=""></a>
				</div>
			</div>
		</section>
	</article>
</header>
