<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="Webflow" name="generator">
	<link href="<?php bloginfo('template_url'); ?>/css/normalize.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/css/webflow.css" rel="stylesheet" type="text/css">
	<!--<link href="<?php //bloginfo('template_url'); ?>/css/jquery.bxslider.min.js" rel="stylesheet" type="text/css">-->
	<link href="<?php bloginfo('template_url'); ?>/css/el-pais-de-los-jovenes.webflow.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
	<script type="text/javascript">WebFont.load({
		google: {
			families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]
		}
	});
	var templateurl = '<?php bloginfo('template_url'); ?>';
	var home = '<?php bloginfo('home'); ?>';
</script>
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5999dbe4a3155100110e7155&product=inline-share-buttons' async='async'></script>
<!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
</script>
<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
	var googletag = googletag || {};
	googletag.cmd = googletag.cmd || [];
</script>

<script>
	googletag.cmd.push(function() {
		googletag.defineSlot('/34984776/ep_box_300x250', [300, 250], 'div-gpt-ad-1503551101138-0').addService(googletag.pubads());
		googletag.defineSlot('/34984776/ep_halfpage_300x600', [300, 600], 'div-gpt-ad-1503551101138-1').addService(googletag.pubads());
		googletag.defineSlot('/34984776/ep_header_728x90', [728, 90], 'div-gpt-ad-1503551101138-2').addService(googletag.pubads());
		googletag.defineSlot('/34984776/ep_header_mov_320x100', [[300, 75], [320, 50]], 'div-gpt-ad-1503551101138-3').addService(googletag.pubads());
		googletag.defineSlot('/34984776/ep_middlepage_728x90', [728, 90], 'div-gpt-ad-1503551101138-4').addService(googletag.pubads());
		googletag.defineSlot('/34984776/ep_middlepage_mov_320x100', [320, 50], 'div-gpt-ad-1503551101138-5').addService(googletag.pubads());
		googletag.pubads().enableSingleRequest();
		googletag.enableServices();
	});
</script>
<link href="<?php bloginfo('template_url'); ?>/images/icon.png" rel="shortcut icon" type="image/x-icon">
<link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
<?php wp_head(); ?>
</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.10&appId=1159589840759123";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<body <?php body_class(); ?>>
	<header class="header">
		<?php
		if ( is_home() ) { 
			$slugcat = 'portada-de-inicio'; 
			//var_dump($slugcat);
		} else {
			$slugcat = 'portada-'.get_queried_object()->slug;
			//var_dump($slugcat);
		}
		$query_por = new WP_Query( array( 'post_type' => 'portadas' ) );
		while ($query_por->have_posts()):$query_por->the_post();
		$portadaimg = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
		$slugcatpor = $post->post_name;
		//var_dump($slugcatpor);
		if($slugcatpor == $slugcat){
			$portada = $portadaimg;
			//var_dump($portada);
		}
		endwhile;
		wp_reset_postdata(); 
		
		if($portada){
			?>
			<div class="portada w-clearfix">
				<img class="portadaimg" sizes="100vw" src="<?php echo $portada[0]; ?>">
			</div>
			<div class="navmar w-nav" data-animation="default" data-collapse="medium" data-duration="400">
				<?php } else { ?>
				<div class="navmar navmenuint w-nav" data-animation="default" data-collapse="medium" data-duration="400">
					<?php } ?>
					<div class="w-container"><a class="logoweb w-nav-brand" href="<?php bloginfo('home'); ?>"><img class="logo" src="<?php bloginfo('template_url'); ?>/images/logoelpaispek.png"></a>
						<nav class="nav-menu w-clearfix w-nav-menu" role="navigation">
							<a class="itemenu w-nav-link" href="<?php bloginfo("home");?>/centros/centro-de-entretenimiento" cat="29">Entretenimiento</a>
							<a class="itemenu w-nav-link" href="<?php bloginfo("home");?>/centros/centro-de-deportes" cat="20">DEPORTES</a>
							<a class="itemenu w-nav-link" href="<?php bloginfo("home");?>/centros/centro-de-tendencias" cat="1326">TENDENCIAS</a>
							<a class="itemenu w-nav-link" href="<?php bloginfo("home");?>/centros/centro-de-noticias" cat="1008">NOTICIAS</a>
							<a class="itemenu w-nav-link" href="<?php bloginfo("home");?>/centros/centro-de-emprendimiento" cat="28">EMPRENDIMIENTO</a>
							<a class="itemenu w-nav-link" href="<?php bloginfo("home");?>/centros/centro-de-fe" cat="16">FE</a>
							<a class="itemenu w-nav-link" href="<?php bloginfo("home");?>/centros/centro-de-vida" cat="1327">VIDA</a>
							<a class="itemenu w-nav-link" href="<?php bloginfo("home");?>/centros/centro-de-turismo" cat="1328">TURISMO</a>
							<a class="buscador w-inline-block" href="#"></a>
							<div class="submenucontent <?php if(!$portada){ echo 'submenuinter'; } ?> w-clearfix">
								<div class="loaderimg">
									<img src="<?php bloginfo('template_url'); ?>/images/loader.gif">
								</div>
								<div class="aquicontent"></div>
							</div>
						</nav>
						<div class="buscadorform w-clearfix"><a class="buscarmov w-inline-block" href="#"></a>
							<form class="formsearch w-clearfix" id="search-form" name="search-form"  method="GET" class="formsearch" action="<?php echo esc_url(get_site_url('/')); ?>">
								<input class="textdesearch w-input" data-name="buscar" id="search" maxlength="256" value="<?php the_search_query(); ?>" name="s" required="required" type="text">
								<input class="submit-button w-button" type="submit" value="buscar">
							</form>
						</div>
						<div class="menu-button w-nav-button">
							<div class="icondemov w-icon-nav-menu"></div>
						</div>
					</div>
				</div>
				<a class="iralaradio w-inline-block" href="#"></a>
			</header>
			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-60671599-1', 'auto');
				ga('send', 'pageview');

			</script>