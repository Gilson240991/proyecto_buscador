<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url('css/jquery.treeview.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/index.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/demo/screen.css') ?>">

    <script type='text/javascript' src="<?php echo base_url('js/jquery.js') ?>"></script>
    <script type='text/javascript' src="<?php echo base_url('js/index.js') ?>"></script>
    <script type='text/javascript' src="<?php echo base_url('css/demo/jquery.cookie.js') ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('js/jquery.treeview.js') ?>"></script>
  </head>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#browser").treeview({
      persist: "location",
      collapsed: true,
      toggle: function() {
        console.log("%s was toggled.", $(this).find(">span").text());
      }
    });
  });

  </script>
  <script type="text/javascript">
  function cerrar_session() {
      window.close();
  }
  </script>
  <body>

    <div id="top">
      <?php foreach($persona as $p):endforeach; ?>
      <div style="float:right;margin-top:10px"><label><b><?php echo $tipo->Nombre." :" ?></b> <?php echo $p->Nombre." ".$p->Paterno." ".$p->Materno ?></label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('login/logout') ?>">Cerrar sesion</a>&nbsp;&nbsp;</div>
    </div>
