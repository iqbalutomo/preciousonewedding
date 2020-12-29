	<!-- client -->
	<section id="client">
		<table id="data-client" class="striped">
			<h6><?= $this->session->flashdata('success'); ?></h6>
			<h6><?= $this->session->flashdata('error'); ?></h6>
			<h5 class="center">DATA CLIENTS</h5>
			<a href="#upload" class="waves-effect waves-light btn modal-trigger black"><i class="material-icons left">file_upload</i>upload</a>

			<!-- upload -->
			  <!-- Modal Structure -->
			  <div id="upload" class="modal">
			    <div class="modal-content">
			    	<a href="#info" class="modal-trigger"><i class="material-icons">info_outline</i></a>
			    	<h5 class="center">INPUT DATA</h5>

			      <form action="<?=site_url('admin/add_client');?>" method="post" enctype="multipart/form-data">

			      	<div class="input-field">
			          <input id="client_name" name="client_name" type="text" class="validate" required="" aria-required="true">
			          <label for="client_name">Client Name</label>
			        </div>

			        <div class="input-field">
			          <input id="wedding_date" name="wedding_date" type="text" class="validate datepicker" required="" aria-required="true">
			          <label for="wedding_date">Wedding Date</label>
			        </div>

			        <div class="input-field">
			          <input id="location" name="location" type="text" class="validate" required="" aria-required="true">
			          <label for="location">Location</label>
			        </div>

			        <div class="input-field">
			          <textarea id="testimonial" name="testimonial" class="materialize-textarea validate" required="" aria-required="true"></textarea>
			          <label for="testimonial">Testimonial</label>
			        </div>

			        <div class="input-field">
			          <input id="video" name="video" type="text" class="validate" required="" aria-required="true">
			          <label for="video">Embed Video on Youtube</label>
			        </div>

							<div class="file-field input-field">
								<div class="btn precious-bgcolor">
									<span>COVER IMAGE</span>
									<input type="file" name="cover_image">
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" required="" aria-required="true">
								</div>
							</div>

							<div class="file-field input-field">
								<div class="btn precious-bgcolor">
									<span>GALLERY</span>
									<input type="file" name="gallery[]" multiple>
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" required="" aria-required="true">
								</div>
							</div>

			        <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPLOAD</button>

			      </form>
			    </div>
			  </div>
			<!-- end upload -->

			<!-- info -->
			<div id="info" class="modal">
			    <div class="modal-content">
			    	<h5 class="center">Instructions</h5>

			    	<p>Client Name 	:</p>
			    	<p>(example : Alice & Bob</p>
			    	<p>Wedding Date	:</p>
			    	<p>Tanggal Pernikahan client tersebut</p>
			    	<p>Location		:</p>
			    	<p>Lokasi pernikahan example : Balai Sudirman</p>
			    	<p>Testimonial	:</p>
			    	<p>testimonial dari client</p>
			    	<p>video 		:</p>
			    	<p>video client | ambil dari youtube dengan cara :</p>
			    	<p>1. login gmail account thepreciousonewedding@gmail.com</p>
			    	<p>2. Buka Youtube (pastikan sudah menggunakan account gmail thepreciousone</p>
			    	<p>3. cari video yang ingin diupload, lalu click videonya</p>
			    	<p>4. click kanan lalu pilih 'copy embed code'</p>
			    	<p>5. jika sudah paste kan dinote</p>
			    	<p>6. copy src-nya saja seperti ini : https://www.youtube.com/embed/6M78EWZlCvE</p>
			    	<p>7. jika sudah paste pada form Embed Video</p>
			    	<p>gallery		:</p>
			    	<p>Untuk mengupload gallery dengan cari satu persatu diupload</p>
			    	<p>format gallery :</p>
			    	<div class="box-info">
			    		type : JPEG(jpg) <br>
			    		width : FREE <br>
			    		height : 750 pixels <br>
			    		max-size : 5MB
			    	</div>

			    </div>
			  </div>
			<!-- end info -->

			<!-- table -->
	        <thead>
	          <tr>
	              <th>ID</th>
	              <th>Client Name</th>
	              <th>Wedding Date</th>
	              <th>Location</th>
	              <th>Option</th>
	          </tr>
	        </thead>

	        <tbody>
					<?php 
					$no = 1;
					foreach ($client as $rowclient) { ?>
	          <tr>
	            <td><?=$no++;?></td>
	            <td><?=$rowclient->client_name;?></td>
	            <td><?=$rowclient->wedding_date;?></td>
	            <td><?=$rowclient->lokasi;?></td>
	            <td>
	            	<!-- tips : ambil id-nya untuk mengedit, taro didalam a/button pakai href/target/onclick -->
	            	<a href="#edit" onclick="loadFormEdit(<?=$rowclient->id?>)" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
	            	<a href="#edit-image" onclick="loadFormGallery(<?=$rowclient->id?>)" class="waves-effect waves-light btn-small modal-trigger gold-bgcolor"><i class="material-icons left">border_color</i>Edit Gallery</a>
	            </td>
	          </tr>
						
					<?php }?>
	        </tbody>
	    </table>
	    <!-- end table -->

	    <!-- modal edit -->
	    <div id="edit" class="modal">
		    <div class="modal-content">
		    	<h5 class="center">EDIT DATA</h5>
		      <form action="<?=site_url('admin/update_client');?>" method="post" enctype="multipart/form-data">
						<div id="form_edit">
						</div>
		      </form>
		    </div>
			</div>
	    <!-- end modal edit -->

	    <!-- modal edit-image -->
	    <div id="edit-image" class="modal">
		    <div class="modal-content">
		    	<h5 class="center">EDIT DATA</h5>
					<table id="data-client" class="striped">
						<thead>
							<tr>
									<th>Image</th>
									<th>Option</th>
							</tr>
						</thead>
						
						<tbody id="form_gallery">
								
						</tbody>								
						
					</table>
		    </div>
		</div>
	    <!-- end modal edit-image -->
	    	
	    </div>
	</section>
	<!-- end slider -->
