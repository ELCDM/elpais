<?php
get_header(); 
global $post;
$post = get_post($post_id);
while ( have_posts() ) : the_post(); 
$destacada = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'nota_interior');
$cats = wp_get_post_terms($post->ID, 'category');
$tags = wp_get_post_terms($post->ID, 'post_tag');
$fech = get_the_time('F j, Y');
?>
<main class="main">
	<div class="borderdiv div1080px w-clearfix">

		<!--PUBLICIDAD-->
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
		<section class="notasdelasemana w-clearfix">
			<div class="contentprinci interior w-clearfix">
				<div class="contentupinter w-clearfix">

					<!--BREADCRUMB-->
					<div class="breadcrumb">
						<a class="unbread" href="<?php bloginfo('home'); ?>">Inicio</a>
						<?php $flag = 1; $catparent; 
						foreach($cats as $cat) { 
							if($cat->parent == 0 && $flag == 1){ ?>
							<a class="unbread" href="<?php bloginfo("home");?>/centros/<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></a>
							<?php $flag = 0; $catparent = $cat->term_id; } }  ?>
							<?php foreach($cats as $cat) { 
								if($cat->parent == $catparent){ ?>
								<a class="unbread" href="<?php bloginfo("home");?>/centros/<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></a>
								<?php } }  ?>
								<a class="unbread" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</div>

							<div class="tagsinter">
								<?php $flagt = 1; $catparentt; 
								foreach($cats as $catt) { 
									if($catt->parent == 0 && $flagt == 1){ ?>
									<a class="taginter" href="<?php bloginfo("home");?>/centros/<?php echo $catt->slug; ?>"><?php echo $catt->name; ?></a>
									<?php $flagt = 0; $catparentt = $catt->term_id; } }  ?>
									<?php foreach($cats as $catt) { 
										if($catt->parent == $catparentt){ ?>
										<a class="unbread" href=""></a>
										<a class="taginter" href="<?php bloginfo("home");?>/centros/<?php echo $catt->slug; ?>"><?php echo $catt->name; ?></a>
										<?php } }  ?>
									</div>
									<h1 class="titulinter"><?php the_title(); ?></h1>
									<div class="fechanota fechdenotacuad"><?php echo $fech; ?></div>
								</div>
								<div class="sharebar">
									<div class="sharethis-inline-share-buttons"></div>
								</div>
								<div class="imgcontent">
									<?php if($destacada){ ?>
									<img class="imginterdenot" src="<?php echo $destacada[0]; ?>" alt="<?php the_title(); ?>" alt="<?php the_title(); ?>" >
									<?php } ?>
								</div>
								<div class="contentdelanota"><?php the_content(); ?></div>
								<div class="etiquetasdelanota w-clearfix">
									<div class="eti">Etiquetas</div>
									<?php foreach($tags as $tag) { ?>
									<a class="eti etiketlink" href="#"><?php echo $tag->name; ?></a>
									<?php } ?>
								</div>
								<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="10"></div>
								<div class="sharebar">
									<div class="sharethis-inline-share-buttons"></div>
								</div>
								<div class="proximoyanterior w-clearfix">
									<?php
									$previous_post = get_previous_post();
									$next_post = get_next_post();
									$destacada_prev = wp_get_attachment_image_src(get_post_thumbnail_id($previous_post->ID), 'nota_footer');
									$destacada_next = wp_get_attachment_image_src(get_post_thumbnail_id($next_post->ID), 'nota_footer'); 
									?>
									<div class="artiantyprox w-clearfix">
										<?php if($previous_post){ ?>
										<div class="textanter">Artículo anterior</div>
										<a class="unanotahoriz w-clearfix w-inline-block" href="<?php echo get_permalink($previous_post->ID)?>">
											<div class="imgcontenthoz"><img class="imgdenot" src="<?php echo $destacada_prev[0]; ?>" alt="<?php echo $previous_post->post_title; ?>"></div>
											<div class="textdelanothoz w-clearfix">
												<h3 class="titulanterior tituldelanotahoz"><?php echo $previous_post->post_title; ?></h3>
												<div class="fechanota fechvert"><?php echo get_the_time('F j, Y', $previous_post->ID); ?></div>
											</div>
										</a>
										<?php } ?>
									</div>
									<div class="artiantyprox w-clearfix">
										<?php if($next_post){ ?>
										<div class="protext textanter">Próximo Artículo</div>
										<a class="unanotahoriz w-clearfix w-inline-block" href="<?php echo get_permalink($next_post->ID)?>">
											<div class="imgcontenthoz"><img class="imgdenot" src="<?php echo $destacada_next[0]; ?>" alt="<?php echo $previous_post->post_title; ?>"></div>
											<div class="textdelanothoz w-clearfix">
												<h3 class="titulanterior tituldelanotahoz"><?php echo $next_post->post_title; ?></h3>
												<div class="fechanota fechvert"><?php echo get_the_time('F j, Y', $next_post->ID); ?></div>
											</div>
										</a>
										<?php } ?> 
									</div>
								</div>
								<div class="notasrecomendadas w-clearfix">
									<div class="notassemana tag">Artículos Relacionados</div>
									<div class="lasrealcionadas">
										<?php
										$theid = $post->ID;
										$tagrel = array();
										foreach($tags as $tag) {
											array_push($tagrel, $tag->slug);	
										} 										
										$args = array(
											'post_type' => 'post',
											'posts_per_page'=> 7,
											'tax_query' => array(
												array(
													'taxonomy' => 'post_tag',
													'field'    => 'slug',
													'terms'    => $tagrel,
													),
												),
											);
										$query = new WP_Query( $args ); 
										while ($query->have_posts()):$query->the_post();
										$destacada_rel = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'nota_cuadrito');
										if($post->ID != $theid){
											?>
											<a class="relacionada unanotacuadrit w-clearfix w-inline-block" href="<?php the_permalink(); ?>">
												<img src="<?php echo $destacada_rel[0]; ?>" alt="<?php the_title(); ?>"/>
												<h3 class="tituldelanotcuad tituldenota titulderela"><?php the_title(); ?></h3>
											</a>
											<?php
										}
										endwhile;
										wp_reset_postdata(); ?>

									</div>
								</div>
							<?php endwhile; ?> 
						</div>
						<aside class="sidebar w-clearfix">
							<?php get_sidebar('principal'); ?>
						</aside>
					</section>
				</div>
			</main>
			<?php get_footer();
