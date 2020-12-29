	<!-- slider -->
	<section id="slider">
			<h6><?= $this->session->flashdata('success'); ?></h6>
			<h6><?= $this->session->flashdata('error'); ?></h6>
			<h5 class="center">DATA SLIDER</h5>
			<a href="#upload" class="waves-effect waves-light btn modal-trigger black"><i class="material-icons left">file_upload</i>upload</a>

			<!-- info -->
			<div id="info" class="modal">
			    <div class="modal-content">
			    	<h5 class="center">Instructions</h5>

			    	<p>Title Name	: Masukkan Nama Judul dari setiap slider</p>
			    	<p>Description	: Deskripsi dari setiap slider</p>
			    	<p>FILE			: Upload Image untuk dijadikan slider image</p>
			    	<p>NOTE</p>
			    	<div class="box-info">
				    	<p>Image Type	: jpeg(JPEG)</p>
				    	<p>Width		: 5760px</p>
				    	<p>Height		: 3840px</p>
				    	<p>Max-Size		: 10MB</p>
			    	</div>
			    </div>
			  </div>
			<!-- end info -->


			<!-- upload -->
			  <!-- Modal Structure -->
			  <div id="upload" class="modal">
			    <div class="modal-content">
			    	<a href="#info" class="modal-trigger"><i class="material-icons">info_outline</i></a>
						<h5 class="center">INPUT DATA</h5>
			      <form enctype="multipart/form-data" action="<?=site_url('admin/upload_slider')?>" method="post">
			      	<div class="input-field">
			          <input id="nama_title" name="nama_slider" type="text" class="validate" required="" aria-required="true">
			          <label for="nama_title">Title Name</label>
			        </div>
			        <div class="input-field">
								<textarea id="description" name="deskripsi" class="materialize-textarea validate" required="" aria-required="true"></textarea>
								<label for="description">Description</label>
			        </div>
			        <div class="file-field input-field">
								<div class="btn precious-bgcolor">
									<span>File</span>
									<input type="file" name="image_slide">
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" required="" aria-required="true">
								</div>
							</div>
					    <button class="btn waves-effect waves-light gold-bgcolor" type="submit">UPLOAD</button>
			      </form>
			    </div>
			  </div>
			<!-- end upload -->


			<!-- table -->
			<table id="data-slider" class="striped">
	        <thead>
	          <tr>
							<th>ID</th>
							<th>Title Name</th>
							<th>Image</th>
							<th>Option</th>
	          </tr>
	        </thead>
	        <tbody>
						<?php
						$no=1;
							foreach ($slider as $rowslider) {
								?>
									<tr>
										<td><?=$no++;?></td>
										<td><?=$rowslider->nama_slider;?></td>
										<td><img src="<?=base_url('uploads/slider/'.$rowslider->nama_image);?>" width="200" alt=""></td>
										<td>
											<a href="#edit" onclick="loadFormEdit(<?=$rowslider->id?>)" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>   
											<a href="#delete" onclick="loadDeleteForm(<?=$rowslider->id?>)" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
										</td>
									</tr>
								<?php
							}
						?>
	        </tbody>
	    	</table>
	    <!-- end table -->

	    <!-- modal edit -->
	    <div id="edit" class="modal">
		    <div class="modal-content">
		    	<h5 class="center">EDIT DATA</h5>
		      <form action="<?=site_url('admin/update_slider')?>" enctype="multipart/form-data" method="post">
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
						<p>Anda yakin ingin menghapus slider ini?</p>
						<div id="btn_delete"></div>
							
							</div>
					</div>
			</div>
			<!-- end modal delete -->
	    	
	    </div>
	</section>
	<!-- end slider -->