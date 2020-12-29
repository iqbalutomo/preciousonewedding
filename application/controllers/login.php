<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @author Muhammad Guruh Ajinugroho
 * @Email  mgajinugroho@gmail.com
 * 
 */

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->model('M_login'); 
        date_default_timezone_set("Asia/Jakarta");  
    }

    function index(){
        $this->load->view('login');
    }

    public function process(){
        $this->M_login->process();
    }
}