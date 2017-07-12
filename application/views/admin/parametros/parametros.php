
<script type='text/javascript' src="<?php echo base_url('js/parametro.js'); ?>"></script>

  <br>
  <p class="ws-cabecera"><?php echo $titulo ?></p>
  <hr>
  <form>
  <div class="row">
    <div class="col-sm-6">
      <label for="">Texto a buscar</label>
    </div>
    <div class="col-sm-6">
      <label for="">Estado</label>
    </div>
    <div class="col-sm-6">
      <input type="text" name="txtBuscarParametro" placeholder="Realizar busqueda por parámetro, descripción" class="form-control">
    </div>
    <div class="col-sm-4">
      <select class="form-control" name="cboEstadoParametro">
        <option value="">SELECCIONAR</option>
        <option value="">ACTIVO</option>
        <option value="">INACTIVO</option>
      </select>
    </div>
    <div class="col-sm-2">
      <button type="button" name="btnBuscarParametro" onclick="mostrarDatosParametro('');" class="btn btn-success btn-block">Buscar</button>
    </div>

  </div>

</form>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <a href='#' name="btnAgregarParametro" class="btn btn-success btn-block" data-toggle='modal' data-target='#modalInsertarParametro'>Agregar</a>
    </div>

  </div>
<br>
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-bordered table-hover table-condensed">

          <thead>
            <tr class="info" style="font-weight:bold">
            <th>N°</th>
            <th>Parámetro</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th style="width:5%;">Editar</th>
            <th style="width:5%;">Detalle</th>
              </tr>
          </thead>

            <tbody id="tbparametro">

            </tbody>


      </table>
      <div class="paginacion">

      </div>

    </div>

  </div>


<!-- modal para editar -->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalEditarParametro">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3>Actualizar Parámtro</h3>
        </div>
        <div class="modal-body">
          <form  class="form-horizontal" id='form-persona-insertar-parametro'>
            <input type="hidden" name="idparametro" id="idparametro">
            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Parámetro</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="Parametro" id='ParametroEditar' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Descripción</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="DescripcionParametro" id='DescripcionParametroEditar' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Estado</label>
                </div>
                <div class="col-sm-6">
                  <select  name="EstadoParametro" id='EstadoParametroEditar' value="" class="form-control">
                  <option value="">SELECCIONAR</option>
                  <?php foreach($parametro as $p):
                    ?>
                    <option value="<?php echo $p->IDent_Detalle; ?>"><?php echo $p->Valor; ?></option>

                    <?php

                  endforeach; ?>

                  </select>
                </div>
              </div>

            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" onclick="updateParametro();">Actualizar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.fin modal editar -->

  <!--modal para insertar personas-->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalInsertarParametro">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3>Agregar Parámetro</h3>
        </div>
        <div class="modal-body">
          <form  class="form-horizontal" id='form-persona-insertar-parametro'>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Parámetro</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="Parametro" id='Parametro' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Descripción</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="DescripcionParametro" id='DescripcionParametro' value="" class="form-control">
                </div>
              </div>

            </div>

            <div style="margin-top:4px;">
              <div class="row">
                <div class="col-sm-4">
                <label for="" class="control-label">Estado</label>
                </div>
                <div class="col-sm-6">
                  <select  name="EstadoParametro" id='EstadoParametro' value="" class="form-control">
                  <option value="">SELECCIONAR</option>
                  <?php foreach($parametro as $p):
                    ?>
                    <option value="<?php echo $p->IDent_Detalle; ?>"><?php echo $p->Valor; ?></option>

                    <?php

                  endforeach; ?>

                  </select>
                </div>
              </div>

            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" onclick="insertParametro();">Grabar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal insertar -->

<!--Modal dedetalle de parametros-->

<!--modal para insertar personas-->
<div class="modal fade" tabindex="-1" role="dialog" id="modalDetalleParametro">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3>Detalle Parametro</h3>
      </div>
      <div class="modal-body">
        <form  class="form-horizontal" id='form-persona-insertar-parametro'>

          <div style="margin-top:4px;">
            <div class="row">
              <div class="col-sm-4">
              <label for="" class="control-label">Parámetro</label>
              </div>
              <div class="col-sm-6">
                <input type="text" name="Parametro" id='Parametro' value="" class="form-control">
              </div>
            </div>

          </div>

          <div style="margin-top:4px;">
            <div class="row">
              <div class="col-sm-4">
              <label for="" class="control-label">Descripción</label>
              </div>
              <div class="col-sm-6">
                <input type="text" name="DescripcionParametro" id='DescripcionParametro' value="" class="form-control">
              </div>
            </div>

          </div>

          <div style="margin-top:4px;">
            <div class="row">
              <div class="col-sm-4">
              <label for="" class="control-label">Estado</label>
              </div>
              <div class="col-sm-6">
                <select  name="EstadoParametro" id='EstadoParametro' value="" class="form-control">
                <option value="">SELECCIONAR</option>
                <?php foreach($parametro as $p):
                  ?>
                  <option value="<?php echo $p->IDent_Detalle; ?>"><?php echo $p->Valor; ?></option>

                  <?php

                endforeach; ?>

                </select>
              </div>
            </div>

          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" onclick="insertParametro();">Grabar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal detalle -->
<!--fin de modal-->
