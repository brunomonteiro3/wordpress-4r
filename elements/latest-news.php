<section class="secondary-area">
	<?php 
		$args = array (
			'post_type'			=> 'articles',
			'posts_per_page'	=> 4,
			'offset' 			=> 4
		);

		$post = new WP_Query( $args );

		if ( $post->have_posts() ) :
			$i = 0;
			while ( $post->have_posts() ) :
			$post->the_post();
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumb_355x250' ); 
			$category = get_the_category(get_the_ID());
			$resumo = get_the_excerpt();
	?>	
		<article class="article-item">
			<a href="<?php the_permalink(); ?>">
				<div class="article-item__thumbnail">
					<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
				</div>				

				<div class="article-item__info">		
					<?php if ($category): ?>			
						<h2 class="article-item__category"><?php echo $category[0]->name; ?></h2>
					<?php endif; ?>	
					<h3 class="article-item__title"><?php the_title(); ?></h3>
					<p class="article-item__description"><?php echo $resumo; ?></p>
				
					<span class="article-item__more">+ Troller T4 X Jeep Renegate</span>
				</div>
			</a>
		</article>
	<?php
			endwhile;
		endif;
		wp_reset_query();
	?>
</section>