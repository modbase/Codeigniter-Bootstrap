<?php
/**
 * Codeigniter Bootstrap
 * -------------------------------------------------------------------
 * Developed and maintained by Stijn Geselle <stijn.geselle@gmail.com>
 * -------------------------------------------------------------------
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('asset_url')) {
    function asset_url($uri = '')
    {
        $CI =& get_instance();

        if($CI->config->item('assets_path')){
            return $CI->config->item('assets_path') . $uri;
        } else {
            return $CI->config->base_url('assets/' . $uri);
        }
    }
}

/* End of file assets_helper.php */
/* Location: ./application/helpers/assets_helper.php */
