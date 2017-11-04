<?php // La nueva clase debe heredar de WP_Widget
class facebook_widget extends WP_Widget {
 function __construct() {
   $options = array('classname' => 'mi-estilo',
    'description' => 'Widget para embed de facebook');
   parent::__construct('facebook_widget', 'Facebook Timeline', $options);
 }
 function form($instance) {
        // Valores por defecto
  $defaults = array('titulo' => 'Ofertas', 'descripcion'=> '');
        // Se hace un merge, en $instance quedan los valores actualizados
  $instance = wp_parse_args((array)$instance, $defaults);
        // Cogemos los valores
  $titulo = $instance['titulo'];
        // Mostramos el formulario
  ?>
  <p>
    <label>Titulo del Widget</label>
    <input class="widefat" type="text" name="<?php echo $this->get_field_name('titulo');?>"
    value="<?php echo esc_attr($titulo);?>"/>
  </p>      
  <?php
} 
function update($new_instance, $old_instance) {
  $instance = $old_instance;
        // Con sanitize_text_field elimiamos HTML de los campos
  $instance['titulo'] = sanitize_text_field($new_instance['titulo']);
  return $instance;  
}
function widget($args, $instance) { 
  extract($args);
  $titulo = apply_filters('widget_title', $instance['titulo']);
  ?>
  <div class="unasecside w-clearfix">
    <div class="notassemana tag"><?php echo $titulo; ?></div>
    <div id="fb-root"></div>

    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.10&appId=1159589840759123";
      fjs.parentNode.insertBefore(js, fjs);
    }
    (document, 'script', 'facebook-jssdk'));
  </script>

  <div class="contside">
    <div class="fb-page" data-href="https://www.facebook.com/elpaisdelosjovenes/" data-tabs="timeline" data-width="270" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
      <blockquote cite="https://www.facebook.com/elpaisdelosjovenes/" class="fb-xfbml-parse-ignore">
        <a href="https://www.facebook.com/elpaisdelosjovenes/">El País de los Jóvenes</a>
      </blockquote>
    </div>
  </div>
</div>
<?php }
}
?>