
<script type='text/javascript' src="<?php echo base_url('js/scriptrecurso.js'); ?>"></script>

<body>

<div class="contenedor">
  <br>
  <p class="ws-cabecera">Crear Recurso</p>
  <hr>
  <form id="form-recurso" action="<?php echo base_url('admin/recurso/crearrecurso') ?>" enctype="multipart/form-data">
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
              <input type="text" name="codigo" id="codigo" value="" class="form-control">
            </div>
            <div class="col-sm-3">
              <button type="button" class="btn btn-success btn-block" onclick="agregarrecurso();" name="button">Agregar</button>
            </div>
          </div>

          <div class="row" style="margin-top:8px;">
            <label class="col-sm-3">
              Nombre
            </label>
            <div class="col-sm-9">
              <input type="text" name="nombre" id="nombre" value="" class="form-control">
            </div>
          </div>

          <div class="row" style="margin-top:8px;">
            <label class="col-sm-3">
              Descripción
            </label>
            <div class="col-sm-9">
              <textarea name="descripcion" id="descripcion" rows="8" cols="80" class="form-control"></textarea>
            </div>
          </div>

          <div class="row" style="margin-top:8px;">
            <label class="col-sm-3">
              Estado
            </label>
            <div class="col-sm-9">
              <select class="form-control" name="estado" id="estado">
                <option value="">Seleccionar</option>
                <option value="1">ACTIVO</option>
                <option value="2">INACTIVO</option>
              </select>
            </div>
          </div>



          <div class="row" style="margin-top:8px;">
            <label class="col-sm-3">
              Imagen
            </label>
            <div class="col-sm-9">
              <input type="file" name="imagen" id="imagen" value="" class="form-control">
            </div>
          </div>


        </div>
    </div>
    <div class="col-sm-6" id="list">

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
document.getElementById("list").innerHTML = ['<div class="well" ><output><img style="width:100%;" src="', e.target.result, '" title="', escape(theFile.name), '"/></output></div>'].join('');
};
})(f);
reader.readAsDataURL(f);
}
}
document.getElementById('imagen').addEventListener('change', archivo, false);

</script>
