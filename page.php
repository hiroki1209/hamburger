<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1" />    
<?php wp_head(); ?>
</head>
<body>
<div class="l-wrapper">
   <div class="l-left-wrapper l-justify-left l-direction-column">
   <?php get_header(); ?>
	   <div class="c-top-img">
		   <img class="pc-top" src="<?php echo get_template_directory_uri(); ?>/imge/マスクグループ 2.png" alt="top">
		   <img class="tab-top" src="<?php echo get_template_directory_uri(); ?>/imge/tab-マスクグループ 2.png" alt="top">
		   <img class="sp-top" src="<?php echo get_template_directory_uri(); ?>/imge/tab-マスクグループ 2.png" alt="top">
		   <div class="top-title">
		   <?php if ( have_posts() ) : ?>
				<?php
				while ( have_posts() ) :
					the_post();
					?>
		   <h1><?php the_title(); ?></h1>
		   </div>
	   </div>
	 <main class="l-single">
					<?php the_content(); ?>
	 </main>  
				 <?php endwhile; ?>
	<?php else : ?>
  <div class="error">
	<p>お探しの記事は見つかりませんでした。</p>
  </div>
	<?php endif; ?>   
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
