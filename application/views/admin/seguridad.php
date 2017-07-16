<?php
if (!isset($_SESSION)) {
session_start();
if ( $this->session->userdata('usuario') == '') {


  header('Location: http://www.google.com');}
} ?>
