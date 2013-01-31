<?php
$result = mysql_query("SELECT id, nome, descricao, abreviacao, t_porpagina, url, tipo, categoria FROM boards WHERE tipo = '1' ORDER BY categoria ASC");
$numero = 0;
?>
<body>
<div id="top">
    <div id="name-ib"><?php echo $config_geral['name'];?></div>
    <div id="allboards-ib"><?php while ($row = mysql_fetch_array($result)){$numero = $numero+1;if($numero == 1){$coch = '[ ';}else{$coch = '';}if(isset($categoria)){}else{$categoria = $row['categoria'];}if($categoria != $row['categoria']){$coch = ' ] [ ';}if($coch == " ] [ " || $coch == "[ "){$barra = '';}else{$barra=' / ';}echo $barra.$coch.$row['url'];$categoria = $row['categoria'];
}?> ]</div>
</div>
</body>