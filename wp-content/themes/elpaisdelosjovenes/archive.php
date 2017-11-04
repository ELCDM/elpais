<?php
get_header(); ?>
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
		<div class="displaynone movplubi">
			<!-- /34984776/ep_header_mov_320x100 -->
			<div id='div-gpt-ad-1503547859844-3'>
				<script>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1503547859844-3'); });
				</script>
			</div>
		</div>
		<section class="notasdeldiacontent w-clearfix">
			<?php
			$not = 0;

			$category = single_term_title("", false);
			$catid = get_cat_ID( $category );

			//$current_user = wp_get_current_user();
			//if (user_can( $current_user, 'administrator' )) { var_dump($catid); echo "********";   }


			$query_not = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 14, 'orderby'=> 'date','order' => 'DESC', 'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field'    => 'id',
					'terms'    => $catid,
					),
				),
			) );
			while ($query_not->have_posts()):$query_not->the_post();
			$fech = get_the_time('F j, Y');	
			$destacada_first = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'nota_interior');
			$destacada_cat = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'nota_cat');
			$destacada_mini = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'menu');
			$imgcatdes = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'nota_cat');
			if($not == 0){
				?>
				<a class="bignota bigarchive w-inline-block" href="<?php the_permalink(); ?>">
					<div class="sombranota"></div>
					<img class="imgbignota" src="<?php echo $destacada_first[0]; ?>" alt="<?php the_title();?>">
					<div class="textdenotas w-clearfix">
						<h3 class="tituldenota"><?php the_title(); ?></h3>
						<div class="fechanota"><?php echo $fech; ?></div>
					</div>
				</a>
				<?php
			} 
			if ($not == 0) { ?>
			<div class="otrasnotaspri w-clearfix">
				<?php }  if($not > 0 && $not <= 4){ ?>
				<a class="unanotaprinci w-clearfix w-inline-block" href="<?php the_permalink(); ?>">
					<img class="imgdenota" src="<?php echo $imgcatdes[0]; ?>">
					<div class="sobmradenotita sombranota"></div>
					<div class="textdenotas w-clearfix">
						<h3 class="tituldenota tituldenotape"><?php the_title(); ?></h3>
					</div>
				</a>
				<?php } if ($not == 4) { ?>
			</div>
			<div class="tag">ÚLTIMAS NOTAS</div>
		</section>
		<section class="notasdelasemana w-clearfix">
			<div class="contentprinci w-clearfix">
				<div class="notassemana tag">Más de Entretenimiento</div>
				<div class="lasnotas lasnotasconpubli w-clearfix">
					<div class="notaypubli w-clearfix">
						<?php } if($not > 4 && $not <= 6){  ?>
						<a class="lanotagrande w-clearfix w-inline-block" href="<?php the_permalink(); ?>">
							<img src="<?php echo $destacada_cat[0]; ?>">
							<h3 class="tituldelanotcuad tituldenota"><?php the_title(); ?></h3>
							<div class="fechadenotapu fechanota fechdenotacuad"><?php echo $fech; ?></div>
							<div class="textdenotvert textnotapubli"><?php the_excerpt(); ?></div>
						</a>
						<?php } if ($not == 6) { ?>
					</div>
					<div class="lasnotitas">
						<?php } if($not > 6 && $not <= 13){  ?>
						<a class="unanotita w-clearfix w-inline-block" href="<?php the_permalink(); ?>">
							<img class="image-2" src="<?php echo $destacada_mini[0]; ?>" alt="<?php the_title(); ?>">
							<div class="textdelanota w-clearfix">
								<h3 class="tituldelanotcuad tituldenota tituldeunanotita"><?php the_title(); ?></h3>
								<div class="fechadenotapu fechanota fechdenotacuad"><?php echo $fech; ?></div>
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
			<div class="publicidad12890 mid">
				<!-- /34984776/ep_middlepage_728x90 -->
				<div id='div-gpt-ad-1503551101138-4' style='height:90px; width:728px;margin: 0 auto;'>
					<script>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1503551101138-4'); });
					</script>
				</div>	
			</div>
			<div class="displaynone movplubi mid">
				<!-- /34984776/ep_middlepage_mov_320x100 -->
				<div id='div-gpt-ad-1503551101138-5' style='height:50px; width:320px;'>
					<script>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1503551101138-5'); });
					</script>
				</div>
			</div>
			<div class="notassemana tag">Notas Anteirores</div>
			<div class="lasnotas notascuadrit">
				<?php
				$obj = get_queried_object();
				$count = 0;
				if($_GET["page"]){
					$ofset = 14 + (6 * abs(($_GET["page"]-1)));
				} else {
					$ofset = 14;
				}
				/* $current_user = wp_get_current_user();
				if (user_can( $current_user, 'administrator' )) {   
					echo $ofset;
				} */
				$query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=> 6, 'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field'    => 'slug',
						'terms'    => $obj->slug,
						),
					), 'offset' => $ofset) );
				//var_dump($query);
				while ($query->have_posts()):$query->the_post();
				$imgcatdes = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'nota_cat');
				$fech = get_the_time('F j, Y');
				?>
				<a class="unanotacuadrit w-clearfix w-inline-block" href="<?php the_permalink(); ?>">
					<div class="imgnotcont">
						<img src="<?php echo $imgcatdes[0]; ?>" alt="<?php the_title(); ?>">
					</div>
					<h3 class="tituldelanotcuad tituldenota"><?php the_title(); ?></h3>
					<div class="fechanota fechdenotacuad"><?php echo $fech; ?></div>
				</a>
				<?php
				$count++;
				endwhile;
				wp_reset_postdata();
				?>
			</div>
			<div class="pagin">
				<?php
				$numpags = $obj->count / 6;
				$numpags = round($numpags, 0, PHP_ROUND_HALF_UP);
				//var_dump($obj->count);
				
				if(!$_GET["page"]){
					$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				}
				?>
				<a class="ult_prim" href="<?php //echo $actual_link; ?>?page=1" class="primeropag">primera página</a>
				<div class="laspagins">
					<?php
					$co = 1;
					$getpage = $_GET["page"];
					if($getpage){
						$co = 0;
					}
					$rest = $numpags - $getpage + 2;
					for ($i=0; $i < $numpags; $i++) {
						$co++; 
						if($getpage >= 3){
							$numdepa = $getpage + $co - 2;
						} else {
							$numdepa = $getpage + $co;
						}
						if ($i <= 8 && $rest > 0 ){ ?>
						<a class="paglink" href="<?php echo $actual_link; ?>?page=<?php echo $numdepa; ?>"><?php echo $numdepa; ?></a>
						<?php	
					}
					$rest--;
				}
				?>
			</div>
			<a class="ult_prim" href="<?php echo $actual_link; ?>?page=<?php echo $numpags; ?>" class="primeropag">Última página</a>
		</div>
	</div>
	<aside class="sidebar w-clearfix">
		<?php get_sidebar('principal'); ?> 
	</aside>
</section>
</div>
</main>
<?php get_footer();
