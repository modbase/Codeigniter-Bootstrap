<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
  | -------------------------------------------------------------------------
  | Hooks
  | -------------------------------------------------------------------------
  | This file lets you define "hooks" to extend CI without hacking the core
  | files.  Please see the user guide for info:
  |
  |	http://codeigniter.com/user_guide/general/hooks.html
  |
 */

switch (ENVIRONMENT) {
    case 'production':
        $hook['display_override'] = array(
            'class' => 'Minifyhtml',
            'function' => 'output',
            'filename' => 'minifyhtml.php',
            'filepath' => 'hooks',
            'params' => array()
        );
        
        break;
}



/* End of file hooks.php */
/* Location: ./application/config/hooks.php */