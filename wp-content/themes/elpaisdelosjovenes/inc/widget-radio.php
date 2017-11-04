<?php // La nueva clase debe heredar de WP_Widget
class radio_widget extends WP_Widget {
 function __construct() {
   $options = array('classname' => 'mi-estilo',
    'description' => 'Widget que muestra la radio');
   parent::__construct('radio_widget', 'Radio', $options);
 }
 function form($instance) {
  ?>
  <p>
    <label for="<?php echo $this->get_field_id('mpw_texto'); ?>">Título del Widget</label>
    <input class="widefat" id="<?php echo $this->get_field_id('mpw_texto'); ?>" name="<?php echo $this->get_field_name('mpw_texto'); ?>" type="text" value="<?php echo esc_attr($instance["mpw_texto"]); ?>" />
  </p>  
  <?php
}
function update($new_instance, $old_instance) {
  $instance = $old_instance;
  $instance["mpw_texto"] = strip_tags($new_instance["mpw_texto"]);
        // Repetimos esto para tantos campos como tengamos en el formulario.
  return $instance;   
}
function widget($args, $instance) { 
?>
<div class="unasecside w-clearfix rad">
  <div class="notassemana tag"><?=$instance["mpw_texto"]?></div>
  <div class="contside">
    <div class="radiocontent w-clearfix">
      <a class="radioclic w-clearfix w-inline-block" href="javascript:ventanaSecundaria('https://elpaisdelosjovenes.com/radio/aacplayer.html')" target="_blank">
        <img class="imgderadio" src="<?php bloginfo('template_url'); ?>/images/radio.png">
      </a>
      <div class="radioparmovil w-clearfix">
        <h4 class="escuchaaqui">ESCUCHA AQUÍ</h4>
        <div class="iconcontents">
          <a class="unicon w-inline-block" href="http://www.webgtserver.net/streaming/paisjovenes/iphone.m3u8" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/images/icons_01.png">
          </a>
          <a class="unicon w-inline-block" href="rtsp://us1.rtmphd.com:1935/sca/scastream8" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/images/icons_03.png">
          </a>
          <a class="unicon w-inline-block" href="http://tunein.com/radio/El-pa%c3%ads-de-los-j%c3%b3venes---Radio-s289814/" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/images/icons_05.png">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<script language=javascript> 
  function ventanaSecundaria (URL){ 
   window.open(URL,"ventana1","width=300,height=300,scrollbars=NO") 
 } 
</script>
<?php }
}
?>