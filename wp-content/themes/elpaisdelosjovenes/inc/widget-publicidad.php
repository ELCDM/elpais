<?php // La nueva clase debe heredar de WP_Widget
class publicidad_widget extends WP_Widget {
 function publicidad_widget() {
   $options = array('classname' => 'mi-estilo',
    'description' => 'Widget para espacio de publicidad');
   $this->WP_Widget('publicidad_widget', 'Publicidad', $options);
 }
 function form($instance) {
        // Valores por defecto
  $defaults = array('titulo' => 'Ofertas', 'descripcion'=> '');
        // Se hace un merge, en $instance quedan los valores actualizados
  $instance = wp_parse_args((array)$instance, $defaults);
        // Cogemos los valores
  $titulo = $instance['titulo'];
  $descripcion = $instance['descripcion'];
        // Mostramos el formulario
  ?>
  <p>
    <label>Titulo del Widget</label>
    <input class="widefat" type="text" name="<?php echo $this->get_field_name('titulo');?>"
    value="<?php echo esc_attr($titulo);?>"/>
  </p>
  <p>
    <label>Código de Publicidad</label>
    <textarea class="widefat" type="text" name="<?php echo $this->get_field_name('descripcion');?>" rows="4" cols="50" value="<?php echo esc_attr($descripcion);?>"><?php echo esc_attr($descripcion);?></textarea>
    <textarea class="widefat code" rows="16" cols="20" id="widget-custom_html-2-content" name="widget-custom_html[2][content]" data-gramm="true" data-txt_gramm_id="bd66abac-e6fb-d3a3-3e52-f998f28175b4" data-gramm_id="bd66abac-e6fb-d3a3-3e52-f998f28175b4" spellcheck="false" data-gramm_editor="true" style="z-index: auto; position: relative; line-height: 19.6px; font-size: 14px; transition: none; background: transparent !important;"><?php echo esc_attr($descripcion);?></textarea>
  </p>      
  <?php
}
function update($new_instance, $old_instance) {
  $instance = $old_instance;
        // Con sanitize_text_field elimiamos HTML de los campos
  $instance['titulo'] = sanitize_text_field($new_instance['titulo']);
  $instance['descripcion'] = sanitize_text_field($new_instance['descripcion']);
  return $instance;  
}
function widget($args, $instance) { 
  extract($args);
  $titulo = apply_filters('widget_title', $instance['titulo']);
  $descripcion = $instance['descripcion'];
  $url = $instance['url'];
  ?>
  <div class="unasecside w-clearfix">
  <div class="notassemana tag"><?php echo $titulo; ?></div>
    <div class="contside">
      <?php echo $descripcion; ?>
    </div>
  </div>
  <?php }
}
?>