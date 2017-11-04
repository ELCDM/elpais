<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<footer class="footer w-clearfix">
  <div class="allfooter">
    <div class="div1080px footerdiv w-clearfix">
      <div class="footersec1 w-clearfix"><img class="logodelfooter" src="<?php bloginfo('template_url'); ?>/images/elpaisdelosjovns.png">
        <div class="textfooter">Un lugar especialmente para jóvenes como tú, en donde puedes expresar tus ideas, pensamientos y demás temas de interés.&nbsp;
          <br><br>
          Teléfono: <a class="asinestilo" href="tel:+50222198614">(502) 2219-8614</a>
          <br><br>
          Contactános:&nbsp;
          <br>
          <a class="asinestilo linkdecorreo" href="mailto:habitantes@elpaisdelosjovenes.com">habitantes@elpaisdelosjovenes.com</a>
        </div>
        <div class="redesfoots">
          <a class="redelfooter w-inline-block" href="https://www.facebook.com/elpaisdelosjovenes" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/images/iconsfooter_01.png">
          </a>
          <a class="redelfooter w-inline-block" href="https://www.instagram.com/paisdejovenes/" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/images/iconsfooter_05.png">
          </a>
          <a class="redelfooter w-inline-block" href="https://www.youtube.com/channel/UCFhrykZ7Gj0ZwE5N2QJfc0A" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/images/iconsfooter_09.png">
          </a>
          <a class="redelfooter w-inline-block" href="https://twitter.com/paisdejovenes" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/images/iconsfooter_07.png">
          </a>
        </div>
      </div>
      <div class="footersec1 footersec2 w-clearfix">
        <div class="tag tagfooter">Notas Recientes</div>
        <div class="lasnotsdelfoot w-clearfix">
          <?php $notfot = 0;
          $query_notfot = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'orderby'=> 'date','order' => 'DESC', ) );
          while ($query_notfot->have_posts()):$query_notfot->the_post(); 
          $img_footer = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'menu');
          ?>
          <a class="unanotapeque w-clearfix w-inline-block" href="<?php the_permalink(); ?>">
            <img class="imgnotdelfoot" src="<?php echo $img_footer[0]; ?>" alt="<?php the_title(); ?>">
            <h3 class="tituldenotfoot"><?php the_title(); ?></h3>
          </a>
          <?php
          $notfot++;
          endwhile;
          wp_reset_postdata();
          ?>
        </div>
      </div>
      <div class="footersec1 footersec3 w-clearfix">
        <div class="tag tagfooter">CATEGORÍAS POPULARES</div>
        <div class="listadecentro w-clearfix">
          <?php
          $terms = get_terms( array(
            'taxonomy' => 'category',
            'orderby'    => 'count',
            'order' => 'DESC',
            'hide_empty' => false
            ) );
          $tena = 1;
          foreach ($terms as &$term) {
            if($tena < 8){
              ?>
              <a class="link w-clearfix" href="<?php bloginfo("home");?>/centros/<?php echo $term->slug; ?>">
                <?php echo $term->name; ?>
                <span class="numbernota"><?php echo $term->count; ?></span>
              </a>
              <?php
            }
            $tena++; 
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="downfooter">
    <div class="div1080px">
      <div class="text-block-3">© Copyright 2016 - El Centro de Marketing</div>
    </div>
  </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/webflow.js" type="text/javascript"></script>
<!--<script src="<?php bloginfo('template_url'); ?>/js/jquery.bxslider.min.js" type="text/javascript"></script>-->
<script src="<?php bloginfo('template_url'); ?>/js/action.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<?php wp_footer(); ?>

</body>
</html>
