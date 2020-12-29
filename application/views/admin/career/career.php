	<!-- careers -->
	<section id="careers">
		<table id="data-careers" class="striped">		
			<h6><?= $this->session->flashdata('success'); ?></h6>
			<h6><?= $this->session->flashdata('error'); ?></h6>
			<h5 class="center">DATA CAREERS</h5>
			<a href="#upload" class="waves-effect waves-light btn modal-trigger black"><i class="material-icons left">file_upload</i>upload</a>

			<!-- upload -->
			  <!-- Modal Structure -->
			  <div id="upload" class="modal">
			    <div class="modal-content">
			    	<a href="#info" class="modal-trigger"><i class="material-icons">info_outline</i></a>
			    	<h5 class="center">INPUT DATA</h5>
						<form action="<?=site_url("admin/add_career");?>" method="post">
							<div class="input-field">
			          <input id="add_job_name" name="add_job_name" type="text" class="validate" required="" aria-required="true">
			          <label for="job_name">Job Name</label>
			        </div>

			        <div class="input-field">
			          <input id="add_deadline" name="add_deadline" type="text" class="validate datepicker" required="" aria-required="true">
			          <label for="deadline">Deadline</label>
			        </div>

			        <div class="input-field">
			          <input id="add_location" name="add_location" type="text" class="validate" required="" onclick="$(this).val('4');" aria-required="true">
			          <label for="location">Location</label>
			        </div>

							<div class="input-field">
								<select id="add_working_time" name="add_working_time" class="browser-default" required="" aria-required="true"> 
									<option value="0" disabled selected>Working Time (Pilih salah satu)</option>
									<option value="Full-time">Full-time</option>
									<option value="Part-time">Part-time</option>
									<!--Penjelasan Jabatan/Role Admin-->
									<!--Root memiliki akses untuk semua menu-->
									<!--Blog Admin memiliki akses untuk menu blog saja-->
								</select>
								<!--label for="role">Role</label-->
							</div>

			        <div class="input-field">
			          <textarea id="add_qualification" name="add_qualification" class="materialize-textarea validate" required="" aria-required="true" onclick="add_qualification.data.set('')">Minimum Qualifications (Hapus dahulu sebelum mengisi konten)</textarea>
			        </div>

			        <div class="input-field">
			          <textarea id="add_description" name="add_description" class="materialize-textarea validate" required="" aria-required="true" onclick="add_description.data.set('')">Jobs Descriptions (Hapus dahulu sebelum mengisi konten)</textarea>
			        </div>

			        <button class="btn waves-effect waves-light gold-bgcolor" type="submit">UPLOAD</button>
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
	              <th>Job Name</th>
	              <th>Deadline</th>
	              <th>Location</th>
	              <th>Option</th>
	          </tr>
	        </thead>

	        <tbody>
					<?php
					$no = 1;
						foreach ($career as $rowcareer) {
							?>
							<tr>
								<td><?=$no++;?></td>
								<td><?=$rowcareer->job_name;?></td>
								<td><?=$rowcareer->deadline;?></td>
								<td><?=$rowcareer->location?></td>
								<td yle="text-align:right;">
										<a href="#edit" onclick="loadFormEdit(<?=$rowcareer->id?>)" class="waves-effect waves-light btn-small modal-trigger precious-bgcolor"><i class="material-icons left">color_lens</i>Edit</a>&nbsp;&nbsp;
										<a href="#delete" onclick="loadDeleteForm(<?=$rowcareer->id?>)" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons left">clear</i>Delete</a>
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
					<form action="<?=site_url('admin/update_career');?>" method="post">
						<div id="form_edit">
						<div class="input-field">
								<input type="text" name="edit_id" id="edit_id" hidden>
								<input id="edit_job_name" name="edit_job_name" type="text" class="validate" required="" aria-required="true">
						</div>
						<div class="input-field">
								<input id="edit_deadline" name="edit_deadline" type="text" class="validate datepicker" required="" aria-required="true">
						</div>
						<div class="input-field">
								<input id="edit_location" name="edit_location" type="text" class="validate" required="" aria-required="true">
						</div>
						<div class="input-field">
								<select id="edit_working_time" name="edit_working_time" class="browser-default" required="" aria-required="true"> 
										<option value="0" disabled selected>Working Time (Pilih salah satu)</option>
										<option value="Full-time">Full-time</option>
										<option value="Part-time">Part-time</option>
								</select>
						</div>
						<div class="input-field">
								<textarea id="edit_qualification" name="edit_qualification" class="materialize-textarea validate" ></textarea>
						</div>
						<div class="input-field">
								<textarea id="edit_description" name="edit_description" class="materialize-textarea validate" ></textarea>
						</div>
						<button class="btn waves-effect waves-light gold-bgcolor" type="submit">UPLOAD</button>
						</div>
					</form>
		    </div>
			</div>
			<!-- end modal delete -->

			<!-- modal delete -->
			<div id="delete" class="modal">
		    <div class="modal-content">
		    	<h5 class="center">DELETE DATA</h5>
						<p>Anda yakin ingin menghapus lowongan ini?</p>
						<div id="btn_delete"></div>
							
							</div>
					</div>
			</div>
			<!-- end modal delete -->
	    	
	    </div>
	</section>
	<!-- end slider -->
