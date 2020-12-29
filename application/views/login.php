 <!DOCTYPE html>
  <html lang="en">
    <head>
      <title>Login | The Precious One Wedding</title>
      <meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?=base_url('assets/css/materialize.min.css')?>"  media="screen,projection"/>
      <!-- custom css -->
      <link rel="stylesheet" href="<?=base_url('assets/css/admin/login.css')?>">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <section id="login">
        <div class="row">
          <div class="col s12 m6 l6 xl6 offset-m3 offset-l3 offset-xl3">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title center">LOGIN</span>
                <h6><?= $this->session->flashdata('error'); ?></h6>
                <form action="<?=base_url('index.php/login/process')?>" method="post">
                  <div class="input-field">
                    <input id="username" type="text" name="username" class="validate" required="" aria-required="true">
                    <label for="username">username</label>
                  </div>

                  <div class="input-field">
                    <input id="password" type="password" name="password" class="validate" required="" aria-required="true">
                    <label for="password">password</label>
                  </div>

                  <input class="btn waves-effect waves-light gold-bgcolor" type="submit" value="LOGIN">
                </form>

              </div>
            </div>
          </div>
        </div>
      </section>
      

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="<?=base_url('assets/js/materialize.min.js')?>"></script>
    </body>
  </html>
        