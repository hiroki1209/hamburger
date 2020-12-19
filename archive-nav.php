<div class="l-archive-nav l-direction-column">
<?php if ( have_posts() ) : ?>
	<?php
	while ( have_posts() ) :
		the_post();
		?>
  <div class="p-archive-nav">
		<?php the_post_thumbnail(); ?>
  <div class="archive-nav-info l-direction-column">
	  <h5><?php the_title(); ?></h5>
	  <p><?php the_excerpt(); ?></p>
	  <a href="<?php the_permalink( $post ); ?>" class="c-archive-nav-btn">詳しく見る</a>
	</div>
	</div>
  <?php endwhile; ?>
	<?php else : ?>
  <div class="error">
	<p>お探しの記事は見つかりませんでした。</p>
  </div>
	<?php endif; ?>
