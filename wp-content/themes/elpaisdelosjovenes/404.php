<?php
get_header(); ?>
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
			<div class="contentprinci w-clearfix">
				<div class="textodebusqueda">
					<h1 style="text-align: center;">ERROR 404: PAGINA NO ENCONTRADA</h1>
				</div>
				<div class="buscadorform enbuscador w-clearfix">	
					<form class="buscardebus buscar4 formsearch w-clearfix" data-name="Email Form" id="search-inter-form" name="search-inter-form"  method="GET" action="<?php echo esc_url(get_site_url('/')); ?>"><input class="textdesearch w-input" data-name="Buscar 3" id="buscar-3" maxlength="256" value="<?php the_search_query(); ?>" name="s" required="required" type="text"><input class="submit-button w-button" type="submit" value="Buscar"></form>
				</div>

				<div class="lasnotas notascuadrit">
					<?php
					$query_not = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 10, 'orderby'=> 'date','order' => 'DESC', ) );
					while ($query_not->have_posts()):$query_not->the_post();
					$fech = get_the_time('F j, Y');
					?>
					<a class="unanotacuadrit w-clearfix w-inline-block" href="<?php the_permalink(); ?>">
						<?php $destacada_busc = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'nota_cat'); ?>
						<div class="imgnotcont">
							<img src="<?php echo $destacada_busc[0]; ?>" alt="<?php the_title(); ?>">
						</div>
						<h3 class="tituldelanotcuad tituldenota"><?php the_title(); ?></h3>
						<div class="fechanota fechdenotacuad"><?php echo $fech; ?></div>
					</a>
					<?php
					endwhile;
					wp_reset_postdata();
					?>
				</div>
<!--<div class="navegador">
	<div class="cargarmas notassemana tag">Cargar más notas</div>
</div>-->
</div>
<aside class="sidebar w-clearfix">
	<?php get_sidebar('principal'); ?> 
</aside>
</section>
</div>
</main>
<?php get_footer();
