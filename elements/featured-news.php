<section class="primary-area">
	<?php 
		$args = array (
			'post_type'			=> 'articles',
			'posts_per_page'	=> 1
		);

		$post = new WP_Query( $args );

		if ( $post->have_posts() ) :
			$i = 0;
			while ( $post->have_posts() ) :
			$post->the_post();
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumb_610x500' ); 
			$category = get_the_category(get_the_ID());
	?>
		<div class="featured-item">
			<a href="<?php the_permalink(); ?>">
				<article class="article-item">
					<div class="article-item__thumbnail">
						<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
					</div>				

					<div class="article-item__info">		
						<?php if ($category): ?>			
							<h2 class="article-item__category"><?php echo $category[0]->name; ?></h2>
						<?php endif; ?>	
						<h3 class="article-item__title"><?php the_title(); ?></h3>
					</div>
				</article>
			</a>
		</div>	
	<?php 
		endwhile;
	endif; 
	?>

	<div class="list-articles">
		<?php 
			$args = array (
				'post_type' 		=> 'articles',
				'posts_per_page'	=> 3,
				'offset'			=> 1
			);

			$post = new WP_Query( $args );

			if ( $post->have_posts() ) :
				$i = 0;
				while ( $post->have_posts() ) :
				$post->the_post();
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumb_355x250' ); 
				$category = get_the_category(get_the_ID());
		?>
			<a href="<?php the_permalink(); ?>">
				<article class="article-item">
					<div class="article-item__thumbnail">
						<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
					</div>				

					<div class="article-item__info">							
						<?php if ($category): ?>			
							<h2 class="article-item__category"><?php echo $category[0]->name; ?></h2>
						<?php endif; ?>	
						<h3 class="article-item__title"><?php the_title(); ?></h3>
					</div>
				</article>
			</a>

				<?php if ($i % 3 == 0) : ?>
					<article class="article-item sponsored">
						<div class="advertising">							
							<a href="">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/temp/ad-2.gif" />
							</a>
						</div>
					</article>
				<?php endif; ?>
		<?php
			$i++;
			endwhile;
		endif; 
		?>
	</div>
</section>