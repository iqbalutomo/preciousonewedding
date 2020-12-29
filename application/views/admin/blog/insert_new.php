<section id="blog">
<h5 class="center">BLOG PANEL</h5><hr>
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


    <a href="#info" class="modal-trigger"><i class="material-icons">info_outline</i></a>
    <h5 class="center">INPUT CONTENT</h5>
    <h5 class="center">WEDDING PREPARATION</h5>
    <form action="<?=site_url('admin/add_blog');?>">

        <div class="input-field">
            <input id="judul" type="text" name="add_judul" class="validate" required="" aria-required="true">
            <label for="judul">Title Blog</label>
        </div>

        <div class="input-field">
            <select id="role" name="add_type" class="browser-default" required="" aria-required="true"> 
                <option disabled selected>Tipe (Pilih Satu)</option>
                <option value="Wedding Preparation">Wedding Preparation</option>
                <option value="Wedding Ideas">Wedding Ideas</option>
                <option value="Honey Moon">Honey Moon</option>
            </select>
        </div>

        <!-- disini content CMS untuk Blognya -->
        <div class="input-field">
            <textarea class="ckeditor" id="ckeditor" name="konten"></textarea>
        </div>

        <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">UPLOAD</button>
        <a href="<?=site_url('admin/v_blog');?>" class="btn waves-effect waves-light purple-bgcolor" type="submit" name="action">BACK</a>

        </div>
      </form>

<!-- end upload -->
</section>

<script src="<?=base_url('assets/ckeditor/ckeditor.js')?>"></script>