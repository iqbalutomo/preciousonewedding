<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

/*
 * @author Muhammad Guruh Ajinugroho
 * @Email  mgajinugroho@gmail.com
 * 
 */

    function __construct(){
        parent::__construct();
        $this->load->model('M_admin');
        if($this->session->userdata('username') != null){
            if($this->session->userdata('is_active') == 0){
                $this->session->set_flashdata('error', 'Akun ini sedang tidak aktif, silahkan hubungi administrator.');
                redirect(site_url('login'));
            }
        }else{
            redirect(site_url('login'));
        }
        date_default_timezone_set("Asia/Jakarta"); 
        ini_set('max_file_uploads', 50);
        ini_set('upload_max_filesize', 40);
        ini_set('post_max_size', 40);
    }

    /**
     * Section : Login & Logout Admin
     */

    //Halaman awal login
     function index(){
		$this->load->view('admin/default/header');
		$this->load->view('admin/default/sidebar');
		$this->load->view('admin/default/admin');
		$this->load->view('admin/default/footer');
     }

    //Logout
     function logout(){
        $this->session->sess_destroy();
		redirect(base_url('index.php/login'));
     }

    /**
     * Section : user
     */

    //Load halaman user
     function v_user(){
        if($this->session->userdata('role') == 1){
            $data['user'] = $this->M_admin->v_user();
            $this->load->view('admin/user/header',$data);
            $this->load->view('admin/default/sidebar');
            $this->load->view('admin/user/user');
            $this->load->view('admin/user/footer');
            $this->load->view('admin/user/custom_user');
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    //Tambah user baru
     function c_user(){
        if($this->session->userdata('role') == 1){
            $this->M_admin->c_user();
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    //ambil data user dari database buat form edit
     function get_user($id){
        $data=$this->M_admin->get_user($id);
		echo json_encode($data);
     }

    //untuk update data user di database sekaligus sessionnya juga
     function update_user(){
        if($this->session->userdata('role') == 1){
            $this->M_admin->update_user();
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    //mengubah status aktif/tidak aktif user yang ada di tabel
     function status_user(){
        if($this->session->userdata('role') == 1){
            $id = $this->uri->segment(3);
            $this->M_admin->status_user($id);
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    /** 
     * Section : slider 
     */

    //Load halaman slider
     public function v_slider(){
        if($this->session->userdata('role') == 1){
            $data['slider'] = $this->M_admin->v_slider();
            $this->load->view('admin/slider/header',$data);
            $this->load->view('admin/slider/header');
            $this->load->view('admin/default/sidebar');
            $this->load->view('admin/slider/slider');
            $this->load->view('admin/slider/footer');
            $this->load->view('admin/slider/custom_slider');
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    //Tambah data slider
     function upload_slider(){
        if($this->session->userdata('role') == 1){
            $id = uniqid('image-',true);

            $config['upload_path'] = './uploads/slider';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '1000000';
            $config['file_ext_tolower'] = true;
            $config['file_name'] = str_replace('.','_',$id);
    
            $this->load->library('upload',$config);

            if(file_exists($config['upload_path'].'/'.$config['file_name'])){
				$filename = $this->upload->data('file_name');
                $this->M_admin->upload_slider($filename);
                $this->session->set_flashdata('success', 'Berhasil upload data slider.');
                redirect(site_url('admin/v_slider'));
            }else{
                if(!$this->upload->do_upload('image_slide')){
                    $this->session->set_flashdata('error', 'Gagal upload data slider :<br>'.$this->upload->display_errors());
                    redirect(site_url('admin/v_slider'));
                }else{
                    $filename = $this->upload->data('file_name');
                    $this->M_admin->upload_slider($filename);
                    $this->session->set_flashdata('success', 'Berhasil upload data slider.');
                    redirect(site_url('admin/v_slider'));
                }
    
            }
            

        }else{
            redirect(site_url('admin/logout'));
        }
        
     }
     
    //ambil data slider untuk form edit
     function get_slider($id){
        $data=$this->M_admin->get_slider($id);
		echo json_encode($data);
     }
    
    //update_slider
     function update_slider(){
        if($this->session->userdata('role') == 1){
            if(empty($_FILES['image_slide']['name'])){
                $this->M_admin->update_slider(0);
            }else{
                $id = uniqid('image-',true);

                $config['upload_path'] = 'uploads/slider';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '100000';
                $config['file_ext_tolower'] = true;
                $config['file_name'] = str_replace('.','_',$id);

                $this->load->library('upload',$config);
                
                if(file_exists($config['upload_path'].'/'.$config['file_name'])){
                    $filename = $this->upload->data('file_name');
                    $this->M_admin->update_slider($filename);
                }else{
                    if(!$this->upload->do_upload('image_slide')){
                        $this->session->set_flashdata('error', 'Gagal upload data slider :<br>'.$this->upload->display_errors());
                        redirect(site_url('admin/v_slider'));
                    }else{
                        $filename = $this->upload->data('file_name');
                        $this->M_admin->update_slider($filename);
                    }
                }
            }

        }else{
            redirect(site_url('admin/logout'));
        }
         
     }

    //delete slider
     function delete_slider($id){
        if($this->session->userdata('role') == 1){
            $this->M_admin->delete_slider($id);
        }else{
            redirect(site_url('admin/logout'));
        }
     }
    

    /**
     * Section : Price List
     */
    //Load halaman price-list
     function v_pricelist(){
        if($this->session->userdata('role') == 1){
            $data['pricelist'] = $this->M_admin->v_price();
            $this->load->view('admin/price-list/header',$data);
            $this->load->view('admin/default/sidebar');
            $this->load->view('admin/price-list/price-list');
            $this->load->view('admin/price-list/footer');
            $this->load->view('admin/price-list/custom_pricelist');
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    //Mengubah status aktif dari price list
     function status_pricelist(){
        if($this->session->userdata('role') == 1){
            $id = $this->uri->segment(3);
            $this->M_admin->status_pricelist($id);
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    //Load data untuk form edit price list
     function get_pricelist($id){
        $data=$this->M_admin->get_pricelist($id);
		echo json_encode($data);
     }

    //Update data price list ke database
     function update_pricelist(){
        if($this->session->userdata('role') == 1){
            $this->M_admin->update_pricelist();
        }{
            redirect(site_url('admin/logout'));
        }
     }

    //Load data untuk form edit deskripsi price list
     function get_pricelist_desc($id){
        $data=$this->M_admin->get_pricelist_desc($id);
		echo json_encode($data);
     }

    //Update data price list ke database
     function update_desc_pricelist(){
        if($this->session->userdata('role') == 1){
            $this->M_admin->update_desc_pricelist();
        }{
            redirect(site_url('admin/logout'));
        }
     }




    /**
     * Section : Client
     */
     
    //menampilkan halaman client
     function v_client(){
        if($this->session->userdata('role') == 1){
            $data['client'] = $this->M_admin->v_client();
            $this->load->view('admin/client/header',$data);
            $this->load->view('admin/default/sidebar');
            $this->load->view('admin/client/client');
            $this->load->view('admin/client/footer');
            $this->load->view('admin/client/custom_clientadmin');
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    //ambil data client untuk edit client
     function get_client($id){
        $data=$this->M_admin->get_client($id);
		echo json_encode($data);
     }

    //ambil data client untuk edit gallery client
     function get_gallery($id){
        $data=$this->M_admin->get_gallery($id);
        echo json_encode($data);
     }

    //menambah data client baru
     function add_client(){
        if($this->session->userdata('role') == 1){
            $path = "uploads/clients";

            $count = $this->db->query("SELECT count(*) AS countclient FROM client");

            $rowcount = $count->row();

            if($count->num_rows() > 0){
                $no = $rowcount->countclient + 1;
            }else{
                $no = 1;
            }

            if(!is_dir($path.'/Client-'.$no)){
                mkdir($path.'/Client-'.$no,0777,true);   
                $image_loc = $path.'/Client-'.$no;
            }
            $id = rand();
            $name = uniqid('image-',true);
            $config['upload_path'] = $path.'/Client-'.$no;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '10000';
            $config['file_ext_tolower'] = true;
            $config['file_name'] = str_replace('.','_',$name);

            $this->load->library('upload',$config);
            $finalpath = $config['upload_path'];
            if(file_exists($config['upload_path'].'/'.$config['file_name'])){
                $filename = $this->upload->data('file_name');
                    $this->M_admin->add_client($id,$filename,$image_loc);

                    $count_image = count($_FILES['gallery']['name']);
                    for($i=0;$i<$count_image;$i++){
                        if(!empty($_FILES['gallery']['name'])){
                            $_FILES['file']['name'] = $_FILES['gallery']['name'][$i];
                            $_FILES['file']['type'] = $_FILES['gallery']['type'][$i];
                            $_FILES['file']['tmp_name'] = $_FILES['gallery']['tmp_name'][$i];
                            $_FILES['file']['error'] = $_FILES['gallery']['error'][$i];
                            $_FILES['file']['size'] = $_FILES['gallery']['size'][$i];
                            
                            $galleryname = uniqid('image-',true);
                            $config['upload_path'] = $path.'/Client-'.$no;
                            $config['allowed_types'] = 'jpg|jpeg|png';
                            $config['max_size'] = '10000';
                            $config['file_ext_tolower'] = true;
                            $config['file_name'] = str_replace('.','_',$galleryname);

                            $this->load->library('upload',$config);
                            $this->upload->initialize($config);
                            if(!$this->upload->do_upload('file')){
                                $this->session->set_flashdata('error', 'Gagal upload data client :<br>Gagal upload gallery<br>'.$this->upload->display_errors());
                                redirect(site_url('admin/v_client'));
                            }else{
                                $gallery = $this->upload->data();
                                $uploadData[$i]['client_id'] = $id;
                                $uploadData[$i]['image_name'] = $gallery['file_name'];
                                $uploadData[$i]['image_loc'] = $finalpath;
                                $uploadData[$i]['created_at'] = date('Y-m-d H:i:s');
                                $uploadData[$i]['created_by'] = $this->session->userdata('username');
                                $uploadData[$i]['updated_at'] = date('Y-m-d H:i:s');
                                $uploadData[$i]['updated_by'] = $this->session->userdata('username');
                            }
                            $this->session->set_flashdata('error', 'Gagal upload data client.<br>'.'Data gallery kosong');
                            redirect(site_url('admin/v_client'));
                        }else{
                            $this->session->set_flashdata('error', 'Gagal upload data client.<br>'.'Data gallery kosong');
                            redirect(site_url('admin/v_client'));
                        }
                    }
                    if(!empty($uploadData)){
                        $this->M_admin->add_gallery_client($uploadData);
                        $this->session->set_flashdata('success', 'Berhasil upload data client.');
                        redirect(site_url('admin/v_client'));
                    }
            }else{
                if(!$this->upload->do_upload('cover_image')){
                    $this->session->set_flashdata('error', 'Gagal upload data client :<br>'.$this->upload->display_errors());
                    redirect(site_url('admin/v_client'));
                }else{
                    $filename = $this->upload->data('file_name');
                    $this->M_admin->add_client($id,$filename,$image_loc);

                    $count_image = count($_FILES['gallery']['name']);
                    for($i=0;$i<$count_image;$i++){
                        if(!empty($_FILES['gallery']['name'])){
                            $_FILES['file']['name'] = $_FILES['gallery']['name'][$i];
                            $_FILES['file']['type'] = $_FILES['gallery']['type'][$i];
                            $_FILES['file']['tmp_name'] = $_FILES['gallery']['tmp_name'][$i];
                            $_FILES['file']['error'] = $_FILES['gallery']['error'][$i];
                            $_FILES['file']['size'] = $_FILES['gallery']['size'][$i];
                            
                            $galleryname = uniqid('image-',true);
                            $config['upload_path'] = $path.'/Client-'.$no;
                            $config['allowed_types'] = 'jpg|jpeg|png';
                            $config['max_size'] = '10000';
                            $config['file_ext_tolower'] = true;
                            $config['file_name'] = str_replace('.','_',$galleryname);

                            $this->load->library('upload',$config);
                            $this->upload->initialize($config);
                            if(!$this->upload->do_upload('file')){
                                $this->session->set_flashdata('error', 'Gagal upload data client :<br>Gagal upload gallery<br>'.$this->upload->display_errors());
                                redirect(site_url('admin/v_client'));
                            }else{
                                $gallery = $this->upload->data();
                                $uploadData[$i]['client_id'] = $id;
                                $uploadData[$i]['image_name'] = $gallery['file_name'];
                                $uploadData[$i]['image_loc'] = $finalpath;
                                $uploadData[$i]['created_at'] = date('Y-m-d H:i:s');
                                $uploadData[$i]['created_by'] = $this->session->userdata('username');
                                $uploadData[$i]['updated_at'] = date('Y-m-d H:i:s');
                                $uploadData[$i]['updated_by'] = $this->session->userdata('username');
                            }
                        }else{
                            $this->session->set_flashdata('error', 'Gagal upload data client.<br>'.'Data gallery kosong');
                            redirect(site_url('admin/v_client'));
                        }
                    }
                    if(!empty($uploadData)){
                        $this->M_admin->add_gallery_client($uploadData);
                        $this->session->set_flashdata('success', 'Berhasil upload data client.');
                        redirect(site_url('admin/v_client'));
                    }
                }
            }
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    //mengupdate data client
     function update_client(){ 
        if($this->session->userdata('role') == 1){
            $searchid = $this->input->post('id');
            $sql = $this->db->query("SELECT ALL * FROM client WHERE id='".$searchid."' LIMIT 1");

            if($sql->num_rows() > 0){
                $rowclient = $sql->row();
            }else{
                $this->session->set_flashdata('error', 'Gagal edit data client :<br>Data tidak ada.');
                redirect(site_url('admin/v_client'));
            }
            if(empty($_FILES['cover_image']['name'])){
                $this->M_admin->update_client(0,0);
            }else{
                $id = uniqid('image-',true);

                $config['upload_path'] = $rowclient->image_loc;
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '100000';
                $config['file_ext_tolower'] = true;
                $config['file_name'] = str_replace('.','_',$id);
        
                $this->load->library('upload',$config);
                $image_loc = $config['upload_path'];
                if(file_exists($config['upload_path'].'/'.$config['file_name'])){
                    $filename = $this->upload->data('file_name');
                    $this->M_admin->update_client($image_loc,$filename);
                }else{
                    if(!$this->upload->do_upload('cover_image')){
                        $this->session->set_flashdata('error', 'Gagal upload data client :<br>'.$this->upload->display_errors());
                        redirect(site_url('admin/v_client'));
                    }else{
                        $filename = $this->upload->data('file_name');
                        $this->M_admin->update_client($image_loc,$filename);
                    }
                }
            }
        }else{
            redirect(site_url('admin/logout'));
        }
     }
    //mengupdate gallery client
     function update_gallery(){
        if($this->session->userdata('role') == 1){
            $searchid = $this->input->post('id');
            $sql = $this->db->query("SELECT ALL * FROM client_gallery WHERE id='$searchid'");

            if($sql->num_rows() > 0){
                $rowgallery = $sql->row();
            }else{
                $this->session->set_flashdata('error', 'Gagal edit data gallery client :<br>Data tidak ada.');
                redirect(site_url('admin/v_client'));
            }
            $id = uniqid('image-',true);

            $config['upload_path'] = $rowgallery->image_loc;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '100000';
            $config['file_ext_tolower'] = true;
            $config['file_name'] = str_replace('.','_',$id);
    
            $this->load->library('upload',$config);
            $image_loc = $config['upload_path'];
            if(file_exists($config['upload_path'].'/'.$config['file_name'])){
                $filename = $this->upload->data('file_name');
                $this->M_admin->update_gallery($image_loc,$filename);
                $this->session->set_flashdata('success', 'Berhasil upload data gallery client.');
                redirect(site_url('admin/v_client'));
            }else{
                if(!$this->upload->do_upload('image_name')){
                    $this->session->set_flashdata('error', 'Gagal upload data gallery client :<br>'.$this->upload->display_errors());
                    redirect(site_url('admin/v_client'));
                }else{
                    $filename = $this->upload->data('file_name');
                    $this->M_admin->update_gallery($image_loc,$filename);
                    $this->session->set_flashdata('success', 'Berhasil upload data gallery client.');
                    redirect(site_url('admin/v_client'));
                }
            }
        }else{
            redirect(site_url('admin/logout'));
        }

     }

    /** 
     * Section : promo
     */

    //Load halaman promo
     function v_promo(){
        if($this->session->userdata('role') == 1){
            $data['promo'] = $this->M_admin->v_promo();
            $this->load->view('admin/promo/header',$data);
            $this->load->view('admin/default/sidebar');
            $this->load->view('admin/promo/promo');
            $this->load->view('admin/promo/footer');
            $this->load->view('admin/promo/custom_promo');
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    //Tambah data promo
     function upload_promo(){
        if($this->session->userdata('role') == 1){
            $id = uniqid('image-',true);

            $config['upload_path'] = './uploads/promo-package';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '10000';
            $config['file_ext_tolower'] = true;
            $config['file_name'] = str_replace('.','_',$id);
    
            $this->load->library('upload',$config);
            
            if(file_exists($config['upload_path'].'/'.$config['file_name'])){
                $filename = $this->upload->data('file_name');
                $this->M_admin->upload_promo($filename);
                $this->session->set_flashdata('success', 'Berhasil upload data promo.');
                redirect(site_url('admin/v_promo'));
            }else{
                if(!$this->upload->do_upload('nama_image')){
                    $this->session->set_flashdata('error', 'Gagal upload data promo :<br>'.$this->upload->display_errors());
                    redirect(site_url('admin/v_promo'));
                }else{
                    $filename = $this->upload->data('file_name');
                    $this->M_admin->upload_promo($filename);
                    $this->session->set_flashdata('success', 'Berhasil upload data promo.');
                    redirect(site_url('admin/v_promo'));
                }
                }

        }else{
            redirect(site_url('admin/logout'));
        }
        
     }
     
    //ambil data promo untuk form edit
     function get_promo($id){
        $data=$this->M_admin->get_promo($id);
		echo json_encode($data);
     }
    
    //update data promo ke database
     function update_promo(){
        if($this->session->userdata('role') == 1){
            if(empty($_FILES['nama_image']['name'])){
                $this->M_admin->update_promo(0);
            }else{
                $id = uniqid('image-',true);

                $config['upload_path'] = 'uploads/promo-package';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '10000';
                $config['file_ext_tolower'] = true;
                $config['file_name'] = str_replace('.','_',$id);
        
                $this->load->library('upload',$config);
                
                if(file_exists($config['upload_path'].'/'.$config['file_name'])){
                    $filename = $this->upload->data('file_name');
                    $this->M_admin->update_promo($filename);
                    $this->session->set_flashdata('success', 'Berhasil upload data promo.');
                    redirect(site_url('admin/v_promo'));
                }else{
                    if(!$this->upload->do_upload('nama_image')){
                        $this->session->set_flashdata('error', 'Gagal upload data promo :<br>'.$this->upload->display_errors());
                        redirect(site_url('admin/v_promo'));
                    }else{
                        $filename = $this->upload->data('file_name');
                        $this->M_admin->update_promo($filename);
                        $this->session->set_flashdata('success', 'Berhasil upload data promo.');
                        redirect(site_url('admin/v_promo'));
                    }
                }
            }
            

        }else{
            redirect(site_url('admin/logout'));
        }
        
     }
    
    //delete promo
     function delete_promo($id){
        if($this->session->userdata('role') == 1){
            $this->M_admin->delete_promo($id);
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    /**
     * Section : career
     */
    
    //Load halaman career
     function v_career(){
        if($this->session->userdata('role') == 1){
            $data['career'] = $this->M_admin->get_career();
            $this->load->view('admin/career/header',$data);
            $this->load->view('admin/default/sidebar');
            $this->load->view('admin/career/career');
            $this->load->view('admin/career/footer');
            $this->load->view('admin/career/custom_career');
        }else{
            redirect(site_url('admin/logout'));
        }
     }


    //tambah data career ke database
     function add_career(){
        if($this->session->userdata('role') == 1){
            $this->M_admin->add_career();
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    //ambil data career dari database
     function get_career_one($id){
        $data=$this->M_admin->get_career_one($id);
		echo json_encode($data);
     }

    //update data career
     function update_career(){
        if($this->session->userdata('role') == 1){
            $this->M_admin->update_career();
        }{
            redirect(site_url('admin/logout'));
        }

     }
    //delete data career dari database
     function delete_career($id){
        if($this->session->userdata('role') == 1){
            $this->M_admin->delete_career($id);
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    /**
     * Section : Vendor
     */

    //Load halaman vendor
     function v_vendor(){
        if($this->session->userdata('role') == 1){
            $data['vendor'] = $this->M_admin->v_vendor();
            $this->load->view('admin/vendor-list/header',$data);
            $this->load->view('admin/default/sidebar');
            $this->load->view('admin/vendor-list/vendor-list');
            $this->load->view('admin/vendor-list/footer');
            $this->load->view('admin/vendor-list/custom_vendoradmin');
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    //Tambah vendor
     function add_vendor(){
         if($this->session->userdata('role') == 1){
            $this->M_admin->add_vendor();
         }else{
            redirect(site_url('admin/logout'));
         }
     }

    //ambil data vendor dari database buat form edit
     function get_vendor($id){
        $data=$this->M_admin->get_vendor($id);
		echo json_encode($data);
     }

    //Edit vendor
     function edit_vendor(){
         if($this->session->userdata('role') == 1){
            $this->M_admin->edit_vendor();
         }else{
            redirect(site_url('admin/logout'));
         }
     }

    //Delete vendor
     function delete_vendor($id){
        if($this->session->userdata('role') == 1){
            $this->M_admin->delete_vendor($id);
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    /**
     * Section : Blog
     */

    //Load halaman blog
     function v_blog(){
        $data['blog'] = $this->M_admin->v_blog();
        $this->load->view('admin/blog/header',$data);
        $this->load->view('admin/default/sidebar');
        $this->load->view('admin/blog/blog');
        $this->load->view('admin/blog/footer');
        $this->load->view('admin/blog/custom_blog');
     }

     /*function uploadFiles(){
        $this->load->view('ckfinder/config');
     }*/

    //Add entry blog
     function add_blog(){
        if($this->session->userdata('role') == 1){
            if($this->input->post('add_type') == 1){
                $path = "uploads/blog/wedding-preparation";
            }else if($this->input->post('add_type') == 2){
                $path = "uploads/blog/wedding-ideas";
            }else if($this->input->post('add_type') == 3){
                $path = "uploads/blog/honeymoon-travel";
            }else{
                $this->session->set_flashdata('error', 'Gagal upload post baru.<br>'.'Kategori belum dipilih.');
                redirect(site_url('admin/v_blog'));
            }

            $count = $this->db->query("SELECT count(id) AS maxpost FROM blog");

            $rowcount = $count->row();

            if($count->num_rows() > 0){
                $no = $rowcount->maxpost + 1;
            }else{
                $no = 1;
            }

            if(!is_dir($path.'/blog-'.$no)){
                mkdir($path.'/blog-'.$no,0777,true);
            }
               
            $image_loc = $path.'/blog-'.$no;
            $id = rand();
            $name = uniqid('image-',true);
            $config['upload_path'] = $path.'/blog-'.$no;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '10000';
            $config['file_ext_tolower'] = true;
            $config['file_name'] = str_replace('.','_',$name);

            $this->load->library('upload',$config);
            $finalpath = $config['upload_path'];
            if(file_exists($config['upload_path'].'/'.$config['file_name'])){
                $filename = $this->upload->data('file_name');
                    $this->M_admin->add_blog($id,$filename,$image_loc);
            }else{
                if(!$this->upload->do_upload('add_cover_image')){
                    $this->session->set_flashdata('error', 'Gagal upload data client :<br>'.$this->upload->display_errors());
                    redirect(site_url('admin/v_blog'));
                }else{
                    $filename = $this->upload->data('file_name');
                    $this->M_admin->add_blog($id,$filename,$image_loc);
                }
            }
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    //get data for edit form blog
     function get_blog_one($id){
        $data=$this->M_admin->get_blog_one($id);
		echo json_encode($data);
     }
    //update entry blog
     function update_blog(){
        if($this->session->userdata('role') == 1){
            $searchid = $this->input->post('edit_id');
            $sql = $this->db->query("SELECT ALL * FROM blog WHERE id='".$searchid."' LIMIT 1");

            if($sql->num_rows() > 0){
                $rowblog = $sql->row();
            }else{
                $this->session->set_flashdata('error', 'Gagal edit post blog :<br>Data tidak ada.');
                redirect(site_url('admin/v_blog'));
            }
            if(empty($_FILES['edit_cover_image']['name'])){
                $this->M_admin->update_blog(0,0);
            }else{
                $id = uniqid('image-',true);

                $config['upload_path'] = $rowblog->image_loc;
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '100000';
                $config['file_ext_tolower'] = true;
                $config['file_name'] = str_replace('.','_',$id);
        
                $this->load->library('upload',$config);
                $image_loc = $config['upload_path'];
                if(file_exists($config['upload_path'].'/'.$config['file_name'])){
                    $filename = $this->upload->data('file_name');
                    $this->M_admin->update_blog($image_loc,$filename);
                }else{
                    if(!$this->upload->do_upload('edit_cover_image')){
                        $this->session->set_flashdata('error', 'Gagal upload post blog :<br>'.$this->upload->display_errors());
                        redirect(site_url('admin/v_blog'));
                    }else{
                        $filename = $this->upload->data('file_name');
                        $this->M_admin->update_blog($image_loc,$filename);
                    }
                }
            }
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    //delete slider
     function delete_blog(){
        if($this->session->userdata('role') == 1){
            $this->M_admin->delete_blog();
        }else{
            redirect(site_url('admin/logout'));
        }
     }

    //Load halaman insert blog
     /*function v_insert_blog(){
        $this->load->view('admin/blog/header');
        $this->load->view('admin/default/sidebar');
        $this->load->view('admin/blog/insert_new');
        $this->load->view('admin/blog/footer');
        $this->load->view('admin/blog/custom_blog');
     }*/
}
?>