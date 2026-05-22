<?php
	$count_posts = wp_count_posts();
	$post_number = $count_posts->publish;
	//echo $post_number; //投稿(post)の公開記事数を表示

	$prevpost = get_adjacent_post(true, 'left', true);//検索にかけた時にidがleftの時は真


	if( $post_number == 0 ){//記事投稿数が0だった場合
?>

			<section id="">
				<div id="left">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/image/">
					<ul>
						<li><h3></span></h3></li>
						<li></li>
						<li>
							<a href="">
								<i class="fa-brands fa-square-twitter"></i>
							</a>
							<a href="">
								<i class="fa-brands fa-square-instagram"></i>
							</a>
							<a href="">
								<i class="fa-solid fa-location-dot"></i>
							</a>
							<a href="">
								<i class="fa-solid fa-shop"></i>
							</a>
						</li>
					</ul>
				</div>
			</section>

<?php
	} else {

	if ( $prevpost == false ) {
?>
			<section id="">
				<div id="left">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/image/">
					<ul>
						<li><h3></span></h3></li>
						<li></li>
						<li>
							<a href="">
								<i class="fa-brands fa-square-twitter"></i>
							</a>
							<a href="">
								<i class="fa-brands fa-square-instagram"></i>
							</a>
							<a href="">
								<i class="fa-solid fa-location-dot"></i>
							</a>
							<a href="">
								<i class="fa-solid fa-shop"></i>
							</a>
						</li>
					</ul>
				</div>
			</section>

		<?php } elseif ( $prevpost == true ) { ?>

			<section id="">
				<div id="right">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/image/">
				<ul>
					<li><h3></span></h3></li>
					<li></li>
					<li>
						<a href="">
							<i class="fa-brands fa-square-twitter"></i>
						</a>
						<a href="">
							<i class="fa-brands fa-square-instagram"></i>
						</a>
						<a href="">
							<i class="fa-solid fa-location-dot"></i>
						</a>
						<a href="">
							<i class="fa-solid fa-shop"></i>
						</a>
					</li>
				</ul>
			</div>
		</section>
<?php }
	}
?>