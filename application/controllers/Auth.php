<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		if(!$_POST){
            $this->load->view('login');
        } else{
            echo "prsoses";die();
        }
    }
}