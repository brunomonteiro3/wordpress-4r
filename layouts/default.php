<?php
/**
 * Base Wrapper
 */
the_component('components/head');
?>
<body <?php body_class() ?>>
	<main class="wrapper">
		<?php
			the_component('elements/header');
			echo $args['content']; 
	    ?>
	</main>
</body>

<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/script.js"></script>

</html><?php // closes <html> from components/head ?>
