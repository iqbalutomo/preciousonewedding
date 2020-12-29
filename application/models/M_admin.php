<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{

    
	public function __construct()
	{
		parent::__construct();
        $this->load->database();
        date_default_timezone_set("Asia/Jakarta"); 
        ini_set('max_file_uploads', 50);
        ini_set('upload_max_filesize', 40);
        ini_set('post_max_size', 40);
    }

    /** 
     * Section : User
     */

    //memanggil tabel user dari database
     function v_user(){
         $sql = $this->db->query("SELECT ALL id, username, email, nama, role, is_active, created_at, updated_at, created_by, updated_by FROM user ORDER BY updated_at DESC");

         return $sql->result();
     }

    //menambah data ke tabel user
     function c_user(){
         $password = $this->input->post('password');
         $passconf = $this->input->post('passconf');

         if ($password != $passconf){
             $this->session->set_flashdata('error', 'Password dan konfirmasinya tidak sama.');
             redirect('admin/v_user');
         }else{
             $newuser = array(
                 'username' => $this->input->post('username'),
                 'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                 'email' => $this->input->post('email'),
                 'nama' => $this->input->post('nama'),
                 'role' => $this->input->post('role'),
                 'is_active' => '1',
                 'created_at' => date('y-m-d H:i:s'),
                 'created_by' => $this->session->userdata('username'),
                 'updated_at' => date('y-m-d H:i:s'),
                 'updated_by' => $this->session->userdata('username')
             );
    
             $this->db->insert('user',$newuser);

             redirect('admin/v_user');
         }
     }

    //mengubah status aktif/tidak aktif akun user
     function status_user($id){
        $user = $this->db->query("SELECT ALL username, is_active FROM user WHERE id='$id'");
        $current_user = $user->row();
        if($user->num_rows() == 1){
            $now = date('Y-m-d H:i:s');
            $sess_user = $this->session->userdata('username');
            if($current_user->is_active == 1){
                $this->db->query("UPDATE user SET is_active='0', updated_at='$now', updated_by='$sess_user' WHERE id='$id' AND username='$current_user->username'");
                $this->session->set_flashdata('success','Berhasil mengubah status User '.$current_user->username.' menjadi tidak aktif');
                redirect(site_url('admin/v_user'));
            }else{
                $this->db->query("UPDATE user SET is_active='1', updated_at='$now', updated_by='$sess_user' WHERE id='$id' AND username='$current_user->username'");
                $this->session->set_flashdata('success','Berhasil mengubah status User '.$current_user->username.' menjadi aktif');
                redirect(site_url('admin/v_user'));
            }
        }else{
            $this->session->set_flashdata('error','Gagal mengubah status User.'.$current_user->username.'<br>Data tidak ada di database.');
            redirect(site_url('admin/v_user'));
        }
     }

    //ambil user dari database untuk form edit
     function get_user($id){
        return $this->db->query("SELECT ALL  id, username, email, nama, role FROM user WHERE id='$id'")->result();
     }

    //update user
     function update_user(){
        $id = $this->input->post('id');
        $user = $this->db->query("SELECT ALL username FROM user WHERE id='$id'");
        $current_user = $user->row();
        if($user->num_rows() == 1){
            //$username = $this->input->post('username');
            $password = $this->input->post('password');
            $passconf = $this->input->post('passconf');
            $email = $this->input->post('email');
            $nama = $this->input->post('nama');
            $role = $this->input->post('role');
            $now = date('Y-m-d H:i:s');
            $sess_user = $this->session->userdata('username');

            if($password != null){
                if($passconf != null){
                    if($password == $passconf){
                        $hash = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                        if($current_user->username == $this->session->userdata('username')){
                            //update data disini
                            $this->db->query("UPDATE user SET password='$hash', email='$email', nama='$nama', role='$role', updated_at='$now', updated_by='$sess_user' WHERE id='$id' AND username='$current_user->username'");

                            //abis update data, update juga sessionnya
                            $data = array(
                                'email' => $email,
                                'nama' => $nama,
                                'role' => $role,
                                'updated_at' => $hash,
                                'updated_by' => $sess_user
                            );
                            $this->session->set_userdata($data);
                            $this->session->set_flashdata('success','Berhasil mengupdate data User '.$current_user->username.'.');
                            redirect(site_url('admin/v_user'));
                            return true;
                        }else{
                          //update data disini
                          $this->db->query("UPDATE user SET password='$hash', email='$email', nama='$nama', role='$role', updated_at='$now', updated_by='$sess_user' WHERE id='$id' AND username='$current_user->username'");  
                          $this->session->set_flashdata('success','Berhasil mengupdate data User '.$current_user->username.'.');
                          redirect(site_url('admin/v_user'));
                          return false;
                        }    
                    }else{
                        $this->session->set_flashdata('error','Gagal mengupdate data User.'.$current_user->username.'<br>Konfirmasi password salah.');
                        redirect(site_url('admin/v_user'));
                    }               
                }else{
                    $this->session->set_flashdata('error','Gagal mengupdate data User.'.$current_user->username.'<br>Konfirmasi password kosong.');
                    redirect(site_url('admin/v_user'));
                }
            }else{
                if($current_user->username == $this->session->userdata('username')){
                    //update data disini
                    $this->db->query("UPDATE user SET email='$email', nama='$nama', role='$role', updated_at='$now', updated_by='$sess_user' WHERE id='$id' AND username='$current_user->username'");

                    //abis update data, update juga sessionnya
                    $data = array(
                        'email' => $email,
                        'nama' => $nama,
                        'role' => $role,
                        'updated_at' => $hash,
                        'updated_by' => $sess_user
                    );
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('success','Berhasil mengupdate data User '.$current_user->username.'.');
                    redirect(site_url('admin/v_user'));
                    return true;
                }else{
                  //update data disini
                  $this->db->query("UPDATE user SET email='$email', nama='$nama', role='$role', updated_at='$now', updated_by='$sess_user' WHERE id='$id' AND username='$current_user->username'");  
                  $this->session->set_flashdata('success','Berhasil mengupdate data User '.$current_user->username.'.');
                  redirect(site_url('admin/v_user'));
                  return false;
                }
            }
        }else{
            $this->session->set_flashdata('error','Gagal mengupdate data User.'.$current_user->username.'<br>Data tidak ada di database.');
            redirect(site_url('admin/v_user'));
        }
     }

    /**
     * Section : price_list
     */

    //menampilkan price-list di admin dari database
     function v_price(){
         $sql = $this->db->query('SELECT ALL id, nama, harga, desc1, desc2, desc3, desc4, desc5, desc6, created_at, is_active, created_by, updated_at, updated_by FROM price_list ORDER BY updated_at DESC');
         return $sql->result();
     }

    //mengubah status aktif/tidak aktif price list
     function status_pricelist($id){
        $pricelist = $this->db->query("SELECT ALL nama, is_active FROM price_list WHERE id='$id'");

        if($pricelist->num_rows() == 1){
            $current_pricelist = $pricelist->row();
            if($current_pricelist->is_active == 1){
                $this->db->query("UPDATE price_list SET is_active='0' WHERE id='$id' AND nama='$current_pricelist->nama'");
                $this->session->set_flashdata('success','Berhasil mengubah status Price list : '.$current_pricelist->nama.' menjadi tidak aktif');
                redirect(site_url('admin/v_pricelist'));
            }else{
                $this->db->query("UPDATE price_list SET is_active='1' WHERE id='$id' AND nama='$current_pricelist->nama'");
                $this->session->set_flashdata('success','Berhasil mengubah status Price list : '.$current_pricelist->nama.' menjadi aktif');
                redirect(site_url('admin/v_pricelist'));
            }
        }else{
            $this->session->set_flashdata('error','Gagal mengubah status Price list : '.$current_pricelist->nama);
            redirect(site_url('admin/v_pricelist'));
        }
     }

    //ambil data pricelist berdasarkan id untuk form edit
     function get_pricelist($id){
        $sql = $this->db->query("SELECT ALL id, nama, harga FROM price_list WHERE id='$id'");
        return $sql->result();
     }

    //update data pricelist di database
     function update_pricelist(){
        $id = $this->input->post('id');
        $price_list = $this->db->query("SELECT ALL * FROM price_list WHERE id='$id'");
        $current_price = $price_list->row();
        if($price_list->num_rows() > 0){
            $nama = $this->input->post('nama');
            $harga = $this->input->post('harga');
            $now = date('Y-m-d H:i:s');
            $sess_user = $this->session->userdata('username');
            $this->db->query("UPDATE price_list SET nama='$nama', harga='$harga', updated_at='$now', updated_by='$sess_user' WHERE id='$id'");
            $this->session->set_flashdata('success','Berhasil melakukan update price list :'.$current_price->nama);
            redirect(site_url('admin/v_pricelist'));
        }else{
            $this->session->set_flashdata('error','Gagal mengubah data price list : .'.$current_price->nama.'<br>Data tidak ada di database');
            redirect(site_url('admin/v_pricelist')); 
        }
     }

    //ambil data deskripsi pricelist berdasarkan id untuk form edit
     function get_pricelist_desc($id){
        $sql = $this->db->query("SELECT ALL id, nama, desc1, desc2, desc3, desc4, desc5, desc6 FROM price_list WHERE id='$id'");
        return $sql->result();
     }

    //update data desc pricelist di database
     function update_desc_pricelist(){
        $id = $this->input->post('id');
        $price_list = $this->db->query("SELECT ALL * FROM price_list WHERE id='$id'");
        $current_price = $price_list->row();
        if($price_list->num_rows() > 0){
            $desc1 = $this->input->post('desc1');            
            $desc2 = $this->input->post('desc2');            
            $desc3 = $this->input->post('desc3');            
            $desc4 = $this->input->post('desc4');            
            $desc5 = $this->input->post('desc5');            
            $desc6 = $this->input->post('desc6');     
            $now = date('Y-m-d H:i:s');
            $sess_user = $this->session->userdata('username');       
            $this->db->query("UPDATE price_list SET desc1='$desc1', desc2='$desc2', desc3='$desc3', desc4='$desc4', desc5='$desc5', desc6='$desc6', updated_at='$now', updated_by='$sess_user' WHERE id='$id'");
            $this->session->set_flashdata('success','Berhasil melakukan update untuk deskripsi price list :'.$current_price->nama);
            redirect(site_url('admin/v_pricelist'));
        }else{
            $this->session->set_flashdata('error','Gagal mengubah deskripsi price list : '.$current_price->nama.'<br>Data tidak ada di database');
            redirect(site_url('admin/v_pricelist')); 
        }
     }

    /**
     * Section : slider
     */

    //menampilkan data slider
     function v_slider(){
        return $this->db->query("SELECT ALL id, nama_slider, deskripsi, nama_image, created_at, created_by, updated_at, updated_by FROM slider ORDER BY updated_at DESC")->result();
     }
    
    //menambahkan data slider baru
     function upload_slider($filename){
        $sql = $this->db->query("SELECT max(id) AS countid FROM slider");
        
        if($sql->num_rows() <= 0){
            $id = 1;
        }else{
            $rowslider = $sql->row();
            $id = $rowslider->countid + 1;
        }
        $data = array(
            'id' => $id,
            'nama_slider' => $this->input->post('nama_slider'),
            'deskripsi' => $this->input->post('deskripsi'),
            'nama_image' => $filename,
            'created_at' => date('y-m-d H:i:s'),
            'created_by' => $this->session->userdata('username'),
            'updated_at' => date('y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('username')
        );

        $this->db->insert('slider',$data);
     }

    //menampilkan data slider berdasarkan ID
     function get_slider($id){
        return $this->db->query("SELECT ALL id, nama_slider, deskripsi, nama_image, created_at, created_by, updated_at, updated_by FROM slider WHERE id='$id'")->result();
     }

    //mengupdate data slider
     function update_slider($filename){
        $id = $this->input->post('id');
        $sql = $this->db->query("SELECT ALL * FROM slider WHERE id='$id' LIMIT 1");
        $row = $sql->row();

        if($sql->num_rows() > 0){
            $nama_slider = $this->input->post('nama_slider');
            $deskripsi = $this->input->post('deskripsi');
            $now = date('Y-m-d H:i:s');
            $sess_user = $this->session->userdata('username');
            if($filename == "0"){
                $this->db->query("UPDATE slider SET nama_slider='$nama_slider', deskripsi='$deskripsi', updated_at='$now', updated_by='$sess_user' WHERE id='$id'");
                $this->session->set_flashdata('success','Berhasil update slider '.$row->nama_slider);
                redirect(site_url('admin/v_slider')); 
        }else{
                unlink("uploads/slider/".$row->nama_image);
                $this->db->query("UPDATE slider SET nama_slider='$nama_slider', deskripsi='$deskripsi', nama_image='$filename', updated_at='$now', updated_by='$sess_user' WHERE id='$id'");
                $this->session->set_flashdata('success','Berhasil update slider '.$row->nama_slider);
                redirect(site_url('admin/v_slider')); 
                
            }
        }else{
            $this->session->set_flashdata('error','Gagal update slider '.$row->nama_slider.'!<br>Data tidak ada.');
            redirect(site_url('admin/v_slider')); 
        }
     }

    //delete data slider
     function delete_slider($id){
        $sql = $this->db->query("SELECT ALL * FROM slider WHERE id='$id' LIMIT 1");
        $row = $sql->row();

        //if query exists then delete data in both database and folder (using the name from the db)
        //might as well do the trick for update too
        if($sql->num_rows() > 0){
            unlink("uploads/slider/".$row->nama_image);
            $this->db->query("DELETE FROM slider WHERE id='$id'");
            $this->session->set_flashdata('success','Berhasil menghapus slider '.$row->nama_slider);
            redirect(site_url('admin/v_slider'));
        }else{
            $this->session->set_flashdata('error','Gagal menghapus slider '.$row->nama_slider.'!<br>Data tidak ada.');
            redirect(site_url('admin/v_slider'));
        }
     }
         
        
    
    /**
     * Section : promo
     */
    //menampilkan data promo
     function v_promo(){
        return $this->db->query("SELECT ALL id, nama_promo, nama_image, created_at, created_by, updated_at, updated_by FROM promo_package ORDER BY updated_at DESC")->result();
     }

    //menambahkan data promo baru
     function upload_promo($filename){
        $data = array(
            'nama_promo' => $this->input->post('nama_promo'),
            'nama_image' => $filename,
            'created_at' => date('y-m-d H:i:s'),
            'created_by' => $this->session->userdata('username'),
            'updated_at' => date('y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('username')
        );

        $this->db->insert('promo_package',$data);
     }
    
    //menampilkan data promo berdasarkan ID
     function get_promo($id){
        return $this->db->query("SELECT ALL id, nama_promo, nama_image, created_at, created_by, updated_at, updated_by FROM promo_package WHERE id='$id'")->result();
     }

    //mengupdate data promo
     function update_promo($filename){
        $id = $this->input->post('id');
        $sql = $this->db->query("SELECT ALL * FROM promo_package WHERE id='$id' LIMIT 1");
        $row = $sql->row();

        if($sql->num_rows() > 0){
            $nama_promo = $this->input->post('nama_promo');
            $now = date('Y-m-d H:i:s');
            $sess_user = $this->session->userdata('username');
            if($filename == "0"){
                $this->db->query("UPDATE promo_package SET nama_promo='$nama_promo', updated_at='$now', updated_by='$sess_user' WHERE id='$id'");    
                $this->session->set_flashdata('success','Berhasil update promo '.$row->nama_promo);
            }else{
                unlink("uploads/promo-package/".$row->nama_image);
                $this->db->query("UPDATE promo_package SET nama_promo='$nama_promo', nama_image='$filename', updated_at='$now', updated_by='$sess_user' WHERE id='$id'");    
                $this->session->set_flashdata('success','Berhasil update promo '.$row->nama_promo);
            }
            
            redirect(site_url('admin/v_promo')); 
        }else{
            $this->session->set_flashdata('error','Gagal update promo '.$row->nama_promo.'!<br>Data tidak ada.');
            redirect(site_url('admin/v_promo')); 
        }
     }

    //delete data promo
     function delete_promo($id){
        $sql = $this->db->query("SELECT ALL * FROM promo_package WHERE id='$id' LIMIT 1");
        $row = $sql->row();

        //if query exists then delete data in both database and folder (using the name from the db)
        //might as well do the trick for update too
        if($sql->num_rows() > 0){
            unlink("uploads/promo-package/".$row->nama_image);
            $this->db->query("DELETE FROM promo_package WHERE id='$id'");
            $this->session->set_flashdata('success','Berhasil menghapus promo '.$row->nama_promo);
            redirect(site_url('admin/v_promo'));
        }else{
            $this->session->set_flashdata('error','Gagal menghapus promo '.$row->nama_promo.'!<br>Data tidak ada.');
            redirect(site_url('admin/v_promo'));
        }
     }

    /**
     * Section : client
     */
    //ambil data client dari database
     function v_client(){
        return $this->db->query("SELECT ALL id, client_name, wedding_date, lokasi, testimonial, embed_youtube, cover_image, created_at, created_by, updated_at, updated_by FROM client ORDER BY updated_at DESC")->result();
     }

    //ambil data client buat form edit
     function get_client($id){
        return $this->db->query("SELECT ALL id, client_name, wedding_date, lokasi, testimonial, embed_youtube, cover_image, created_at, created_by, updated_at, updated_by FROM client WHERE id='$id'")->result();
     }

    //ambil data gallery client buat form edit
     function get_gallery($id){
        return $this->db->query("SELECT ALL id, client_id, image_name, image_loc, created_at, created_by, updated_at, updated_by FROM client_gallery WHERE client_id='$id'")->result();
     }

    //update data gallery client ke database
     function update_gallery($image_loc,$filename){
        $id = $this->input->post('id');
        $sql = $this->db->query("SELECT ALL * FROM client_gallery WHERE id='$id' LIMIT 1");
        $row = $sql->row();

        if($sql->num_rows() > 0){
            $now = date('Y-m-d H:i:s');
            $sess_user = $this->session->userdata('username');
            unlink($image_loc.'/'.$row->image_name);
            $this->db->query("UPDATE client_gallery SET image_name='$filename', updated_at='$now', updated_by='$sess_user' WHERE id='$id' AND client_id='$row->client_id'");
            $this->session->set_flashdata('success','Berhasil update gallery client '.$row->image_name);
            redirect(site_url('admin/v_client')); 
        }else{
            $this->session->set_flashdata('error','Gagal update gallery client '.$row->image_name.'!<br>Data tidak ada.');
            redirect(site_url('admin/v_client')); 
        }
     }

    //update data client ke database
     function update_client($image_loc,$filename){
        $id = $this->input->post('id');
        $sql = $this->db->query("SELECT ALL * FROM client WHERE id='$id' LIMIT 1");
        $row = $sql->row();

        if($sql->num_rows() > 0){
            $client_name = $this->input->post('client_name');
            $wedding_date = $this->input->post('wedding_date');
            $lokasi = $this->input->post('lokasi');
            $testimonial = $this->input->post('testimonial');
            $embed_youtube = $this->input->post('embed_youtube');
            $now = date('Y-m-d H:i:s');
            $sess_user = $this->session->userdata('username');
            if($filename == "0"){
                $this->db->query("UPDATE client SET client_name='$client_name', wedding_date='$wedding_date', lokasi='$lokasi', testimonial='$testimonial', embed_youtube='$embed_youtube', updated_at='$now', updated_by='$sess_user' WHERE id='$id'");
                $this->session->set_flashdata('success','Berhasil update client '.$filename);
                redirect(site_url('admin/v_client')); 
            }else{
                unlink($image_loc.'/'.$row->cover_image);
                $this->db->query("UPDATE client SET client_name='$client_name', wedding_date='$wedding_date', lokasi='$lokasi', testimonial='$testimonial', embed_youtube='$embed_youtube', cover_image='$filename', updated_at='$now', updated_by='$sess_user' WHERE id='$id'");
                $this->session->set_flashdata('success','Berhasil update client '.$filename);
                redirect(site_url('admin/v_client')); 
            }
        }else{
            $this->session->set_flashdata('error','Gagal update client '.$row->cover_image.'!<br>Data tidak ada.');
            redirect(site_url('admin/v_client')); 
        }
     }

    //tambahkan data client ke database
     function add_client($id,$cover_image,$image_loc){ //Last work
        $data = array(
            'id' => $id,
            'client_name' => $this->input->post('client_name'),
            'wedding_date' => $this->input->post('wedding_date'),
            'lokasi' => $this->input->post('location'),
            'testimonial' => $this->input->post('testimonial'),
            'embed_youtube' => $this->input->post('video'),
            'cover_image' => $cover_image,
            'image_loc' => $image_loc,
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('username'),
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('username')
        );

        $this->db->insert('client', $data);
     }
    //tambahkan data gallery client ke database
     function add_gallery_client($data = array()){

        $this->db->insert_batch('client_gallery',$data);
     }

    /**
     * Section : vendor
     */

    //ambil data vendor dari database
     function v_vendor(){
         return $this->db->query("SELECT ALL id, nama, kategori, created_at, created_by, updated_at, updated_by FROM vendor ORDER BY updated_at DESC, kategori ASC")->result();
     }

    //add vendor baru
     function add_vendor(){
        $data = array(
            'nama' => $this->input->post('add_vendor'),
            'kategori' => $this->input->post('add_kategori'),
            'created_at' => date('y-m-d H:i:s'),
            'created_by' => $this->session->userdata('username'),
            'updated_at' => date('y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('username')
        );

        $this->db->insert('vendor',$data);
        $this->session->set_flashdata('success','Berhasil menambah vendor : '.$this->input->post('add_vendor'));
        redirect(site_url('admin/v_vendor')); 
     }

    //ambil data vendor untuk form edit
     function get_vendor($id){
        return $this->db->query("SELECT ALL id, nama, kategori, created_at, created_by, updated_at, updated_by FROM vendor WHERE id='$id'")->result();
     }

    //mengupdate data vendor
     function edit_vendor(){
        $id = $this->input->post('id');
        $sql = $this->db->query("SELECT ALL * FROM vendor WHERE id='$id' LIMIT 1");
        $row = $sql->row();

        if($sql->num_rows() > 0){
            $nama = $this->input->post('edit_vendor');
            $kategori = $this->input->post('edit_kategori');
            $now = date('Y-m-d H:i:s');
            $sess_user = $this->session->userdata('username');
            $this->db->query("UPDATE vendor SET nama='$nama', kategori='$kategori', updated_at='$now', updated_by='$sess_user' WHERE id='$id'");    
            $this->session->set_flashdata('success','Berhasil update vendor '.$row->nama);
            redirect(site_url('admin/v_vendor')); 
        }else{
            $this->session->set_flashdata('error','Gagal update vendor '.$row->nama.'!<br>Data tidak ada.');
            redirect(site_url('admin/v_vendor')); 
        }
     }
    
    //delete data vendor
     function delete_vendor($id){
        $sql = $this->db->query("SELECT ALL * FROM vendor WHERE id='$id' LIMIT 1");
        $row = $sql->row();

        if($sql->num_rows() > 0){
            $this->db->query("DELETE FROM vendor WHERE id='$id'");
            $this->session->set_flashdata('success','Berhasil menghapus vendor '.$row->nama);
            redirect(site_url('admin/v_vendor'));
        }else{
            $this->session->set_flashdata('error','Gagal menghapus vendor '.$row->nama.'!<br>Data tidak ada.');
            redirect(site_url('admin/v_vendor'));
        }
     }
    

    /**
     * Section : career
     */
    //ambil data career dari database
     function get_career(){
         return $this->db->query("SELECT ALL id, job_name, deadline, location, working_time, qualification, description, created_at, created_by, updated_at, updated_by description FROM career ORDER BY updated_at DESC")->result();
     }

    //add data career
     function add_career(){
        $job_name = $this->input->post('add_job_name');
        $deadline = $this->input->post('add_deadline');
        $location = $this->input->post('add_location');
        $working_time = $this->input->post('add_working_time');
        $qualification = $this->input->post('add_qualification');
        $description = $this->input->post('add_description');
        $now = date('Y-m-d H:i:s');
        $sess_user = $this->session->userdata('username');

        if($job_name == null){
            $this->session->set_flashdata('error','Gagal menambahkan career :'.$job_name.'!<br> Job name kosong.');
            redirect(site_url('admin/v_career'));
        }else if($deadline == null){
            $this->session->set_flashdata('error','Gagal menambahkan career :'.$job_name.'!<br> deadline kosong.');
            redirect(site_url('admin/v_career'));
        }else if($location == null){
            $this->session->set_flashdata('error','Gagal menambahkan career :'.$job_name.'!<br> lokasi kosong.');
            redirect(site_url('admin/v_career'));
        }else if($working_time == null){
            $this->session->set_flashdata('error','Gagal menambahkan career :'.$job_name.'!<br> working time kosong.');
            redirect(site_url('admin/v_career'));
        }else if($description == null){
            $this->session->set_flashdata('error','Gagal menambahkan career :'.$job_name.'!<br> deskripsi kosong.');
            redirect(site_url('admin/v_career'));
        }else{
            if(!($this->db->query("INSERT INTO career VALUES(NULL, '$job_name', '$deadline', '$location', '$working_time', '$qualification', '$description','$now','$sess_user','$now','$sess_user')"))){
                $this->session->set_flashdata('error','Gagal menambahkan career :'.$job_name.'!');
                redirect(site_url('admin/v_career'));
            }else{
                $this->session->set_flashdata('success','Berhasil menambahkan career :'.$job_name.'!');
                redirect(site_url('admin/v_career'));
            }
        }

     }

    //ambil data career dari db untuk form edit
     function get_career_one($id){
        return $this->db->query("SELECT ALL id, job_name, deadline, location, working_time, qualification, description FROM career WHERE id='$id'")->result();
     }

    //update data career
     function update_career(){
        $id = $this->input->post('edit_id');

        $sql = $this->db->query("SELECT ALL * FROM career WHERE id='$id' LIMIT 1");
        $row = $sql->row();

        if($sql->num_rows() > 0){
            $job_name = $this->input->post('edit_job_name');
            $deadline = $this->input->post('edit_deadline');
            $location = $this->input->post('edit_location');
            $working_time = $this->input->post('edit_working_time');
            $qualification = $this->input->post('edit_qualification');
            $description = $this->input->post('edit_description');
            $this->db->query("UPDATE career SET job_name='$job_name', deadline='$deadline', location='$location', working_time='$working_time', qualification='$qualification', description='$description' WHERE id='$id'");
            $this->session->set_flashdata('success','Berhasil update career '.$row->job_name);
            redirect(site_url('admin/v_career')); 
        }else{
            $this->session->set_flashdata('error','Gagal update career '.$row->job_name.'!<br>Data tidak ada.');
            redirect(site_url('admin/v_career')); 
        }


     }

    //delete career dari database
     function delete_career($id){
        $sql = $this->db->query("SELECT ALL * FROM career WHERE id='$id' LIMIT 1");
        if($sql->num_rows() > 0){
            $row = $sql->row();
            $this->db->query("DELETE FROM career WHERE id='$id'");
            $this->session->set_flashdata('success','Berhasil menghapus data career: '.$row->job_name);
            redirect(site_url('admin/v_career'));    
        }else{
            $this->session->set_flashdata('delete','Gagal menghapus data career: '.$row->job_name);
            redirect(site_url('admin/v_career'));    
        }
     }

    /**
     * Section : Blog
     */
    //ambil data dari database
     function v_blog(){
        return $this->db->query("SELECT id, judul, type, konten, created_at, created_by, updated_at, updated_by FROM blog ORDER BY updated_at DESC")->result();
     }

    //add blog entry
     function add_blog($id,$filename,$image_loc){
        $data = array(
            'id' => $id,
            'judul' => $this->input->post('add_judul'),
            'cover_image' => $filename,
            'image_loc' => $image_loc,
            'type' => $this->input->post('add_type'),
            'konten' => $this->input->post('add_konten'),
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('username'),
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('username')
        );
        $this->db->insert('blog', $data);
        $this->session->set_flashdata('success', 'Berhasil upload post : '.$this->input->post('add_judul'));
        redirect(site_url('admin/v_blog'));
     }

    //ambil data blog dari db untuk form edit
     function get_blog_one($id){
        return $this->db->query("SELECT ALL * FROM blog WHERE id='$id'")->result();
     }

    //update blog entry
     function update_blog($image_loc,$filename){
        $id = $this->input->post('edit_id');
        $sql = $this->db->query("SELECT ALL * FROM blog WHERE id='$id' LIMIT 1");
        $row = $sql->row();

        if($sql->num_rows() > 0){
            $judul = $this->input->post('edit_judul');
            //$type = $this->input->post('edit_type');
            $konten = $this->input->post('edit_konten');
            $now = date('Y-m-d H:i:s');
            $sess_user = $this->session->userdata('username');
            if($filename == "0"){
                $this->db->query("UPDATE blog SET judul='$judul', konten='$konten', updated_at='$now', updated_by='$sess_user' WHERE id='$id'");
                $this->session->set_flashdata('success','Berhasil update post '.$judul);
                redirect(site_url('admin/v_blog')); 
            }else{
                unlink($image_loc.'/'.$row->cover_image);
                $this->db->query("UPDATE blog SET judul='$judul', konten='$konten', cover_image='$filename', updated_at='$now', updated_by='$sess_user' WHERE id='$id'");
                $this->session->set_flashdata('success','Berhasil update post '.$judul);
                redirect(site_url('admin/v_blog')); 
            }
        }else{
            $this->session->set_flashdata('error','Gagal update post '.$row->cover_image.'!<br>Data tidak ada.');
            redirect(site_url('admin/v_blog')); 
        }
     }

    //delete data blog
     function delete_blog(){
        $id = $this->input->post('delete_id');
        $sql = $this->db->query("SELECT ALL * FROM blog WHERE id='$id' LIMIT 1");
        $row = $sql->row();

        //if query exists then delete data in both database and folder (using the name from the db)
        //might as well do the trick for update too
        if($sql->num_rows() > 0){
            if(unlink($row->image_loc.'/'.$row->cover_image)){
                if(rmdir($row->image_loc)){
                    $this->db->query("DELETE FROM blog WHERE id='$id'");
                    $this->session->set_flashdata('success','Berhasil menghapus post '.$row->judul);
                    redirect(site_url('admin/v_blog'));
                }else{
                    $this->session->set_flashdata('error','Gagal menghapus post '.$row->judul.'!<br>Gagal hapus folder.');
                    redirect(site_url('admin/v_blog'));
                }
            }else{
                $this->session->set_flashdata('error','Gagal menghapus post '.$row->judul.'!<br>Gagal hapus gambar.');
                redirect(site_url('admin/v_blog'));
            }     
        }else{
            $this->session->set_flashdata('error','Gagal menghapus post '.$row->judul.'!<br>Data tidak ada.');
            redirect(site_url('admin/v_blog'));
        }
     }
}