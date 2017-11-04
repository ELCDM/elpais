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
<h1 class="displaynone">El País de los jóvenes Medio de comunicación Digital</h1>
		<div class="publicidad12890">
			<!-- /34984776/ep_header_728x90 -->
			<div id='div-gpt-ad-1503551101138-2' style='height:90px; width:728px;margin: 0 auto;'>
				<script>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1503551101138-2'); });
				</script>
			</div>
		</div>
		<div class="movplubi">
			<!-- /34984776/ep_header_mov_320x100 -->
			<div id='div-gpt-ad-1503551101138-3'>
				<script>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1503551101138-3'); });
				</script>
			</div>
		</div>

		<section class="notasdeldiacontent w-clearfix">
			<?php $not = 0;
			$query_not = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 20, 'orderby'=> 'date','order' => 'DESC', ) );
			while ($query_not->have_posts()):$query_not->the_post();

			$destacada_first = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'nota_interior');
			$destacada_second = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'nota_cat'); ?>

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
							<div class="imgnotcont">
								<img src="<?php echo $destacada_second[0]; ?>" alt="<?php the_title(); ?>">
							</div>
							<h3 class="tituldelanotcuad tituldenota"><?php the_title(); ?></h3><div class="fechanota fechdenotacuad"><?php echo $fech; ?></div>
						</a>
						<?php } 
						if ($not == 14) { ?>
					</div>
					<div class="publicidad12890">
						<!-- /34984776/ep_middlepage_728x90 -->
						<div id='div-gpt-ad-1503551101138-4' style='height:90px; width:728px;margin: 0 auto;'>
							<script>
								googletag.cmd.push(function() { googletag.display('div-gpt-ad-1503551101138-4'); });
							</script>
						</div>	
					</div>
					<div class="displaynone movplubi">
						<!-- /34984776/ep_middlepage_mov_320x100 -->
						<div id='div-gpt-ad-1503551101138-5' style='height:50px; width:320px;'>
							<script>
								googletag.cmd.push(function() { googletag.display('div-gpt-ad-1503551101138-5'); });
							</script>
						</div>
					</div>

					<div class="notassemana tag">Más noticias</div>
					<div class="lasnotas w-clearfix">

						<?php }  
						if($not > 14 && $not <= 20){ 
							?>
							<a class="unanotahoriz w-clearfix w-inline-block" href="<?php the_permalink(); ?>">
								<div class="imgcontenthoz">
									<img class="imgdenot" src="<?php echo $destacada_second[0]; ?>" alt="<?php the_title(); ?>">
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