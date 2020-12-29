	<!-- blog -->
	<section id="blog">
	
		<h5 class="center">BLOG PANEL</h5><hr>
		<a href="#upload" class="waves-effect waves-light btn modal-trigger black"><i class="material-icons left">file_upload</i>upload</a>
		<!--a href="<?=site_url('admin/v_insert_blog');?>" class="waves-effect waves-light btn modal-trigger black"><i class="material-icons left">file_upload</i>upload</a-->
		<h6><?= $this->session->flashdata('success'); ?></h6>
		<h6><?= $this->session->flashdata('error'); ?></h6>
		<h6 class="center">WEDDING PREPARATION</h6>
		<!-- info -->
			<div id="info" class="modal">
				<div class="modal-content">
					<h5 class="center">Instructions</h5>

					<p>Title Blog	: Judul Blog</p>
					<p>Cover Blog	: Upload Image sesuai judul blog untuk ditampilkan di-card</p>
					<p>Content		: Isi Konten sesuai judul blog dan tambahkan gambar yang sesuai minimal 2 image</p>
					<p>NOTE</p>
					<div class="box-info">
						<p>Isi konten harus sesuai dengan jenis blog yang dipilih</p>
						<p>Gunakan bahasa indonesia yang baik dan benar agar viewers dapat memahaminya</p>
						<p>Buat konten semenarik mungkin</p>
						<p>Happy Blogging:)</p>
					</div>
				</div>
			</div>
		<!-- end info -->


		<!-- upload -->
			<!-- Modal Structure -->
			<div id="upload" class="modal">
				<div class="modal-content">
					<a href="#info" class="modal-trigger"><i class="material-icons">info_outline</i></a>
					
					<h5 class="center">INPUT CONTENT</h5>
					<form action="<?=site_url('admin/add_blog');?>" method="post" enctype="multipart/form-data">

						<div class="input-field">
							<input id="add_judul" type="text" name="add_judul" class="validate" required="" aria-required="true">
							<label for="add_judul">Title Blog</label>
						</div>

						<div class="input-field">
							<select id="add_type" name="add_type" class="browser-default" required="" aria-required="true"> 
									<option disabled selected>Tipe (Pilih Satu)</option>
									<option value="1">Wedding Preparation</option>
									<option value="2">Wedding Ideas</option>
									<option value="3">Honey Moon</option>
							</select>
						</div>


						<div class="file-field input-field">
							<div class="btn precious-bgcolor">
								<span>COVER IMAGE</span>
								<input type="file" name="add_cover_image">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" required="" aria-required="true">
							</div>
						</div>
						
						<div class="input-field">
							<textarea name="add_konten" id="add_konten"></textarea>
						</div>

						<button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPLOAD</button>

					</div>
					</form>
				</div>
			</div>
		<!-- end upload -->

			<!-- WEDDING PREPARATION -->
			<!-- table -->
			<table id="data-prep" class="striped">
	        <thead>
	          <tr>
	              <th>ID</th>
	              <th>Title Blog</th>
	              <th>Upload Date</th>
	              <th>Option</th>
	          </tr>
	        </thead>
						<tbody>
							<?php
							foreach ($blog as $rowprep) {
								if($rowprep->type == 1){
									?>
										<tr>
											<td><?=$rowprep->id;?></td>
											<td><?=$rowprep->judul;?></td>
											<td><?php
											$date = date_create($rowprep->updated_at);
											echo date_format($date,"d F Y");
											?></td>
											<td>
												<a href="#edit" onclick="loadEditForm(<?=$rowprep->id;?>)" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
												<a href="#delete" onclick="loadDeleteForm(<?=$rowprep->id;?>)" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
											</td>
										</tr>
									<?php
								}
							}
							?>
						</tbody>
	    </table>
	    <!-- end table -->


	    <!-- WEDDING IDEAS -->
			<h6 class="center">WEDDING IDEAS</h6>
			<!-- table -->
			<table id="data-ideas" class="striped"><hr>
	        <thead>
	          <tr>
	              <th>ID</th>
	              <th>Title Blog</th>
	              <th>Upload Date</th>
	              <th>Option</th>
	          </tr>
	        </thead>

	        <tbody>
					<?php
						foreach ($blog as $rowideas) {
							if($rowideas->type == 2){
								?>
									<tr>
										<td><?=$rowideas->id;?></td>
										<td><?=$rowideas->judul;?></td>
										<td><?php
										$date = date_create($rowideas->created_at);
										echo date_format($date,"d F Y");
										?></td>
										<td>
											<a href="#edit" onclick="loadEditForm(<?=$rowideas->id;?>)" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
											<a href="#delete" onclick="loadDeleteForm(<?=$rowideas->id;?>)" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
										</td>
									</tr>
								<?php
							}
						}
						?>
	        </tbody>
	    </table>
	    <!-- end table -->


	    <!-- HONEYMOON & TRAVEL -->
			<h6 class="center">HONEYMOON & TRAVEL</h6>

			<!-- table -->			
	    <table id="data-honeymoon" class="striped"><hr>
	        <thead>
	          <tr>
	              <th>ID</th>
	              <th>Title Blog</th>
	              <th>Upload Date</th>
	              <th>Option</th>
	          </tr>
	        </thead>

	        <tbody>
					<?php
						foreach ($blog as $rowhoneymoon) {
							if($rowhoneymoon->type == 3){
								?>
									<tr>
										<td><?=$rowhoneymoon->id;?></td>
										<td><?=$rowhoneymoon->judul;?></td>
										<td><?php
										$date = date_create($rowhoneymoon->created_at);
										echo date_format($date,"d F Y");
										?></td>
										<td>
											<a href="#edit" onclick="loadEditForm(<?=$rowhoneymoon->id;?>)" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>  
											<a href="#delete" onclick="loadDeleteForm(<?=$rowhoneymoon->id;?>)" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
										</td>
									</tr>
								<?php
							}
						}
						?>
	        </tbody>
	    </table>
	    <!-- end table -->

	    <!-- modal edit -->
	    <div id="edit" class="modal">
		    <div class="modal-content">
		    	<h5 class="center">EDIT POST</h5>
				<form action="<?=site_url('admin/update_blog');?>" method="post" enctype="multipart/form-data">

					<div class="input-field">
						<input type="text" name="edit_id" id="edit_id" hidden>
						<input id="edit_judul" type="text" name="edit_judul" class="validate" required="" aria-required="true">
					</div>

					<div class="input-field">
						<!--select id="edit_type" name="edit_type" class="browser-default" required="" aria-required="true"> 
								
						</select-->
					</div>


					<div class="file-field input-field">
						<div class="btn precious-bgcolor">
							<span>COVER IMAGE</span>
							<input type="file" name="edit_cover_image">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" id="edit_cover_image" type="text" required="" aria-required="true">
						</div>
					</div>

					<div class="input-field">
						<textarea name="edit_konten" id="edit_konten">Konten...(Hapus dahulu untuk mengisi)</textarea>
					</div>

					<button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPLOAD</button>

					</div>
				</form>
		    </div>
		</div>
		<!-- end modal edit -->
		<!-- modal delete -->
		<div id="delete" class="modal">
		    <div class="modal-content">
		    	<h5 class="center">DELETE POST</h5>
				<form action="<?=site_url('admin/delete_blog');?>" method="post" enctype="multipart/form-data">
					
					<p>Anda yakin ingin menghapus post ini?</p>
					<input type="text" name="delete_id" id="delete_id" hidden>
					<button class="btn waves-effect waves-light red" type="submit" name="action">DELETE</button>

				</form>
		    </div>
		</div>
	    <!-- end modal delete -->

	    <!-- END HONEYMOON & TRAVEL -->
	</section>
	<!-- end blog -->
