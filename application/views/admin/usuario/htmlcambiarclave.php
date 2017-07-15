<script type="text/javascript" src="<?php echo base_url('js/scriptusuario.js') ?>"></script>
<body>
<div class="contenedor">
  <br>
  <p class="ws-cabecera"><?php echo $titulo ?></p>
  <hr>
  <form id="form-actualizarusuario" action="<?php echo base_url('admin/usuario/') ?>" class="form-horizontal">

    <div class="row">
      <div class="col-md-6">
        <div class="well">
          <div class="row">
            <div class="col-xs-12">
              <div id="alerta"></div>
            </div>
          </div>
          <div class="row">
            <label for="" class="control-label col-sm-3 col-md-5 col-lg-4">Seleccione una persona</label>
            <div class="col-sm-4 col-md-7 col-lg-5">
              <select class="form-control" name="selpersona" id="selpersona">
                <option value="">Seleccione</option>
                <?php foreach ($persona as $p):?>
                <option value="<?php echo $p->IDent_Persona ?>"><?php echo $p->Nombre." ".$p->Paterno." ".$p->Materno ?></option>
              <?php endforeach; ?>

              </select>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="well">
          <input type="hidden" name="hiddenidusuario" id="hiddenidusuario">
          <div class="row">
            <label for="" class="control-label col-sm-3 col-md-5 col-lg-4">Usuario</label>
            <div class="col-sm-4 col-md-7 col-lg-5">
              <input type="text" name="" id="usuario" class="form-control" disabled><span class="icon-search"></span>
            </div>
          </div>

          <div class="row" style="margin-top:8px;">
            <label for="" class="control-label col-sm-3 col-md-5 col-lg-4">Password</label>
            <div class="col-sm-4 col-md-7 col-lg-5">
              <input type="password" name="pass" id="pass" value="" class="form-control" disabled>
            </div>
          </div>
<hr>
          <div class="row" style="margin-top:8px;">
            <label for="" class="control-label col-sm-3 col-md-5 col-lg-4">Nuevo Password</label>
            <div class="col-sm-4 col-md-7 col-lg-5">
              <input type="password" name="" value="" id="nuevopass"  class="form-control" disabled>
            </div>
          </div>

          <div class="row" style="margin-top:8px;">
            <label for="" class="control-label col-sm-3 col-md-5 col-lg-4">Confirmar Nuevo Password</label>
            <div class="col-sm-4 col-md-7 col-lg-5">
              <input type="password" name="" value=""  id="renuevopass" class="form-control" disabled>
            </div>
          </div>

          <div class="row" style="margin-top:8px;">
            <label for="" class="control-label col-sm-3 col-md-5 col-lg-4"></label>
            <div class="col-sm-4 col-md-7 col-lg-5">
              <button type="button" name="button" class="btn btn-success btn-block" onclick="actualizarUsuario()">Actualizar datos</button>
            </div>
          </div>

        </div>
      </div>
    </div>

  </form>
</div>
</body>
