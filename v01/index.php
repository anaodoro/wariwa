<?php
include('info/config.php');
if($boards == ""){
	include('all/404.php');
}else{
	include('all/head.php');
	include('all/body/'.$pagina.'.php');
	include('all/bottom.php');
}
?>