<?php
 /*
 Plugin Name: Hedy plugin
 Plugin URI: http://hedy.org
 Description: Plugin per afegir codi Hedy a Wordpress
 Author: Aniol Lidon Baulida
 Version: 0.1
 Author URI: https://github.com/aniollidon/
 */

 require_once('hedy-widget.php');

 function hedy_handler( $atts, $content, $tag ){ 
    $nivell = $atts["nivell"];
    if(!$nivell) 
        return "Cal especificar el nivell com atribut";

    $codi_enc = urlencode(trim($content));
    // -webkit-transform:scale(0.5);-moz-transform-scale(0.5);
    return '<div style="display: flex;justify-content: center;max-width: 100%;">
                <iframe style="border:0;  max-width:1000px !important;" height="700px" width="1000px"  
                    src="https://hedy.org/render_code/'.$nivell.'?code='.$codi_enc.'" frameborder="0" data-fragment-index="0">
                </iframe>
            </div>';

 }

 add_shortcode( 'hedy', 'hedy_handler' );
