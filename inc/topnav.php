<nav class="navbar navbar-default navbar-fixed">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Hola!</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" class="btn"><i class="fa fa-home"></i> Inicio</a></li>
      </ul>

      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control search" placeholder="Búsqueda en el sitio...">
        </div>
        <button type="submit" class="btn btn-info">Buscar</button>
      </form>

      <ul class="nav navbar-nav navbar-right">

        <?php if(true): ?>
        <li><a class="btn" data-toggle="modal" data-target="#iniciar_sesion"><i class="fa fa-sign-in"></i> Login</a></li>
        <li><button class="btn btn-info navbar-btn" data-toggle="modal" data-target="#registro"><i class="fa fa-sign-out"></i> Registro</a></li>
        <?php else: ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Yo xd <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Configuración</a></li>
            <li class="divider"></li>
            <li><a href="#">Cerrar Sesión</a></li>
          </ul>
        </li>
        <?php endif ?>

      </ul>
    </div>
  </div>
</nav>

<div class="modal fade" id="iniciar_sesion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-sign-in cielo"></i> Iniciar Sesión</h4>
      </div>
      <div class="modal-body">
        <form role="form" enctype="application/x-www-form-urlencoded" id="login_form">

          <div class="alert hide" id="ajax_login"></div>

          <div class="form-group">
            <label>Usuario:</label>
            <input type="text" name="user" class="form-control" required="" />
          </div>
          <div class="form-group">
            <label>Contraseña:</label>
            <input type="password" name="pass" class="form-control" required="" />
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn red" data-toggle="modal" data-target="#lost_pass"><i class="fa fa-lock"></i> Contraseña Perdida</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" id="login" class="btn btn-info">Iniciar Sesión</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="lost_pass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-lock cielo"></i> Recuperar Contraseña Perdida</h4>
      </div>
      <div class="modal-body">
        <form role="form" enctype="application/x-www-form-urlencoded" id="lostpass_form">

          <div class="alert hide" id="ajax_lostpass"></div>

          <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required="" />
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" id="lostpass" class="btn btn-info">Recuperar Contraseña</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabelReg"><i class="fa fa-sign-out cielo"></i> Registro</h4>
      </div>
      <div class="modal-body">
        <form role="form" enctype="application/x-www-form-urlencoded" id="register_form">

          <div class="alert hide" id="ajax_register"></div>

          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label>Usuario:</label>
                <input type="text" name="user" class="form-control" required="" />
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required="" />
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label>Contraseña:</label>
                <input type="password" name="pass" class="form-control" required="" />
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label>Repetir Contraseña:</label>
                <input type="password" name="pass_repeat" class="form-control" required="" />
              </div>
            </div>


          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" id="register" class="btn btn-info">Registrarme</button>
      </div>
    </div>
  </div>
</div>
