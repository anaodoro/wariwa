<?php
$username = "meuuser";
$password = "root321";
$hostname = "localhost"; 
$dbname = "wariwa";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
$selected = mysql_select_db($dbname,$dbhandle) or die("Could not select examples");

//GERAL
$boards = mysql_fetch_array(mysql_query("SELECT id, nome, descricao, abreviacao, t_porpagina, url, tipo FROM boards"));
$config_geral = mysql_fetch_array(mysql_query("SELECT name, dominio_geral FROM config_geral"));
if(isset($_GET['pg'])){$pagina=$_GET['pg'];}else{$pagina="index";}
$tipo=$boards['tipo'];
if($boards['tipo']=='1'){$pagina='board';}
if($boards['id']=='1'){$titulo = $config_geral['name'].' - '.$boards['descricao'];}else{$titulo = $boards['nome'].' - '.$boards['descricao'];}
?>