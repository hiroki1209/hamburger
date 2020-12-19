<div class="l-archive-nav l-direction-column">
  <?php if ( have_posts() && get_search_query() ) :
	  ; ?>
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
	<?php	endwhile; ?>
		<?php else : ?>
			<div class="col-full">
				<div class="wrap-col">
					<p>検索キーワードに該当する記事がありませんでした。</p>
				</div>
			</div>
		<?php endif; ?>
