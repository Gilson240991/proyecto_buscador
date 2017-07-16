
  <div id="lateral">
    <ul id="browser" class="filetree">
      <?php if($tipo->Nombre =="ADMINISTRADOR"){ ?>
      <li><span class="folder"> Mantenimiento de Usuarios</span>
        <ul>
          <li><span class="file"><a href="<?php echo base_url('admin/usuario') ?>">Administración de Usuarios</a></span></li>
          <li><span class="file"><a href="<?php echo base_url('admin/usuario/htmlcambiarclave') ?>">Cambiar clave</a></span></li>
        </ul>
      </li>
      <?php } ?>
      <li><span class="folder">Recurso</span>
        <ul>
          <?php if($tipo->Nombre =="ADMINISTRADOR"){ ?>
          <li><span class="file"><a href="<?php echo base_url('admin/recurso/htmlcrearrecurso')?>">Crear recurso</a></span></li>
          <?php } ?>
          <li><span class="file"><a href="<?php echo base_url('admin/recurso')?>">Buscar recurso</a></span></li>

        </ul>
      </li>
    </ul>
  </div>
