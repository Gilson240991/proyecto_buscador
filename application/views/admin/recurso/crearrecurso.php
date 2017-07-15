
<script type='text/javascript' src="<?php echo base_url('js/recurso.js'); ?>"></script>

<body>

<div class="contenedor">
  <br>
  <p class="ws-cabecera">Crear Recurso</p>
  <hr>
  <form id="form-recurso" action="<?php echo base_url('admin/recurso/crearrecurso') ?>">
  <div class="row">
    <div class="col-sm-6">
        <div class="well">
          <div class="row">
            <label class="col-sm-3">
              Código
            </label>
            <div class="col-sm-6">
              <input type="text" name="" value="" class="form-control">
            </div>
            <div class="col-sm-3">
              <button type="button" class="btn btn-success btn-block" name="button">Agregar</button>
            </div>
          </div>

          <div class="row" style="margin-top:8px;">
            <label class="col-sm-3">
              Nombre
            </label>
            <div class="col-sm-9">
              <input type="text" name="" value="" class="form-control">
            </div>
          </div>

          <div class="row" style="margin-top:8px;">
            <label class="col-sm-3">
              Descripción
            </label>
            <div class="col-sm-9">
              <textarea name="name" rows="8" cols="80" class="form-control"></textarea>
            </div>
          </div>

          <div class="row" style="margin-top:8px;">
            <label class="col-sm-3">
              Imagen
            </label>
            <div class="col-sm-9">
              <input type="file" name="" value="" class="form-control">
            </div>
          </div>
        </div>
    </div>
  </div>
</form>
  </div>
</body>
