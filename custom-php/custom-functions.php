<?php

function get_mata( $post_id, $meta_key )
{
    echo get_post_meta( $post_id, $meta_key, true ); 
}

/*<----// WX Basic Needs //---->*/

//wx shortcodes
//require_once get_template_directory() . '/custom-php/wx_custom-shortcodes.php';

//wx cleanup functions extras
require_once get_template_directory() . '/custom-php/wx_custom-cleanups.php';

//wx login and admins scripts
require_once get_template_directory() . '/custom-php/wx_custom-login_admin.php';

//wx style and jquery scripts
require_once get_template_directory() . '/custom-php/wx_custom-style_scripts.php';
/*<----//  //---->*/


//FIXED SHORTCODE
//require_once get_template_directory() . '/custom-php/wx_short_main_category_display.php';

/*<----// WX EXTRA Shortcode posts //---->*/
require_once get_template_directory() . '/custom-php/wx_custom-shortcodes.php';
require_once get_template_directory() . '/custom-php/wx_widgets.php';

/*<----//  //---->*/






require_once get_template_directory() . '/custom-php/class.mb_image_gallery.php';

/*{{{ Add Image gallery to taopix product }}}*/
function add_meta_box_gallery_product(){
if(!class_exists('Image_Gallery_Metabox')) return;
new Image_Gallery_Metabox(array('post_types' => array('products_slider', 'our_products')));
}
add_action('init', 'add_meta_box_gallery_product');



?>