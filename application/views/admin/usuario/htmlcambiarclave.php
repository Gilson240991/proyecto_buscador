
<body>
<div class="contenedor">
  <br>
  <p class="ws-cabecera"><?php echo $titulo ?></p>
  <hr>
  <form id="form-cambiarclave" action="<?php echo base_url('admin/usuario/cambiarclave') ?>" class="form-horizontal">

    <div class="row">
      <div class="col-md-6">
        <div class="well">
          <div class="row">
            <label for="" class="control-label col-sm-3 col-md-5 col-lg-4">Seleccione un usuario</label>
            <div class="col-sm-4 col-md-7 col-lg-5">
              <select class="form-control" name="">
                <option value="">Seleccione</option>
                <option value="">Gilson Aguilar Carbajal</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="well">
          <div class="row">
            <label for="" class="control-label col-sm-3 col-md-5 col-lg-4">Usuario</label>
            <div class="col-sm-4 col-md-7 col-lg-5">
              <input type="text" name="" value="47384650" class="form-control">
            </div>
          </div>

          <div class="row" style="margin-top:8px;">
            <label for="" class="control-label col-sm-3 col-md-5 col-lg-4">Password</label>
            <div class="col-sm-4 col-md-7 col-lg-5">
              <input type="password" name="" value="" class="form-control">
            </div>
          </div>
<hr>
          <div class="row" style="margin-top:8px;">
            <label for="" class="control-label col-sm-3 col-md-5 col-lg-4">Nuevo Password</label>
            <div class="col-sm-4 col-md-7 col-lg-5">
              <input type="password" name="" value="" class="form-control">
            </div>
          </div>

          <div class="row" style="margin-top:8px;">
            <label for="" class="control-label col-sm-3 col-md-5 col-lg-4">Confirmar Nuevo Password</label>
            <div class="col-sm-4 col-md-7 col-lg-5">
              <input type="password" name="" value="" class="form-control">
            </div>
          </div>

          <div class="row" style="margin-top:8px;">
            <label for="" class="control-label col-sm-3 col-md-5 col-lg-4"></label>
            <div class="col-sm-4 col-md-7 col-lg-5">
              <button type="button" name="button" class="btn btn-success btn-block">Actualizar datos</button>
            </div>
          </div>

        </div>
      </div>
    </div>

  </form>
</div>
</body>
