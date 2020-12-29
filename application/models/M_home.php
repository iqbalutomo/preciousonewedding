<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

    
	public function __construct()
	{
		parent::__construct();
        $this->load->database();
        date_default_timezone_set("Asia/Jakarta"); 
    }
    /**
     * Section Price list
     */
    //ambil pricelist dari database
     function get_pricelist(){
        $sql = $this->db->query("SELECT ALL * FROM price_list WHERE is_active='1'");

        return $sql->result();
     }

    //set pricelist untuk bagian paralax pricelist
    function set_pricelist($id){
        $sql = $this->db->query("SELECT ALL nama FROM price_list WHERE id='$id'");
        return $sql->result();
     }
    /**
     * Section slider
     */
    //ambil slider dari database
     function get_slider(){
        $sql = $this->db->query("SELECT ALL * FROM slider");

        return $sql->result();
     }

    /**
     * Section promo
     */
    //ambil promo dari database
     function get_promo(){
        $sql = $this->db->query("SELECT ALL * FROM promo_package");

        return $sql->result();
     }

    //set promo untuk bagian paralax promo
     function set_promo($id){
        $sql = $this->db->query("SELECT ALL nama_promo, nama_image FROM promo_package WHERE id='$id'");
        return $sql->result();
     }
    /**
     * Section career
     */
    //ambil data career dari database{
     function data_career(){
        return $this->db->query("SELECT ALL * FROM career")->result();
     }
    
    //ambil data career dari database{
     function data_detailcareer($id){
        return $this->db->query("SELECT ALL * FROM career WHERE id='$id'")->result();
     }

    /**
     * Section vendor
     */
    //ambil data vendor dari database{
     function get_vendor(){
        return $this->db->query("SELECT ALL * FROM vendor")->result();
     }

    //ambil data client dari database maksimal 4
     function get_client_four(){
        return $this->db->query("SELECT ALL * FROM client ORDER BY updated_at DESC LIMIT 4")->result();
     }

     
    //ambil data client dari database
     function get_list_client(){
        return $this->db->query("SELECT ALL * FROM client ORDER BY updated_at")->result();
     }

    //ambil data client detail dan gallery
     function get_detail_client($id){
        $sql = $this->db->query("SELECT ALL * FROM client WHERE id='$id'");
        if($sql->num_rows() > 0){
            return $this->db->query("SELECT ALL * FROM client WHERE id='$id' ORDER BY updated_at")->result();
        }else{
            redirect(base_url('home/client_list'));
            $this->session->set_flashdata('error','Data tidak ada.');
        }
     }

    //ambil gallery client dimana id adalah id client
     function get_gallery($id){
        return $this->db->query("SELECT ALL * FROM client_gallery WHERE client_id='$id' ORDER BY updated_at DESC")->result();
     }

    //ambil postingan blog
     function blog(){
        return $this->db->query("SELECT ALL * FROM blog ORDER BY updated_at DESC")->result();
     }

    //ambil postingan blog by id
    function detail_blog($id){
        return $this->db->query("SELECT ALL * FROM blog WHERE id='$id' ORDER BY updated_at DESC LIMIT 1")->result();
     }
}
?>