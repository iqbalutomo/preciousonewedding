 <!DOCTYPE html>
  <html lang="en">
    <head>
      <title>The Precious One Wedding</title>
      <meta charset="UTF-8">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link rel="icon" href="<?=base_url('assets/img/fav-icon/fav-icon.png')?>" type="image" sizes="16x16">

      <!-- Preloader -->
      <link rel="stylesheet" href="<?=base_url('assets/css/preloader.css')?>">

      <!--Import Google Icon Font-->
      <!-- from materialize -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import materialize.css-->
      <!-- from materialize -->
      <link type="text/css" rel="stylesheet" href="<?=base_url('assets/css/materialize.min.css')?>"  media="screen,projection"/>

      <!-- google font -->
      <!-- untuk second font -->
      <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">

      <!-- Animate.css -->
      <!-- untuk animasi scroll & button(onclick) -->
      <link rel="stylesheet" href="<?=base_url('assets/css/animate.min.css')?>">

      <!-- Flickity -->
      <!-- untuk client testimonial -->
      <link rel="stylesheet" href="<?=base_url('assets/css/flickity.min.css')?>">
      
      <!-- custom/addtional css -->
      <!-- css tambahan/custom -->
      <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
    </head>

    <body id="home" class="scrollspy">
      <!-- PRELOADER -->

        <!-- Preloader dijadiin partials/static sama kaya footer -->
        <div class="preloader-background">
            <div class="lds-css ng-scope">
              <div class="lds-flickr">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </div>
        </div>

      <!-- END PRELOADER -->

      <!-- -NAVBAR- -->

        <div class="navbar-fixed">
          <nav class="font-google precious-bgcolor">
            <div class="nav-wrapper container">
              <a href="" class="brand-logo gold-text"><img src="<?=base_url('assets/img/logo/logoprecious.png');?>" width="200" alt=""></a>
              <a href="#" data-target="mobile-response" class="sidenav-trigger"><i class="material-icons gold-text">menu</i></a>
              <ul id="top-menu" class="right hide-on-med-and-down">
                <li class="active"></li>
                <li><a href="#about" class="gold-text">About Us</a></li>
                <li><a href="#promo" class="gold-text">Price List</a></li>
                <li><a href="#clients" class="gold-text">Clients</a></li>
                <li><a href="#vendor" class="gold-text">Vendor List</a></li>
                <li><a href="#blog" class="gold-text">Blog</a></li>
                <li><a href="#contact-us" class="gold-text">Contact Us</a></li>
              </ul>
            </div>
          </nav>
        </div>

        <ul class="sidenav" id="mobile-response">
          <li class="sidenav-close"><a href="#about"class="gold-text">About Us</a></li>
          <hr class="hr-navbar gold-bgcolor">
          <li class="sidenav-close"><a href="#promo"class="gold-text"><i class="small material-icons right precious-textcolor">new_releases</i>Price List</a></li>
          <hr class="hr-navbar gold-bgcolor">
          <li class="sidenav-close"><a href="#clients"class="gold-text">Clients</a></li>
          <li class="sidenav-close"><a href="#vendor"class="gold-text">Vendor List</a></li>
          <li class="sidenav-close"><a href="#blog"class="gold-text">Blog</a></li>
          <li class="sidenav-close"><a href="#contact-us"class="gold-text">Contact Us</a></li>
        </ul>

      <!-- END NAVBAR -->


      <!-- -SLIDER- -->
        <section id="slider">
        <div class="slider">
          <ul class="slides">
            <?php
              foreach ($slider as $rowslider) {
                ?>
                  <li>
                    <img src="<?=base_url('uploads/slider/'.$rowslider->nama_image);?>">
                    <div class="caption center-align">
                      <h3 class="font-google"><?=$rowslider->nama_slider;?></h3>
                      <h5 class="light grey-text text-lighten-3"><?=$rowslider->deskripsi;?></h5>
                    </div>
                  </li>
                <?php
              }
            ?>
          </ul>
        </div>
        </section>

      <!-- END SLIDER -->


      <!-- -ABOUT- -->

        <section id="about" class="about scrollspy">
          <div class="container">
            <h3 class=" center light">Your Wedding Day is Our Big Day</h3>
            <hr class="hr-about gold-bgcolor">
            <p class="center precious-textcolor light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis esse velit autem suscipit consectetur dignissimos maxime veniam officiis ut explicabo.</p>
          </div><br><br><br>
            <div class="row">
            <div class="col s12 m6 l6 xl6">
              <div class="card">
                <div class="card-image">
                  <video id="videox" src="<?=base_url('assets/img/about/video-about.mp4');?>" poster="<?=base_url('assets/img/about/video-cover.png');?>"/>
                </div>
                <a onclick="return playVideo()" class="btn-floating halfway-fab waves-effect waves-light gold-bgcolor btn-large"><i class="material-icons">play_arrow</i></a>
              </div>  
            </div>

            <div class="col s12 m6 l6 xl6">
              <ul>
                <li>
                  <h4 class="font-google light">Mengapa The Precious One?</h4>
                </li>
                <li>
                  <div>
                    <i class="material-icons left gold-text">check_box</i>
                    Merancang konsep dan tema terbaik sesuai keinginan dari Calon Pengantin
                  </div>
                </li><br>
                <li>
                  <div>
                    <i class="material-icons left gold-text">check_box</i>
                    Merekomendasikan vendor-vendor pernikahan sesuai dengan budget Calon Pengantin
                  </div>
                </li><br>
                <li>
                  <div>
                    <i class="material-icons left gold-text">check_box</i>
                    Mengatur jadwal pertemuan dengan vendor, meninjau kontrak dan penanganan semua pembayaran beserta administrasi lainnya
                  </div>
                </li><br>
                <li>
                  <div>
                    <i class="material-icons left gold-text">check_box</i>
                    Mengorganisir dokumentasi, foto, dan video
                  </div>
                </li><br>
                <li>
                  <div>
                    <i class="material-icons left gold-text">check_box</i>
                    Mengatur, menjadwalkan, dan mengkoordinasi dengan detail kronologi dari keseluruhan acara / run down acara dari akad nikah sampai resepsi
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>

      <!-- END ABOUT -->


      <!-- -SERVICES- -->

        <section id="services" class="services scrollspy">
          <div class="frame-promo precious-bgcolor">
              <div class="row white">
                <div class="col m4 s12 effect-service">
                  <div class="center">
                    <img src="<?=base_url();?>assets/img/about/wedding-consultant.png" width="100" alt="">
                    <h5 class="precious-textcolor light">Wedding Consultant</h5>
                    <p class="gold-text light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate obcaecati doloribus ab est aut excepturi blanditiis vel! Aperiam est incidunt soluta necessitatibus rerum vitae perspiciatis, quod, neque, porro ipsam ad.</p>
                  </div>
                  <br><br>
                </div>

                <div class="col m4 s12 effect-service">
                  <div class="center">
                    <img src="<?=base_url();?>assets/img/about/wedding-planner.png" width="100" alt="">
                    <h5 class="precious-textcolor light">Wedding Planner</h5>
                    <p class="gold-text light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum distinctio, adipisci inventore aliquid. Optio expedita doloremque blanditiis labore non fugit eveniet mollitia incidunt iste repellendus, illo suscipit voluptates neque? Omnis.</p>
                  </div>
                  <br><br>
                </div>

                <div class="col m4 s12 effect-service">
                  <div class="center">
                    <img src="<?=base_url();?>assets/img/about/wedding-organizer.png" width="100" alt="">
                    <h5 class="precious-textcolor light">Wedding Organizer</h5>
                    <p class="gold-text light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla asperiores voluptas rerum molestiae, ipsam, dolor. Soluta enim similique magni, rem et aspernatur est consequatur architecto numquam quidem! Impedit, blanditiis itaque.</p>
                  </div>
                </div>
              </div>
          </div>
        </section>

      <!-- END SERVICES -->


      
      <!-- -PRICE LIST & PROMO- -->

        <section id="promo" class="grey lighten-3 scrollspy">
          
          <div class="frame-promo">
            <div class="row">
              <h3 class="font-google precious-textcolor center light">P & P</h3>
              <hr class="hr-promo gold-bgcolor">
              <p class="center light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis fuga optio beatae assumenda repudiandae obcaecati, vel voluptatem cum non voluptatibus facilis ad sed quia esse architecto. Repellendus nostrum sed odit.</p>
              
              <div class="row">
                <div class="col s12">
                  <ul class="tabs z-depth-2">
                    <li class="tab col s6"><a class="active" href="#price-list" class="light price-active">PRICE LIST</a></li>
                    <li class="tab col s6"><a href="#promo-package" class="light promo-active">PROMO PACKAGE</a></li>
                  </ul>
                </div>
              </div>
              
            <!-- Price List -->
              <div id="price-list">
                <div class="snip1404 effect-pricelist">
                <?php 
                  foreach ($pricelist as $row_pricelist) {
                    ?>
                  <div class="plan">
                    <header>
                      <h4 class="plan-title light">
                        <?=$row_pricelist->nama?>
                      </h4>
                      <div class="plan-cost">
                        <span class="plan-price">
                          <?=$row_pricelist->harga?>
                        </span>
                      </div>
                    </header>
                    <ul class="plan-features light gold-text">
                      <li><i class="material-icons">check</i><?=$row_pricelist->desc1?>.</li>
                      <li><i class="material-icons">check</i><?=$row_pricelist->desc2?>.</li>
                      <li><i class="material-icons">check</i><?=$row_pricelist->desc3?>.</li>
                      <li><i class="material-icons">check</i><?=$row_pricelist->desc4?>.</li>
                      <li><i class="material-icons">check</i><?=$row_pricelist->desc5?>.</li>
                      <li><i class="material-icons">check</i><?=$row_pricelist->desc6?>.</li>
                    </ul>
                    <div class="plan-select"><a class="modal-trigger" href="#booking_price" onclick="loadFormPrice(<?=$row_pricelist->id?>)">Booking</a></div>
                  </div>
                    <?php
                  }
                ?>

                  
                </div>
              </div>
            <!-- End Price List -->
            
            <!-- Promo Package -->
              <div id="promo-package">
                <div class="frame-promo effect-promo">
                  <?php
                    foreach ($promo as $rowpromo) {
                      ?>
                        <div class="col s12 m6 l4"><br>
                          <div class="card-small">
                            <img class="materialboxed z-depth-5" src="<?=base_url('uploads/promo-package/'.$rowpromo->nama_image);?>" width="280" alt=""><br>
                            <a class="waves-effect waves-light btn btnPromo precious-bgcolor z-depth-5 modal-trigger" href="#booking_promo" onclick="loadFormPromo(<?=$rowpromo->id;?>)">Booking</a>
                          </div>
                        </div>
                      <?php
                    }
                  ?>
                  </div>
                </div>
              <!-- End Promo Package -->
          </div>
        </div>
        </section>

      <!-- Modals Price -->
  
        <div id="booking_price" class="modal">
          <div class="modal-content">
            <div class="row">
              <h3 class="font-google precious-textcolor center light">Form Booking</h3>
              <hr class="hr-modal gold-bgcolor">
              
              <form action="">
                <div class="input-field col s12" id="nama_price">
                </div>

                <div class="input-field col s12">
                  <input id="nama_price" type="text" placeholder="Nama Anda" class="validate" required="" aria-required="true">
                  <label for="nama_price">Nama</label>
                </div>

                <div class="input-field col s12">
                  <input id="email_price" type="email" placeholder="Email Anda" class="validate" required="" aria-required="true">
                  <label for="email_price">Email</label>
                </div>

                <div class="input-field col s12">
                  <input id="handphone_price" type="text" placeholder="No Handphone Anda" class="validate" required="" aria-required="true">
                  <label for="handphone_price">Phone</label>
                </div>

                <div class="input-field col s12">
                  <input id="tanggal_price" type="text" class="validate datepicker" required="" aria-required="true">
                  <label for="tanggal_price">Perkiraan Tanggal Pernikahan</label>
                </div>

                <div class="input-field col s12">
                  <select required="" aria-required="true">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="Pagi 7 s/d 10AM">Pagi 7 s/d 10AM</option>
                    <option value="Siang 11 s/d 3PM">Siang 11 s/d 3PM</option>
                    <option value="Sore 3 s/d 6PM">Sore 3 s/d 6PM</option>
                    <option value="Malam 6 s/d 9PM">Malam 6 s/d 9PM</option>
                    <option value="SEGERA">SEGERA</option>
                  </select>
                  <label>Waktu yang tepat untuk dihubungi</label>
                </div>

                <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">Booking Now</button>
              </form>
              <p class="gold-text">*Pastikan semua diisi dengan benar.</p>

            </div>
          </div>
        </div>

      <!-- End Modals Price -->

      <!-- Modals Promo -->
  
        <div id="booking_promo" class="modal">
          <div class="modal-content">
            <div class="row">
              <h3 class="font-google precious-textcolor center light">Form Booking</h3>
              <hr class="hr-modal gold-bgcolor">
              
              <form action="">
                <div class="input-field col s12" id="nama_promo">
                </div>

                <div class="input-field col s12">
                  <input id="nama_booking" type="text" placeholder="Nama Anda" class="validate" required="" aria-required="true">
                  <label for="nama_booking">Nama</label>
                </div>

                <div class="input-field col s12">
                  <input id="email_booking" type="email" placeholder="Email Anda" class="validate" required="" aria-required="true">
                  <label for="email_booking">Email</label>
                </div>

                <div class="input-field col s12">
                  <input id="handphone_booking" type="text" placeholder="No Handphone Anda" class="validate" required="" aria-required="true">
                  <label for="handphone_booking">Phone</label>
                </div>

                <div class="input-field col s12">
                  <input id="tanggal_booking" type="text" class="validate datepicker" required="" aria-required="true">
                  <label for="tanggal_booking">Perkiraan Tanggal Pernikahan</label>
                </div>

                <div class="input-field col s12">
                  <select required="" aria-required="true">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="Pagi 7 s/d 10AM">Pagi 7 s/d 10AM</option>
                    <option value="Siang 11 s/d 3PM">Siang 11 s/d 3PM</option>
                    <option value="Sore 3 s/d 6PM">Sore 3 s/d 6PM</option>
                    <option value="Malam 6 s/d 9PM">Malam 6 s/d 9PM</option>
                    <option value="SEGERA">SEGERA</option>
                  </select>
                  <label>Waktu yang tepat untuk dihubungi</label>
                </div>

                <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">Booking Now</button>
              </form>

              <p class="gold-text">*Pastikan semua diisi dengan benar.</p>
            </div>
          </div>
        </div>

      <!-- End Modals Promo -->

      <!-- END PRICE LIST & PROMO -->
      

      <!-- -CLIENTS- -->

      <section id="clients" class="clients scrollspy">
        <!-- Testimonial -->
        <div class="container">
          <h3 class="light center">Apa Kata Klien Kami</h3>
        </div>

        <div class="main-gallery">
          <?php foreach($client as $rowheadclient){?>
          <div class="gallery-cell">
            <div class="testimonial">
                <img class="testimonial-avatar" src="<?=base_url().$rowheadclient->image_loc.'/'.$rowheadclient->cover_image;?>"><br>
              <q class="light center"><?=$rowheadclient->testimonial;?></q><br><br>
              <span class="testimonial-author"><?=$rowheadclient->client_name;?> 💝 <?=$rowheadclient->wedding_date;?></span><br><br><br>
            </div>
          </div>
          <?php }?>
        </div>
        <!-- End Testimonial -->

          <!-- Moment Clients -->
          <h3 class="center light font-google precious-textcolor">Share a Story</h3>
          <div class="row">

          <?php foreach($client as $rowclient){?>

          <div class="col s12 m6 l6 xl3">
            <div class="card medium z-depth-3">
              <div class="card-image">
                <img src="<?=base_url().$rowclient->image_loc.'/'.$rowclient->cover_image;?>">
              </div>
              <div class="card-content">
                <p class="gold-text font-google">
                <i class="tiny material-icons">favorite_border</i> <?=$rowclient->client_name;?> <br>
                <i class="tiny material-icons">date_range</i> <?=$rowclient->wedding_date;?> <br>
                <i class="tiny material-icons">location_on</i> <?=$rowclient->lokasi;?></p><hr>
                <p><?=substr($rowclient->testimonial,0,30)."...";?></p>
              </div>
              <div class="card-action">
                <a href="<?=site_url('home/client_detail/'.$rowclient->id);?>" class="gold-text">Read more</a>
              </div>
            </div>
          </div>

            <?php } ?>

        <div class="row">
          <div class="col s12 m4 l4 xl4"></div>
          <div class="col s12 m4 l4 xl4 center">
            <a href="<?=site_url('home/client_list');?>" class="waves-effect waves-light btn-large gold-bgcolor light z-depth-3">see more clients</a>
          </div>
          <div class="col s12 m4 l4 xl4"></div>
        </div>
        <!-- End Moment Clients -->
      </section>

      <!-- END CLIENTS -->


      <!-- -VENDOR LIST- -->

      <section id="vendor" class="vendor scrollspy">

        <div class="frame-promo">
          <div class="row">

            <h3 class="font-google center light precious-textcolor">Vendor List</h3>
            <hr class="hr-vendor gold-bgcolor"><br><br><br><br>

            <div class="col s12 m6 l6 xl4 center effect-vendor">
              <img src="<?=base_url('');?>assets/img/vendor-list/gown.png" width="100" alt="">
              <ul class="collapsible popout">
                <li>
                  <div class="collapsible-header vendorlist1 precious-bgcolor gold-text font-google">Make Up & Gown</div>
                    <?php foreach ($vendor as $rowmakeup) {
                      if($rowmakeup->kategori == 1){
                        ?>
                        <div class="collapsible-body center"><span><?=$rowmakeup->nama;?></span></div>
                        <?php
                      }
                      ?>
                      <?php
                    }?>
                </li>
              </ul>
            </div>

            <div class="col s12 m6 l6 xl4 center effect-vendor">
              <img src="<?=base_url('assets/img/vendor-list/photography.png');?>" width="100" alt="">
              <ul class="collapsible popout">
                <li>
                <div class="collapsible-header vendorlist1 precious-bgcolor gold-text font-google">Photo & Video</div>
                  <?php foreach ($vendor as $rowphoto) {
                    if($rowphoto->kategori == 2){
                      ?>
                      <div class="collapsible-body center"><span><?=$rowphoto->nama;?></span></div>
                      <?php
                    }
                    ?>
                    <?php
                  }?>
                </li>
              </ul>
            </div>

            <div class="col s12 m6 l6 xl4 center effect-vendor">
              <img src="<?=base_url('assets/img/vendor-list/decor.png');?>" width="100" alt="">
              <ul class="collapsible popout">
                <li>
                  <div class="collapsible-header vendorlist3 precious-bgcolor gold-text font-google">Decoration</div>
                  <?php foreach ($vendor as $rowdeco) {
                    if($rowdeco->kategori == 3){
                      ?>
                      <div class="collapsible-body center"><span><?=$rowdeco->nama;?></span></div>
                      <?php
                    }
                    ?>
                    <?php
                  }?>
                </li>
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="col s12 m6 l6 xl4 offset-xl2 center effect-vendor">
              <img src="<?=base_url('assets/img/vendor-list/catering.png');?>" width="100" alt="">
              <ul class="collapsible popout">
                <li>
                  <div class="collapsible-header vendorlist4 precious-bgcolor gold-text font-google">Catering</div>
                  <?php foreach ($vendor as $rowcater) {
                    if($rowcater->kategori == 4){
                      ?>
                      <div class="collapsible-body center"><span><?=$rowcater->nama;?></span></div>
                      <?php
                    }
                    ?>
                    <?php
                  }?>
                </li>
              </ul>
            </div>

            <div class="col s12 m6 l6 xl4 center effect-vendor">
              <img src="<?=base_url('assets/img/vendor-list/entertainment.png');?>" width="100" alt="">
              <ul class="collapsible popout">
                <li>
                  <div class="collapsible-header vendorlist5 precious-bgcolor gold-text font-google">Entertainment</div>
                  <?php foreach ($vendor as $rowentertainment) {
                    if($rowentertainment->kategori == 5){
                      ?>
                      <div class="collapsible-body center"><span><?=$rowentertainment->nama;?></span></div>
                      <?php
                    }
                    ?>
                    <?php
                  }?>
                </li>
              </ul>
            </div>
          </div>

          </div>
        </div>

      </section>

      <!-- END VENDOR LIST -->


      <!-- -BLOG- -->

      <section id="blog" class="blog parallax-container scrollspy">

        <div class="parallax"><img src="<?=base_url('assets/img/blog/cover-blog.jpg');?>"></div>
        <div class="row center">
          <h3 class="light font-google gold-text">Our Blog</h3>
          <p class="white-text light">berbagi tips mengenai pernikahan</p>
          <br><br>
          <a href="<?=site_url('home/blog')?>" class="waves-effect waves-light btn-large light z-depth-5">Let's Break</a>
        </div>

      </section>

      <!-- END BLOG -->


      <!-- -CONTACT US- -->

      <section id="contact-us" class="contact-us scrollspy">

        <h3 class="font-google precious-textcolor center light">Contact Us</h3>
        <hr class="hr-contact-us gold-bgcolor center"><br><br>

          <div class="frame-promo">
            <div class="row">

              <div class="col s12 m6 l6 xl6"><br><br>
                <ul class="collection">
                  <li class="collection-item">
                    <i class="material-icons left precious-textcolor">location_on</i>
                    <span class="gold-text">Binawan RW.5, Cawang, Kramatjati, East Jakarta City, Jakarta</span>
                  </li>
                  <li class="collection-item">
                    <i class="material-icons left precious-textcolor">local_phone</i>
                    <span class="gold-text">0878.7600.4600</span>
                  </li>
                  <li class="collection-item">
                    <i class="material-icons left precious-textcolor">email</i>
                    <span class="gold-text">preciousorganizer@yahoo.com</span>
                  </li>
                </ul><br>

                <!-- google map API -->
                <div class="mapouter">
                  <div class="gmap_canvas">
                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=binawan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                  </div>
                </div>
              </div>

              <div class="col s12 m6 l6 xl6">
                <h4 class="center light gold-text">Question</h4>
                
                <form action="" class="col s12">
                  
                  <div class="row">
                    <div class="input-field col s12 m12 l12 xl12">
                      <input id="nama_contactus" type="text" placeholder="Nama Anda" class="validate" required="" aria-required="true">
                      <label for="nama_contactus">Nama</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s12 m12 l12 xl12">
                      <input id="email_contactus" type="email" placeholder="Email Anda" class="validate" required="" aria-required="true">
                      <label for="email_contactus">Email</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s12 m12 l12 xl12">
                      <input id="phone_contactus" type="text" placeholder="No Handphone Anda" class="validate" required="" aria-required="true">
                      <label for="phone_contactus">Phone</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s12 m12 l12 xl12">
                      <input id="subject_contactus" type="text" class="validate" required="" aria-required="true">
                      <label for="subject_contactus">Subject</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s12 m12 l12 xl12">
                      <textarea id="detail_contactus" class="validate textarea-contactus" required="" aria-required="true"></textarea>
                      <label for="detail_contactus">Details</label>
                    </div>
                  </div>

                  <div class="row right">
                    <button class="btn waves-effect waves-light gold-bgcolor" type="submit" name="action">Send
                      <i class="material-icons right">send</i>
                    </button>
                  </div>

                </form>

              </div>

            </div>
          </div>

      </section>

      <!-- END CONTACT US -->


      <!-- -FOOTER- -->
  
      <!-- footer dijadiin partials/static jadi jika ngakses halaman index dan halaman lainnya footer gaharus ikut nge-reload -->

      <footer id="footer" class="page-footer precious-bgcolor">

        <div class="container">
          <div class="row">

            <div class="col s12 m3 l3 xl3">
              <p class="gold-text">NEWSLETTER</p>
              <form action="">
                <div class="row">
                  <div class="col s12">
                    <div class="input-field inline">
                      <input id="email_subscribe" type="email" class="validate" required="" aria-required="true">
                      <label for="email_subscribe">Email Anda</label>
                      <span class="helper-text" data-error="Masukkan email dengan benar" data-success="Email sesuai"></span>
                      <button class="modal-close btn modal-trigger gold-bgcolor" type="submit" name="action">subscribe!</button>
                      <span class="helper-text gold-text" >Subscribe untuk mendapatkan info paket promo dan price list secara update</span>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <div class="col s12 m3 l3 xl3 offset-xl1">
              <ul>
                <li><p class="gold-text">SITEMAP</p></li>
                <li><a class="white-text text-lighten-2" href="<?=site_url('#about')?>">About Us</a></li>
                <li><a class="white-text text-lighten-2" href="<?=site_url('#promo')?>">Price List</a></li>
                <li><a class="white-text text-lighten-2" href="<?=site_url('#clients')?>">Clients</a></li>
                <li><a class="white-text text-lighten-2" href="<?=site_url('#vendor')?>">Vendor List</a></li>
                <li><a class="white-text text-lighten-2" href="<?=site_url('#blog')?>">Blog</a></li>
                <li><a class="white-text text-lighten-2" href="<?=site_url('#contact-us')?>">Contact Us</a></li>
              </ul>
            </div>

            <div class="col s12 m3 l3 xl3">
              <ul>
                <li><a class="white-text text-lighten-2" href="<?=site_url('home/career')?>">Careers</a></li>
                <li><a class="white-text text-lighten-2" href="<?=site_url('home/terms')?>">Terms & Conditions</a></li>
                <li><a class="white-text text-lighten-2" href="<?=site_url('home/privacy')?>">Privacy Policy</a></li><br>
              </ul>
            </div>

            <div class="col s12 m3 l3 xl2 center">
              <ul>
                <p class="gold-text">FOLLOW US</p>
                <a href=""><img src="<?=base_url('assets/img/icon/instagram.png');?>" width="25" alt="">&nbsp;&nbsp;&nbsp;</a>
                <a href=""><img src="<?=base_url('assets/img/icon/facebook.png');?>" width="25" alt="">&nbsp;&nbsp;&nbsp;</a>
                <a href=""><img src="<?=base_url('assets/img/icon/youtube.png');?>" width="28" alt=""></a>
              </ul>
            </div>


          </div>
        </div>

        <div class="footer-copyright">
          <div class="container">
            <div class="row">
              <div class="col s12">
                <div class="center">
                  <p class="gold-text">Your Wedding Day is Our Big Day</p>
                  © 2018 The Precious One Wedding
                  <!-- <p>Made with <i class="tiny material-icons">favorite</i> in <a class="blue-text text-lighten-3" href="https://instagram.com/iqbalutomo" target="_blank">Jakarta</a></p> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </footer>

      <!-- END FOOTER -->

      


      <!--JavaScript at end of body for optimized loading-->
      <!-- Preloader -->
      <script type="text/javascript" src="<?=base_url('assets/js/preloader.js')?>"></script>

      <!-- from materialize -->
      <script type="text/javascript" src="<?=base_url('assets/js/materialize.min.js')?>"></script>

      <!-- JQuery -->
      <script type="text/javascript" src="<?=base_url('assets/jquery/jquery-3.3.1.min.js')?>"></script>

      <!-- Flickity -->
      <!-- untuk client testimonial -->
      <script type="text/javascript" src="<?=base_url('assets/js/flickity.pkgd.min.js')?>"></script>

      <!-- Custom -->
      <!-- javascript tambahan/custom -->
      <script type="text/javascript" src="<?=base_url('assets/js/script.js')?>"></script>
    </body>
  </html>