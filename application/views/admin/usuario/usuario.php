
<script type='text/javascript' src="<?php echo base_url('js/usuario.js'); ?>"></script>

<body>

<div class="contenedor">


  <br>
  <p class="ws-cabecera">Administración de Usuarios</p>
  <hr>
  <form id="form-usuario" action="<?php echo base_url('admin/usuario/') ?>">
  <div class="row">
    <div class="col-sm-12">
      <label for="">Texto a buscar</label>
    </div>
    <div class="col-sm-12">
      <input type="text" name="txtBuscar" placeholder="Realizar busqueda por nombre, dni" class="form-control">
    </div>

  </div>

</form>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <a href='#' name="btnAgregar" class="btn btn-success btn-block" data-toggle='modal' data-target='#modalInsertar'>Agregar</a>
    </div>

  </div>
<br>
  <div class="row">
    <div class="col-sm-12">
      <table class="table  table-striped table-condensed">

          <thead>
            <tr class="info" style="font-weight:bold">
            <th>N°</th>
            <th>D.N.I</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th style="width:5%;">Editar</th>
            <th style="width:5%;">Eliminar</th>
              </tr>
          </thead>

            <tbody id="tbpersona">

            </tbody>


      </table>
      <div class="paginacion">

      </div>

    </div>

  </div>


<!-- modal para editar -->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalEditar">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3>Actualizar Informacion</h3>
        </div>
        <div class="modal-body">
          <form  class="form-horizontal" id='form-persona-actualizar'>
            <input type="hidden" name="Id" id="id">
            <input type="hidden" name="IdUsuario" id="IdUsuario">
            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">D.N.I</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtdni" id='Dni' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Nombre</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtnombre" id='Nombre' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Apellido Paterno</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtpaterno" id='Paterno' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Apellido Materno</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtmaterno" id='Materno' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Correo Electronico</label>
                </div>
                <div class="col-sm-6">
                  <input type="mail" name="txtcorreo" id='Correo' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Número Celular</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtcelular" id='Celular' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Dirección</label>
                </div>
                <div class="col-sm-6">
                  <input type="mail" name="txtdireccion" id='Direccion' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Cargo </label>
                </div>
                <div class="col-sm-5">
                  <select name="cbocargo" id='Cargo' class="form-control"></select>
                </div>
              </div>

            </div>
            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Estado</label>
                </div>
                <div class="col-sm-5">
                  <select name="cboestado" id='Estado' class="form-control"></select>
                </div>
              </div>

            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" onclick="update();">Actualizar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.fin modal editar -->

  <!--modal para insertar personas-->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalInsertar">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3>Agregar Usuario</h3>
        </div>
        <div class="modal-body">
          <form  class="form-horizontal" id='form-persona-actualizar'>
            <input type="hidden" name="Id" id="id">
            <input type="hidden" name="IdUsuario" id="IdUsuario">
            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">D.N.I</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtdni" id='Dniinsert' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Nombre</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtnombre" id='Nombreinsert' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Apellido Paterno</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtpaterno" id='Paternoinsert' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Apellido Materno</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtmaterno" id='Maternoinsert' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Correo Electronico</label>
                </div>
                <div class="col-sm-6">
                  <input type="mail" name="txtcorreo" id='Correoinsert' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Número Celular</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="txtcelular" id='Celularinsert' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Dirección</label>
                </div>
                <div class="col-sm-6">
                  <input type="mail" name="txtdireccion" id='Direccioninsert' value="" class="form-control">
                </div>
              </div>

            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" onclick="insert();">Grabar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal insertar -->
  </div>
</body>
