<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css') ?>">
  <link href="<?php echo base_url('css/modern-business.css') ?>" rel="stylesheet">
  <link href="<?php 	echo base_url('css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('css/estilos.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('css/nav.css') ?>">
	<script type='text/javascript' src="<?php echo base_url('js/jquery.js') ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('js/bootstrap.js') ?>"></script>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	 <style>
	 .wrap{
		 width: 100%;
	 }

	 .menu ul{
		 z-index: 5;
		 background-color: red;
	 }

	 </style>
	<title><?php echo $titulo ?></title>
</head>
<body style="background-color: red;">
	<!-- Navigation -->
	<header></header>
		<div class="wrap">

		<nav>
			<ul class="menu1">
				<li><a href="#"> Inicio</a></li>
				<li><a href="#"> Nosotros</a>
					<ul>
						<li><a href="#">Quienes Somos </a></li>
						<li><a href="#">Vision</a></li>
						<li><a href="#">Mision</a></li>
						<li><a href="#">Valores</a></li>

					</ul>
				</li>
				<li><a href="#"><span class="iconic magnifying-glass"></span> Servicios</a>
					<ul>
						<li><a href="#">Servicio de Alabanza</a></li>
						<li><a href="#">Servicio de Oracion</a></li>
						<li><a href="#">Servicio de Discipulado</a></li>
						<li><a href="#">Servicio de Niños</a></li>
					</ul>
				</li>
				<li><a href="#"><span class="iconic map-pin"></span> Contactenos</a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</nav>
		</div>
