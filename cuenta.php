<?php include 'inc/header.php' ?>
  <body>

    <?php include 'inc/topnav.php' ?>

    <section class="container">

      <section class="entrada text-center">
         <h1 class="white">AUTOR :: PRINICK</h1>
         <p class="lead">Miembro desde el 28 de Octubre, 2016</p>
      </section>

      <div class="cuerpo">

        <div class="row">
          <form role="form">

          <div class="col-xs-12 col-md-3">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 250px; height: 150px;">
                  <img src="http://placehold.it/250x150" data-src="http://placehold.it/250x150" alt="Avatar">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                <div>
                  <center>
                    <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Seleccionar Avatar</span>
                    <span class="fileinput-exists">Cambiar</span>
                    <input type="file" name="avatar"></span>
                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                  </center>
                </div>
            </div>

            <div class="checkbox">
              <label><input type="radio" name="name" value="" checked> Utilizar avatar propio</label>
            </div>

            <div class="checkbox">
              <label><input type="radio" name="name" value=""> Utilizar gravatar</label>
            </div>

          </div>
          <div class="col-xs-12 col-md-9">
            <div class="form-group">
              <label>Usuario</label>
              <input type="text" class="form-control" value="" placeholder="Nickname" />
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" value="" placeholder="Email@email.com" />
            </div>
            <div class="form-group">
              <label>Contraseña</label>
              <input type="password" class="form-control" value="" placeholder="Email@email.com" />
              <span class="help-block">Si no deseas modificar este campo, déjalo vacío.</span>
            </div>

            <hr />

            <div class="form-group">
              <center><button type="button" class="btn btn-info"><i class="fa fa-save"></i> Guardar</button></center>
            </div>

          </div>

          </form>
        </div>

      </div>
    </section>

    <?php include 'inc/footer.php' ?>
    <script src="js/jasny-bootstrap.min.js"></script>
    <script>
      $('.fileinput').fileinput()
    </script>

  </body>
</html>
