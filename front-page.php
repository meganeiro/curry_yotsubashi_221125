<?php get_header(); ?>

<!-- about -->
<article>
		<section id="about">
			<div>
				<span>
					<h2>四ツ橋カレー激戦区って？</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/common/logo220921.png">
				</span>
			</div>
			<ul>
				<li>四ツ橋駅から徒歩10分以内に、カレー屋さんって何軒あるんだろう…という疑問を持ったことから、じゃあ実際に行ってみて調べてサイトに載せてみたい！！ということから、このページを作ることになりました。
					当方は2021年2月から四ツ橋へ通い始め、このサイトは2022年9月から制作が始まりました。それまでに自身で撮影し、Instagramへ投稿した写真やこのサイトをきっかけに行くことになったお店もあり、非常に贅沢な体験をさせていただいております。
					1軒1軒を自分の足で伺っているので進捗は牛歩に近いかもしれませんが、宜しくお願い致します。</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/image/lakshmi_coffee.jpg">
				</li>
				<li>
					<p>編集者 : meganeiro</p>
				</li>
			</ul>
		</section>
	</article>


<!-- お店の記事 -->
	<article>

		<?php
			if( have_posts() ):
				while ( have_posts() ) : the_post();
					get_template_part( 'single' );
				endwhile;
				endif;
			?>
		?>

	</article>

<?php get_footer(); ?>