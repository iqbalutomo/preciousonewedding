<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_home');
        date_default_timezone_set("Asia/Jakarta"); 
    }

    //Halaman awal website
    public function index(){
        $data['pricelist'] = $this->M_home->get_pricelist();
        $data['slider'] = $this->M_home->get_slider();
        $data['promo'] = $this->M_home->get_promo();
        $data['vendor'] = $this->M_home->get_vendor();
        $data['client'] = $this->M_home->get_client_four();
        $this->load->view('index',$data);
        $this->load->view('jsphp/ofindex');
    }

    function set_promo($id){
        $data=$this->M_home->set_promo($id);
		echo json_encode($data);
    }
    
    function set_pricelist($id){
        $data=$this->M_home->set_pricelist($id);
		echo json_encode($data);
    }

    public function career(){
        $data['career'] = $this->M_home->data_career();
        $this->load->view('careers',$data);
    }

    public function career_detail($id){
        $data['career'] = $this->M_home->data_detailcareer($id);
        $this->load->view('detail',$data);
    }

    function blog(){
        $data['blog'] = $this->M_home->blog();
        $this->load->view('blog',$data);
    }
    
    function content($id){
        $data['blog'] = $this->M_home->detail_blog($id);
        $this->load->view('content',$data);
    }

    function privacy(){
        $this->load->view('privacy-policy');
    }

    function client_list(){
        $data['client'] = $this->M_home->get_list_client();
        $this->load->view('clients',$data);
    }
    function client_detail($id){
        $data['client'] = $this->M_home->get_detail_client($id);
        $data['gallery'] = $this->M_home->get_gallery($id);
        $this->load->view('precious-moment',$data);
    }

    function terms(){
        $this->load->view('terms-and-conditions');
    }
}
?>