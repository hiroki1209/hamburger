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
				<img class="pc-top" src="<?php echo get_template_directory_uri(); ?>/imge/menu-top.png" alt="top">
				<img class="tab-top" src="<?php echo get_template_directory_uri(); ?>/imge/tab-menu-top.png" alt="top">
				<img class="sp-top" src="<?php echo get_template_directory_uri(); ?>/imge/sp-menu-top.png" alt="top">
				<div class="top-title">
					<h1>Menu:</h1>
					<p><?php single_cat_title(); ?></p>
				</div>
			</div>
			<main class="l-archive">
				<div class="l-archive-content">
				<?php if ( '' != category_description() ) : ?>
				  <p><?php echo category_description(); ?></p>
				<?php endif; ?>
				</div>
				<?php get_template_part( 'archive-nav' ); ?>
				<div class="l-pagination l-justify-center">
				<?php wp_pagenavi(); ?>
				</div>
			</main>
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
