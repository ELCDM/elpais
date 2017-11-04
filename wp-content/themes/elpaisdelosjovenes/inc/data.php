<?php
header('Access-Control-Allow-Origin: *');
require_once "../../../../wp-config.php";
global $wpdb, $post;

$fecha = date("Y-m-d H:i:s");

$catnum = intval($_REQUEST['cat']);
//var_dump($catnum);
?>
<div class="laultimasentra w-clearfix">
	<?php
	$co = 0;
	$catparentid;
	$query = new WP_Query( array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page'=> 5, 'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field'    => 'id',
			'terms'    => $catnum,
			),
		) ) );
	while ($query->have_posts()):$query->the_post();
	$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'menu');
	$cats = wp_get_post_terms( $post->ID, 'category');
	//var_dump($cats);
	$tag;
	foreach ($cats as $cat) {
		if($cat->parent == $catnum){
			$tag = $cat->name;
			$catparentid = $cat->parent;
		}	
	}
	?>
	<a class="unaultim w-clearfix w-inline-block" href="<?php the_permalink(); ?>">
		<div class="contentimg w-clearfix">
			<img src="<?php echo $thumbnail[0]; ?>" alt="<?php the_title(); ?>">
			<div class="etiqueta"><?php echo $tag; ?></div>
		</div>
		<div class="text-block"><?php the_title(); ?></div>
	</a>
	<?php
	$co++;
	endwhile;
	wp_reset_postdata();
	?>

</div>
<div class="etiquetascontent w-clearfix">
<?php $todos = get_term_by(  'id', $catparentid, 'category'); 
//var_dump($todos);
?>
	<a class="unatequita" href="<?php bloginfo("home");?>/centros/<?php echo $todos->slug; ?>">Todos</a>
	<?php	$terms = get_term_children( $catnum, 'category');
//var_dump($terms);
	foreach ($terms as $term_id) {
		$cat = get_term_by(  'id', $term_id, 'category');
   //var_dump($cat); 

	if($cat->count > 20) { ?>
<a class="unatequita" href="<?php bloginfo("home");?>/centros/<?php echo $cat->slug; ?>"> <?php echo $cat->name; ?> </a>
<?php }	}
	?>
	<!--<div class="botscam w-clearfix">
		<a class="botderech w-inline-block" href="#"></a>
		<a class="botderech izquierd w-inline-block" href="#"></a>
	</div>-->
</div>
