<!DOCTYPE html>
<html lang="es">
	<head>
		<title><?php echo $titulo; ?></title>
		<meta  charset="utf-8" />
		<link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('css/bootstrap-theme.min.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet" />

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<style>
		footer{position:absolute;width:100%;bottom:0;left:0;}
		</style>
	</head>
	<body>
		<script>
		function base_url(url) { return '<?php echo base_url('admin/'); ?>' + url; } function redirect(href) { window.location.href = '<?php echo base_url('admin/'); ?>' + href; }
		</script>
		<header>
					</header>
		<div class="container-fluid">

			<div class="row" style="margin-top:100px;">
				<div id="content-page" class="col-xs-12">



					<div class="content">
						<div class="row">
							<div class="col-xs-4"></div>
							<div class="col-xs-4" style="margin-top: 18px;">
								<div class="panel panel-default">
									<div class="panel-heading">Acceso al sistema</div>
									<div class="panel-body">
									<div id='msj'></div>
									<?php echo validation_errors(); ?>

										<?php echo form_open('/', array('class' => 'upd')); ?>
										<div class="form-group">
											<div class="col-sm-12">
												<label>Usuario</label>
											</div>
											<div class="col-sm-12">
												<?php 	$data = array(
												'type'  => 'text',
												'name'  => 'usuario',
												'id'    => 'usuario',
												'value' => '',
												'class' => 'form-control'
												);
												echo form_input($data); ?>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-12">
												<label>Contraseña</label>
											</div>
											<div class="col-sm-12">
												<?php 	$data = array(
												'type'  => 'password',
												'name'  => 'clave',
												'id'    => 'clave',
												'value' => '',
												'class' => 'form-control'
												);
												echo form_input($data); ?>
											</div>


										</div>
										<div class="form-group" >
											<div class="col-sm-offset-3 col-sm-6" style="margin-top: 10px;">
											<?php

											$js = 'onClick="validarUsuario()"';
											$data = array(
												'type'  => 'button',
												'name'  => 'ok',
												'id'    => 'ok',
												'value' => 'Ingresar',
												'class' => 'btn btn-primary btn-block'
												);
											echo form_input($data,'', $js);
											?>
										</div>

										</div>

										<?php echo form_close(); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer class="text-center">
			<b>Todos los derechos reservados © Copyright BITE Consulting - 2017</b>
		</footer>
		<script type='text/javascript' src="<?php echo base_url('js/jquery.js'); ?>"></script>
		<script type='text/javascript' src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
		<script type='text/javascript' src="<?php echo base_url('js/login.js'); ?>"></script>
	</body>
</html>
