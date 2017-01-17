<?php /*
Plugin Name: Purethemes.net Shortcodes (shared on wplocker.com)
Plugin URI:
Description: Adds user-friendly popup to generate shortcodes.
Version: 1.5
Author: Purethems.net
Author URI: http://purethemes.net
*/

class PureThemes_Shortcodes {

    function __construct() {

        define('PT_TINYMCE_URI', plugin_dir_url( __FILE__ ) .'inc');
        add_action('init', array($this, 'init'));
        add_action('admin_init', array($this, 'admin_init'));
        add_action('wp_ajax_form_generate', array($this, 'form_generate_callback'));

    }

    function init() {
        if( ! is_admin() ) {
            $theme = wp_get_theme();
            
            if ('WPVoyager' == $theme->name || 'WPVoyager' == $theme->parent_theme) {
                // if you're here twenty twelve is the active theme or is
                // the current theme's parent theme
            } else {
                wp_enqueue_style( 'purethemes-shortcodes', plugin_dir_url( __FILE__ ) . 'css/shortcodes.css' );
            }
            wp_enqueue_script( 'purethemes-shortcodes', plugin_dir_url( __FILE__ ) . 'js/shortcodes.js',  array( 'jquery' ), '', true  );
            
        }

        if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
            return;

        if ( get_user_option('rich_editing') == 'true' )
        {
            add_filter( 'mce_external_plugins', array(&$this, 'add_rich_plugins') );
            add_filter( 'mce_buttons', array(&$this, 'register_rich_buttons') );
        }
        require_once( 'inc/shortcodes_list.php' );
        require_once( 'shortcodes.php' );
    }


    function add_rich_plugins( $plugin_array ) {
        $plugin_array['purethemesShortcodes'] = PT_TINYMCE_URI . '/plugin.js';
        return $plugin_array;
    }

    function register_rich_buttons( $buttons ) {
        array_push( $buttons, "|", 'pt_button' );
        return $buttons;
    }

    function admin_init() {
        // css
        wp_enqueue_style( 'purethemes-popup', PT_TINYMCE_URI . '/css/purethemes_tbform.css', false, '1.0', 'all' );

        // js
        //wp_enqueue_script( 'jquery-appendo', PT_TINYMCE_URI . '/js/jquery.appendo.js', false, '1.0', false );
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'wp-color-picker' );
        wp_enqueue_script( 'custom-purethemes-shortcodes', PT_TINYMCE_URI . '/custom.js', false, '1.0', false );

    }

    function form_generate_callback($shortcode){

        global $post;
        $pt_shortcodes = ptsc_shortcodes_list();
        $shortcode = $_POST['shortcode'];
        $output = '';
        if( isset( $pt_shortcodes ) && is_array( $pt_shortcodes ) ){
                // get shortcode config stuff
           if(isset($pt_shortcodes[$shortcode]['params'])){
                $params = $pt_shortcodes[$shortcode]['params'];
           }
           $labelbefore = '<tr valign="top"><th scope="row"><label>';
           $labelafter = '</label></th><td>';
           $rowend = '</td></tr>';

           if(isset($pt_shortcodes[$shortcode]['wrapper'])) {
                $output .= '<tbody class="multi">';
           } else {
                $output .= '<tbody>';
           }
           if($pt_shortcodes[$shortcode]['has_content'] === true) {
                 $output .= '<input type="hidden" name="content_flag" id="content_flag" value="1" />';
           }
           if(isset($pt_shortcodes[$shortcode]['wrapper'])) {
                 $output .= '<input type="hidden" name="wrapper_tag" id="wrapper_tag" value="'.$pt_shortcodes[$shortcode]['wrapper'].'" />';
           }
           if(isset($params)){
               foreach( $params as $key => $param ) {

                $output .= $labelbefore. $param['label'] .$labelafter;
                switch( $param['type'] ) {
                    case 'text' :
                        $output .= '<input type="text" name="' . $key . '" id="' . $key . '" class="ptsc" value="' . $param['std'] . '" />';
                        if(!empty($param['desc'])) { $output .= '<p class="description">'.$param['desc'].'</p>'; }
                        $output .= $rowend . "\n";
                    break;

                    case 'gallery' :
                        $upload_link = esc_url( get_upload_iframe_src( 'image') );
                  
                        $output .= ' <a class="ptsc-upload-images button"  href="'.$upload_link.'">'.__('Select images').'</a>';
                        $output .= '<input type="text" name="' . $key . '" id="' . $key . '" class="ptsc ptsc-img-ids" value="' . $param['std'] . '" />';
                       
                        $output .= $rowend . "\n";
                    break;

                    case 'colorpicker' :
                        $output .= '<input type="text" name="' . $key . '" data-default-color="#ffffff" id="' . $key . '" class="ptsc wp-color-picker-field" value="' . $param['std'] . '" />';
                        if(!empty($param['desc'])) { $output .= '<p class="description">'.$param['desc'].'</p>'; }
                        $output .= $rowend . "\n";
                    break;

                    case 'select' :
                        $output .= '<select name="' . $key . '"  class="ptsc" id="' . $key . '">' . "\n";
                        foreach( $param['options'] as $value => $option ) {
                            if($value == $param['std']) {
                                $output .= '<option selected value="' . $value . '">' . $option . '</option>' . "\n";
                            } else {
                                $output .= '<option value="' . $value . '">' . $option . '</option>' . "\n";
                            }
                        }
                        $output .= '</select>';
                        if(!empty($param['desc'])) { $output .= '<p class="description">'.$param['desc'].'</p>'; }
                        $output .= $rowend . "\n";
                    break;

                    case 'textarea' :
                        $output .= '<textarea name="' . $key . '" class="ptsc-content" rows="4" cols="50" id="ptsc-' . $key . '"></textarea>';
                        if(!empty($param['desc'])) { $output .= '<p class="description">'.$param['desc'].'</p>'; }
                        $output .= $rowend . "\n";
                    break;

                    case 'checkbox' :
                        $output .= '<input type="checkbox"  class="ptsc"  name="' . $key . '" id="' . $key . '" ' . ( $param['std'] ? 'checked' : '' ) . ' />' . "\n";
                        if(!empty($param['desc'])) { $output .= '<p class="description">'.$param['desc'].'</p>'; }
                        $output .= $rowend . "\n";
                    break;

                

                    case 'checkbox-multi' :
                        $output .= "<ul>";
                        foreach( $param['options'] as $value => $option ) {
                            $output .= '<li><input type="checkbox"  class="ptsc"  name="' . $value . '" id="' . $value . '"/>';
                            $output .= ' <span>' . $option . '</span></li>';
                        }
                        $output .= "</ul>";
                        if(!empty($param['desc'])) { $output .= '<p class="description">'.$param['desc'].'</p>'; }
                        $output .= $rowend . "\n";
                    break;

                    case 'select-multi' :
                        $output .= '<select multiple name="' . $key . '"  class="ptsc" id="' . $key . '">' . "\n";
                        foreach( $param['options'] as $value => $option ) {
                           if($value == $param['std']) {
                                $output .= '<option selected value="' . $value . '">' . $option . '</option>' . "\n";
                            } else {
                                $output .= '<option value="' . $value . '">' . $option . '</option>' . "\n";
                            }
                        }
                        $output .= '</select>';
                        if(!empty($param['desc'])) { $output .= '<p class="description">'.$param['desc'].'</p>'; }
                        $output .= $rowend . "\n";
                    break;
                }
            }
        }

        if(isset($pt_shortcodes[$shortcode]['wrapper'])) {
            $output .= '<tr valign="top"><th scope="row"></th><td><a href="#" class="button button-secondary button-small ptsc-duplicate">Duplicate</a>'.$rowend . "\n";
        }
        $output .= '</tbody>';
    }
    echo $output;
    die();
    }
}

$pt_shortcodes = new PureThemes_Shortcodes();

?>