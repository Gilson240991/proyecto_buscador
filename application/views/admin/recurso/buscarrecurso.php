
<script type='text/javascript' src="<?php echo base_url('js/recurso.js'); ?>"></script>
<style>
  #tbrecurso tr td{
   width: 5%;
  }
</style>
<body>

<div class="contenedor">
  <br>
  <p class="ws-cabecera">Buscar Recurso</p>
  <hr>

    <div class="well">
      <div class="row">
        <form id="form-recurso-buscar"  action="<?php echo base_url(); ?>">
          <div class="col-sm-12">
                <input type="text" name="txtBuscarrecurso" value="" class="form-control" placeholder="Buscar por código, Nombre ó por Descripción">
          </div>
        </form>

      </div>
    </div>


    <div class="row">
      <div class="col-sm-12">
        <div class="table-responsive">
          <table class="table table-condensed table-striped">
            <thead>
              <tr>
                <th>item</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Imagen</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody id="tbrecurso">

            </tbody>
          </table>
        </div>

        <div class="paginacion">

        </div>
      </div>
    </div>
</div>
</body>
</html>
