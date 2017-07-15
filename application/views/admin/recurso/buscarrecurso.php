
<script type='text/javascript' src="<?php echo base_url('js/recurso.js'); ?>"></script>

<body>

<div class="contenedor">
  <br>
  <p class="ws-cabecera">Buscar Recurso</p>
  <hr>

    <div class="well">
      <div class="row">
        <div class="col-sm-12">
              <input type="text" name="" value="" class="form-control" placeholder="Buscar por código, Nombre ó por Descripción">
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-12">
        <table class="table table-condensed table-striped">
          <thead>
            <tr>
              <th>item</th>
              <th>Código</th>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Imagen</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <?php for($i=1;$i<=6;$i++):?>
            <tr>
              <td>1</td>
              <td>Q23WWS</td>
              <td>MOTOR DIESEL</td>
              <td>ESTE ES EL MOTOR DE ARRANQUE</td>
              <td><img src="<?php echo base_url('img/2.jpg') ?>" height="100px" width="100px" alt=""></td>
              <td><button type="button"class="btn btn-success btn-xs btn-block" name="button">Editar</button></td>

              <td><button type="button"class="btn btn-danger btn-xs btn-block" name="button">Eliminar</button></td>

            </tr>
          <?php endfor; ?>
          </tbody>
        </table>
      </div>
    </div>
</div>
</body>
</html>
