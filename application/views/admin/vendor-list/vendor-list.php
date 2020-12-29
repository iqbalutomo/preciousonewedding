	<!-- vendor -->
	<section id="vendor">
        <h6><?= $this->session->flashdata('success'); ?></h6>
        <h6><?= $this->session->flashdata('error'); ?></h6>
		<h5 class="center">DATA VENDOR</h5>
			<a href="#upload" class="waves-effect waves-light btn modal-trigger black"><i class="material-icons left">file_upload</i>upload</a>

			<!-- upload -->
			  <!-- Modal Structure -->
			  <div id="upload" class="modal">
			    <div class="modal-content">

			      <form action="<?=site_url('admin/add_vendor')?>" method="post">

			      	<div class="input-field">
			          <input id="add_vendor" name="add_vendor" type="text" class="validate" required="" aria-required="true">
			          <label for="add_vendor">Vendor Name</label>
			        </div>

                    <div class="input-field">
                        <select id="role" name="add_kategori" class="browser-default" required="" aria-required="true"> 
                            <option value="0" disabled selected>Kategori (Pilih Satu)</option>
                            <option value="1">Make Up & Gown</option>
                            <option value="2">Photo & Video</option>
                            <option value="3">Decoration</option>
                            <option value="4">Catering</option>
                            <option value="5">Entertainment</option>
                        </select>
                    </div>

			        <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPLOAD</button>

			      </form>
			    </div>
			  </div>
			<!-- end upload -->

				<table id="data" class="striped">
	        <thead>
	          <tr>
	              <th>ID</th>
	              <th>Vendor Name</th>
                  <th>Kategori</th>
	              <th>Option</th>
	          </tr>
	        </thead>

	        <tbody>
            <?php
            $no = 1;
            foreach ($vendor as $rowvendor) { ?>
	          <tr>
	            <td><?=$no++;?></td>
	            <td><?=$rowvendor->nama;?></td>
                <td><?php
                switch($rowvendor->kategori){
                    case 1:
                    ?>Make Up & Gown<?php
                    break;
                    case 2:
                    ?>Photo & Video<?php
                    break;
                    case 3:
                    ?>Decoration<?php
                    break;
                    case 4:
                    ?>Catering<?php
                    break;
                    case 5:
                    ?>Entertainment<?php
                    break;
                    default:
                    ?>Undefined<?php
                    break;
                }
                ?></td>
	            <td>
	            	<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
	            	<a href="#edit" onclick="loadFormEdit(<?=$rowvendor->id;?>)" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
	            	<a href="#delete" onclick="loadDeleteForm(<?=$rowvendor->id?>)" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
							</td>
	          </tr>
            <?php } ?>

	          
	        </tbody>
	    </table>
	    <!-- end table -->

	    <!-- modal edit -->
	    <div id="edit" class="modal">
		    <div class="modal-content">
		    	<h5 class="center">EDIT VENDOR MAKEUP & GOWN</h5>

		      <form action="<?=site_url('admin/edit_vendor');?>" method="post">
                <div id="form_edit">
                </div>
		      </form>
		    </div>
			</div>
	    <!-- end modal edit -->

			<!-- modal delete -->
			<div id="delete" class="modal">
		    <div class="modal-content">
		    	<h5 class="center">DELETE DATA</h5>
						<p>Anda yakin ingin menghapus vendor ini?</p>
						<div id="btn_delete"></div>
							
							</div>
					</div>
			</div>
			<!-- end modal delete -->
	    	
	    <!-- end makeup & gown -->
	</section>
	<!-- end slider -->