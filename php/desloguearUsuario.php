<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	$_SESSION['registrado']=null;

session_destroy();

 ?>