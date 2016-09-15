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
          <div class="col-xs-12 col-md-3">
            <div class="thumbnail">
                  <img width="250" src="http://placehold.it/250x150" alt="...">
                  <div class="caption">

                    <h3 class="text-center">Prinick</h3>
                    <p class="text-center">ADMINISTRADOR</p>

                    <hr />

                    <p>Ola k ase, aquí una micro biografía.</p>
                  </div>
                </div>
          </div>
          <div class="col-xs-12 col-md-9">
            <?php for($i = 1; $i <= 5; $i++): ?>
            <div class="list-group">
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">Título de una entrada de Prinick<small> - 28 octubre 2016</small></h4>
                <p class="list-group-item-text">
                  Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la impr...
                </p>
              </a>
            </div>
            <?php endfor ?>
          </div>
        </div>

      </div>
    </section>

    <?php include 'inc/footer.php' ?>

  </body>
</html>
