<?php
/**
 * Codeigniter Bootstrap
 * -------------------------------------------------------------------
 * Developed and maintained by Stijn Geselle <stijn.geselle@gmail.com>
 * -------------------------------------------------------------------
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('message_box')) {
    function message_box($message_type, $close_button = TRUE)
    {
        $CI =& get_instance();
        $message = $CI->session->flashdata($message_type);
        $retval = '';
        
        if($message){
            switch($message_type){
                case 'success':
                    $retval .= '<div class="alert alert-success">';
                    break;
                case 'error':
                    $retval .= '<div class="alert alert-error">';
                    break;
                case 'info':
                    $retval .= '<div class="alert alert-info">';
                    break;
                case 'warning':
                    $retval .= '<div class="alert">';
                    break;
            }

            if($close_button)
                $retval .= '<a class="close" data-dismiss="alert" href="#">&times;</a>';

            $retval .= $message;
            $retval .= '</div>';
            return $retval;
        }
    }
}

if (!function_exists('set_message')){
    function set_message($type, $message)
    {
        $CI =& get_instance();
        $CI->session->set_flashdata($type, $message);
    }
}

/* End of file alert_helper.php */
/* Location: ./application/helpers/alert_helper.php */
