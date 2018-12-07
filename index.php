<?php
/**
 * Plugin Name: Mapa expandible
 * Plugin URI: http://cydet.com
 * Description: Mapa Expandible
 * Version: 1.0
 * Author: OLS
 * Author URI: http://cydet.com
 * License: GPL2
 */

/*
ejemplo: [btn_show_map id="mapacuatro"]
*/
add_shortcode("btn_show_map", "mostrar_mapa");
 
function mostrar_mapa($attrs){
		$id_map = shortcode_atts(array('id'=>'-1'), $attrs);
        return '<p style="text-align: center;"><button class="button" onclick="ver_mapa(' . "'" . $id_map['id'] . "'" . ')">Mostrar mapa</button></p>';
}

add_action('wp_scripts','script_init');

function script_init() {
    wp_script( 'script-js', plugins_url( '/js/funcion_script.js', __FILE__ ));
}

?>
