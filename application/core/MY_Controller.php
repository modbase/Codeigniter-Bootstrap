<?php

abstract class MY_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // TODO: check if admin, else redirect to login
    }

}