<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Template {

    private $template_data = array();
    private $headers = array();
    private $CI;

    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->config->load('template');
    }

    function set($name, $value) {
        $this->template_data[$name] = $value;
    }

    function add_header($header) {
        array_push($this->headers, $header);
    }

    function load($template = '', $view = '', $view_data = array(), $return = FALSE) {
        $this->CI = & get_instance();
        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
        $this->set('headers', implode('', $this->headers));
        return $this->CI->load->view($template, $this->template_data, $return);
    }

}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */