
<script type='text/javascript' src="<?php echo base_url('js/scriptrecurso.js'); ?>"></script>
<style media="screen">
.thumb {width: 100%; }

</style>
<body>

<div class="contenedor">
  <br>
  <p class="ws-cabecera">Actualizar Recurso</p>
  <hr>
    <?php foreach($recurso as $r):endforeach; ?>
  <form id="form-recurso" action="<?php echo base_url('admin/recurso/actualizarrecurso') ?>" enctype="multipart/form-data">
  <input type="hidden" name="hiddenidrecurso" id="hiddenidrecurso" value="<?php echo $r->IDent_Recurso ?>">
  <div class="row">
    <div class="col-sm-6">
        <div class="well">
          <div class="row">
            <div class="col-sm-12">
              <div id="alert-recurso">

              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-3">
              Código
            </label>
            <div class="col-sm-6">
              <input type="text" name="codigo" id="codigo" value="<?php echo $r->Codigo; ?>" class="form-control">
            </div>
            <div class="col-sm-3">
              <button type="button" class="btn btn-success btn-block" onclick="actualizarrecurso();" name="button">Actualizar</button>
            </div>
          </div>

          <div class="row" style="margin-top:8px;">
            <label class="col-sm-3">
              Nombre
            </label>
            <div class="col-sm-9">
              <input type="text" name="nombre" id="nombre" value="<?php echo $r->Nombre; ?>" class="form-control">
            </div>
          </div>

          <div class="row" style="margin-top:8px;">
            <label class="col-sm-3">
              Descripción
            </label>
            <div class="col-sm-9">
              <textarea name="descripcion" id="descripcion" rows="8" cols="80" class="form-control"><?php echo $r->Descripcion; ?></textarea>
            </div>
          </div>

          <div class="row" style="margin-top:8px;">
            <label class="col-sm-3">
              Estado
            </label>
            <div class="col-sm-9">
              <select class="form-control" name="estado" id="estado">
                <option value="">Seleccionar</option>
                <?php if($r->IDent_001_Estado==1){
                  $op='selected';?>
                    <option value="1" <?php echo $op ?>>ACTIVO</option>
                    <option value="2">INACTIVO</option>
                  <?php

                }else{
                  $op='selected';?>
                  <option value="1">ACTIVO</option>
                  <option value="2" <?php echo $op ?>>INACTIVO</option>
                  <?php
                }
                  ?>

              </select>
            </div>
          </div>



          <div class="row" style="margin-top:8px;">
            <label class="col-sm-3">
              Imagen
            </label>
            <div class="col-sm-9">
              <input type="file" name="imagen" id="imagen" value="<?php echo $r->Imagen ?>" class="form-control">
            </div>
          </div>


        </div>
    </div>
    <div class="col-sm-6">
      <div class="well" style="height:100%">
        <output id="list">
          <img src="<?php echo base_url("files/".$r->Imagen) ?>"  class='thumb'>

        </output>
      </div>
    </div>
  </div>
</form>
  </div>
</body>
<script type="text/javascript">
function archivo(evt) {
var files = evt.target.files; // FileList object
// Obtenemos la imagen del campo "file".
console.log(files);
for (var i = 0, f; f = files[i]; i++) {
//Solo admitimos imágenes.
if (!f.type.match('image.*')) {
continue;
}
var reader = new FileReader();
reader.onload = (function (theFile) {
return function (e) {
// Insertamos la imagen
document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
};
})(f);
reader.readAsDataURL(f);
}
}
document.getElementById('imagen').addEventListener('change', archivo, false);

</script>
