<!--br>
<p class="ws-cabecera">Actualizar información</p>
<hr>
<?php //foreach($persona as $per):endforeach; ?>
<form  action="index.html" method="post" class="form-horizontal">
  <div style="margin-top:4px;">
    <div class="row">
      <div class="col-sm-2">
      <label for="" class="control-label">D.N.I</label>
      </div>
      <div class="col-sm-3">
        <input type="text" name="txtdni" value="<?php ////echo $per->Dni ?>" class="form-control">
      </div>
    </div>

  </div>

  <div style="margin-top:4px;">
    <div class="row">
      <div class="col-sm-2">
      <label for="" class="control-label">Nombre</label>
      </div>
      <div class="col-sm-3">
        <input type="text" name="txtnombre" value="<?php ////echo $per->Nombre ?>" class="form-control">
      </div>
    </div>

  </div>

  <div style="margin-top:4px;">
    <div class="row">
      <div class="col-sm-2">
      <label for="" class="control-label">Apellido Paterno</label>
      </div>
      <div class="col-sm-3">
        <input type="text" name="txtpaterno" value="<?php //echo $per->Paterno ?>" class="form-control">
      </div>
    </div>

  </div>

  <div style="margin-top:4px;">
    <div class="row">
      <div class="col-sm-2">
      <label for="" class="control-label">Apellido Materno</label>
      </div>
      <div class="col-sm-3">
        <input type="text" name="txtmaterno" value="<?php //echo $per->Materno ?>" class="form-control">
      </div>
    </div>

  </div>

  <div style="margin-top:4px;">
    <div class="row">
      <div class="col-sm-2">
      <label for="" class="control-label">Correo Electronico</label>
      </div>
      <div class="col-sm-3">
        <input type="mail" name="txtcorreo" value="<?php //echo $per->Correo ?>" class="form-control">
      </div>
    </div>

  </div>

  <div style="margin-top:4px;">
    <div class="row">
      <div class="col-sm-2">
      <label for="" class="control-label">Número Celular</label>
      </div>
      <div class="col-sm-3">
        <input type="text" name="txtcelular" value="<?php //echo $per->Celular ?>" class="form-control">
      </div>
    </div>

  </div>

  <div style="margin-top:4px;">
    <div class="row">
      <div class="col-sm-2">
      <label for="" class="control-label">Dirección</label>
      </div>
      <div class="col-sm-3">
        <input type="mail" name="txtdireccion" value="<?php //echo $per->Direccion ?>" class="form-control">
      </div>
    </div>

  </div>
  <div style="margin-top:4px;">
    <div class="row">
      <div class="col-sm-2">
      <label for="" class="control-label">Estado</label>
      </div>
      <div class="col-sm-3">
        <select name="cboestado" class="form-control">
          <option value=""><?php //$per ?></option>
        </select>
      </div>
    </div>

  </div>
</form-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
