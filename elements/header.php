<section class="super-banner wrapper centered advertising">
	<img src="<?php bloginfo('template_url'); ?>/assets/images/temp/ad.png" />
</section>

<header class="main-header">

	<!-- Mobile only -->
		<span class="btn-search mobile-only"></span>
		<span class="btn-menu-mobile mobile-only"></span>
	<!-- End mobile only -->

	<a href="<?php bloginfo('url'); ?>" class="main-header__logo">
		<h1>Quatro Rodas</h1>
	</a>

	<nav class="main-nav">
		<ul>
			<li class="main-nav__item">
				<a href="" class="main-nav__item-parent has-child">Carros</a>

				<div class="dropdown dropdown--carros">
					<div class="dropdown__sub-menu">
						<a href="" class="btn-more">Ver todos os carros</a>
					</div>

					<div class="dropdown__sub-options">
						<ul class="dropdown__column">
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Audi</a></li>
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Bentley</a></li>
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">BMW</a></li>
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Chevrolet</a></li>
						</ul>

						<ul class="dropdown__column">
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Chrysler</a></li>
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Chevrolet</a></li>
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Dodge</a></li>
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Ferrari</a></li>
						</ul>

						<ul class="dropdown__column">
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Fiat</a></li>
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Ford</a></li>
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Honda</a></li>
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Hyundai</a></li>
						</ul>

						<ul class="dropdown__column">
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">JAC Motos</a></li>
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Jaguar</a></li>
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Jeep</a></li>
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Kia</a></li>
						</ul>

						<ul class="dropdown__column">
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Lamborghini</a></li>
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Mercedes-Benz</a></li>
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Mitsubishi</a></li>
							<li class="dropdown__item"><a href="#" class="dropdown__item--parent">Volkswagen</a></li>
						</ul>
					</div>
				</div>
			</li>
			<li class="main-nav__item">
				<a href="" class="main-nav__item-parent has-child has-dropdown">Testes</a>

				<div class="dropdown dropdown--testes">
					<div class="dropdown__sub-menu">
						<ul>
							<li><a href="" class="dropdown__item-parent has-child is-selected">Ver tudo de testes</a></li>
							<li><a href="" class="dropdown__item-parent">Comparativos</a></li>
							<li><a href="" class="dropdown__item-parent">Impressões</a></li>
							<li><a href="" class="dropdown__item-parent">Longa duração</a></li>
							<li><a href="" class="dropdown__item-parent">Teste de pista</a></li>
						</ul>
					</div>

					<div class="dropdown__sub-options">
						<?php 
							$args = array (
								'post_type'			=> 'articles',
								'posts_per_page'	=> 5
							);

							$post = new WP_Query( $args );

							if ( $post->have_posts() ) :
								$i = 0;
								while ( $post->have_posts() ) :
								$post->the_post();
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumb_355x250' ); 
						?>	
							<article class="article-item">
								<a href="<?php the_permalink(); ?>">
									<div class="article-item__thumbnail">
										<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
									</div>				

									<div class="article-item__info">
										<h3 class="article-item__title"><?php the_title(); ?></h3>
									</div>
								</a>
							</article>
						<?php
								endwhile;
							endif;
							wp_reset_query();
						?>
					</div>
				</div>
			</li>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent has-child">Notícias</a></li>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent has-child">Auto-serviço</a></li>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent has-child">Guia de compras</a></li>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent has-child">Tabela FIPE</a></li>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent">Assine</a></li>
		</ul>
	</nav>

	<section class="search-field">
		<input type="text" class="search-field__input" placeholder="Pesquisar">
		<input type="submit" class="search-field__submit" value="Buscar" title="Buscar">
	</section>
</header>

<header class="secondary-header">
	<h2 class="secondary-header__title">+ Acessados</h2>		

	<nav class="main-nav">
		<ul>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent">Salão do Automóvel</a></li>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent">Renegade</a></li>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent">Novo sandero</a></li>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent">Novo fox</a></li>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent">Novo KA</a></li>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent">HB 20</a></li>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent">Duster</a></li>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent">Golf</a></li>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent">Corolla</a></li>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent">Civic</a></li>
			<li class="main-nav__item"><a href="" class="main-nav__item-parent">IA-ZI</a></li>
		</ul>
	</nav>
</header>