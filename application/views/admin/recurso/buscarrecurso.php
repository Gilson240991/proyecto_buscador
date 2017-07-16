
<script type='text/javascript' src="<?php echo base_url('js/recurso.js'); ?>"></script>
<link rel="stylesheet" href="<?php echo base_url('css/modalimagen.css'); ?>">

<script type="text/javascript">

</script>
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
                <?php if($tipo->Nombre=="ADMINISTRADOR"){ ?>

                <th>Editar</th>
                <th>Eliminar</th>
                <?php } ?>
              </tr>
            </thead>
            <?php if($tipo->Nombre=="VISITANTE"){?>
              <style>
              .editar, .eliminar{
                  display: none;
                }
              </style>
            <?php } ?>
            <tbody id="tbrecurso">

            </tbody>
          </table>
        </div>

        <div class="paginacion">

        </div>
      </div>
    </div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>
</body>
</html>
