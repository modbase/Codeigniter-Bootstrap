<?php
/**
 * Codeigniter Bootstrap
 * -------------------------------------------------------------------
 * Developed and maintained by Stijn Geselle <stijn.geselle@gmail.com>
 * -------------------------------------------------------------------
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Account extends MY_Controller {

    public function index() {
        $this->template->set('title', 'User dashboard');
        $this->template->load('layouts/user', 'user/home');
    }
}

/* End of file home.php */
/* Location: ./application/controllers/admin/home.php */
