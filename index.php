<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1" />    
<meta name="description" content="ハンバーガーサイト" />
<?php wp_head(); ?>
</head>
<body>
<div class="l-wrapper">
   <div class="l-left-wrapper l-justify-left l-direction-column">
	<?php get_header(); ?>
	   <div class="c-top-img">
		   <img class="pc-top" src="<?php echo get_template_directory_uri(); ?>/imge/top.png" alt="top">
		   <img class="tab-top" src="<?php echo get_template_directory_uri(); ?>/imge/top.png" alt="top">
		   <img class="sp-top" src="<?php echo get_template_directory_uri(); ?>/imge/sp-top.png" alt="top">
	   </div>
	 <main class="l-page-nav">
	   <div class="l-page-nav-left">
	   <?php
			   $cat_takeout = get_category_by_slug( 'takeout' );
		?>
			<a href="<?php echo esc_url( get_category_link( $cat_takeout->cat_ID ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/imge/three-burgers-on-brown.png" alt="Take_Out"></a>
			<h3>Take Out</h3>
			<div class="l-page-nav-taxt l-direction-column">
			  <div class="c-page-nav-taxt">
				<h4>小見出し</h4>
				<p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
			  </div>
			  <div class="c-page-nav-taxt">
				<h4>小見出し</h4>
				<p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
			  </div>
			</div>
	   </div>
	   <div class="l-page-nav-right">
	   <?php
			   $cat_eatin = get_category_by_slug( 'eatin' );
		?>
		   <a href="<?php echo esc_url( get_category_link( $cat_eatin->cat_ID ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/imge/473d814b175bd517b56eb309f2958725.png" alt="Eat_In"></a>
		   <h3>Eat In</h3>
		   <div class="l-page-nav-taxt l-direction-column">
			<div class="c-page-nav-taxt">
			  <h4>小見出し</h4>
			  <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
			</div>
			<div class="c-page-nav-taxt">
			  <h4>小見出し</h4>
			  <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
			</div>
		  </div>
	   </div>
	 </main>
	 <a href="#"><div class="l-map">
		 <img  src="<?php echo get_template_directory_uri(); ?>/imge/スクリーンショット 2020-02-10 11.47.42.png" alt="map">
		 <div class="map-text l-direction-column">
		 <?php
			$args = array(
				'post_type'     => 'post',
				'category_name' => 'access',
			);
			?>
			<?php
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
					?>
					<h5><?php the_title(); ?></h5>
					<p><?php the_content(); ?></p>
					<?php endwhile; ?>
	<?php else : ?>
			  <div class="error">
	<p>お探しの記事は見つかりませんでした。</p>
  </div>
			<?php endif; ?>
	<?php wp_reset_postdata(); ?>

		 </div>
	 </div></a>
   </div>
   <?php get_sidebar(); ?>
</div>
<button class="c-nav-toggle">
	<h2 class="nsv-btn">Menu</h2>
	<span></span>
</button>
<?php get_footer(); ?>
<div class="l-mask"></div>
<?php wp_footer(); ?>
</body>
