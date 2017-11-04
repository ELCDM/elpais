<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
the_post();
get_header();
?>
<main class="main">
	<div class="borderdiv div1080px w-clearfix">

		<div class="publicidad12890">
			<img class="imgpubli" src="<?php bloginfo('template_url'); ?>/images/publi.png">
		</div>

		<section class="notasdeldiacontent w-clearfix">
			<?php $not = 0;
			$query_not = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 20, 'orderby'=> 'date','order' => 'DESC', ) );
			while ($query_not->have_posts()):$query_not->the_post();
			if ( is_admin() ) { echo '<h1>SOY ADMIN Tax</h1>'; }
			$destacada_first = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'nota_big');
			$destacada_second = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'nota_mid');
			$destacada_third = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'nota_cuadrito');
			$destacada_four = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'nota_imagen_lateral'); ?>

			<?php		$fech = get_the_time('F j, Y');
			if($not == 0){
				?>
				<a class="bignota w-inline-block" href="<?php the_permalink(); ?>">
					<div class="sombranota"></div>
					<img class="imgbignota" src="<?php echo $destacada_first[0]; ?>" alt="<?php the_title(); ?>">
					<div class="textdenotas w-clearfix">
						<h3 class="tituldenota"><?php the_title(); ?></h3>
						<div class="fechanota"><?php echo $fech; ?></div>
					</div>
				</a>
				<?php }
				if ($not == 1) { ?>
				<div class="otrasnotaspri w-clearfix">
					<?php }  
					if($not > 0 && $not <= 4){ ?>
					<a class="unanotaprinci w-clearfix w-inline-block" href="<?php the_permalink(); ?>">
						<img class="imgdenota" src="<?php echo $destacada_second[0]; ?>" alt="<?php the_title(); ?>">
						<div class="sobmradenotita sombranota"></div>
						<div class="textdenotas w-clearfix">
							<h3 class="tituldenota tituldenotape"><?php the_title(); ?></h3>
						</div>
					</a>
					<?php } 
					if ($not == 4) { ?>
				</div>
				<div class="tag">ÚLTIMAS NOTAS</div>

				<div class="otrasnotas w-clearfix">
					<?php }  
					if($not > 4 && $not <= 8){ ?>
					<a class="notasig unanotaprinci w-clearfix w-inline-block" href="<?php the_permalink(); ?>">
						<img class="imgdenota" src="<?php echo $destacada_second[0]; ?>" alt="<?php the_title(); ?>">
						<div class="sobmradenotita sombranota"></div>
						<div class="textdenotas w-clearfix">
							<h3 class="tituldenota tituldenotape"><?php the_title(); ?></h3>
						</div>
					</a>
					<?php } 
					if ($not == 8) { ?>
				</div>
			</section>
			<section class="notasdelasemana w-clearfix">
				<div class="contentprinci w-clearfix">
					<div class="notassemana tag">Notas destacadas de la semana</div>
					<div class="lasnotas notascuadrit">
						<?php }  
						if($not > 8 && $not <= 14){ ?>

						<a class="unanotacuadrit w-clearfix w-inline-block" href="<?php the_permalink(); ?>">
							<img src="<?php echo $destacada_third[0]; ?>" alt="<?php the_title(); ?>">
							<h3 class="tituldelanotcuad tituldenota"><?php the_title(); ?></h3><div class="fechanota fechdenotacuad"><?php echo $fech; ?></div>
						</a>
						<?php } 
						if ($not == 14) { ?>
					</div>
					<div class="publicidad12890">
						<img class="imgpubli" src="<?php bloginfo('template_url'); ?>/images/publi.png" >
					</div>
					<div class="notassemana tag">Más noticias</div>
					<div class="lasnotas w-clearfix">

						<?php }  
						if($not > 14 && $not <= 20){ 
							?>
							<a class="unanotahoriz w-clearfix w-inline-block" href="<?php the_permalink(); ?>">
								<div class="imgcontenthoz">
									<img class="imgdenot" src="<?php echo $destacada_four[0]; ?>" alt="<?php the_title(); ?>">
								</div>
								<div class="textdelanothoz w-clearfix">
									<h3 class="tituldelanotahoz"><?php the_title(); ?></h3>
									<div class="fechanota fechvert"><?php echo $fech; ?></div>

									<div class="textdenotvert"><?php the_excerpt(); ?></div>
								</div>
							</a>
							<?php
						}
						$not++;
						endwhile;
						wp_reset_postdata();
						?>
					</div>
				</div>
				<aside class="sidebar w-clearfix">
					<?php get_sidebar('principal'); ?> 
				</aside>
			</section>
		</div>
	</main>
	<?php
	get_footer();
	?>