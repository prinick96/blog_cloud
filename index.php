<?php include 'inc/header.php' ?>
  <body>

    <?php include 'inc/topnav.php' ?>

    <section class="container">
      <div class="cuerpo">

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9">

            <?php for($i = 1; $i <= 10; $i++): ?>
            <div class="list-group">
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">Título de una entrada <small> - 28 octubre 2016</small></h4>
                <p class="list-group-item-text">
                  Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la impr...
                </p>
              </a>
            </div>
            <?php endfor ?>

            <center>
              <ul class="pagination">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </center>

          </div>
          <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item active">
                <span class="badge">10</span>
                Todos
              </a>
              <a href="#" class="list-group-item">
                <span class="badge">0</span>
                Sin Categoría
              </a>
            </div>
          </div>

        </div>


      </div>
    </section>

    <?php include 'inc/footer.php' ?>

  </body>
</html>
