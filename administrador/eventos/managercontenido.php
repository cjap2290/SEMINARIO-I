<?php include('../conexion.php');
$link = conectarse();
$sql="select * from contenido order by id desc";
$result=mysql_query($sql);



?>


<html>
<head>
<script>
history.go(1)
function cargarventana(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id +
"','toolbar=no,scrollbars=0,location=0,statusbar=0,status=0,menubar=0,resizable=0,width=720,height=320,left=50,top=40');");
}
</script>
<title>EVENTOS</title>
<link rel="stylesheet" type="text/css" href="../bruni.css">
</head>
<body topmargin="0" leftmargin="0">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<caption class="foninput2">EVENTOS</caption>
<tr height="100%">
<td height="70" >
<table width="100%" border="0" cellspacing="2" cellpadding="2">
<tr>
<td align="left" colspan="5"> </td>
</tr>
<!--<tr>
<td colspan="2" class="foninput2">EVENTOS</td>
</tr>-->
<tr>
<td colspan="2" >&nbsp;</td>
</tr>
<tr>


<a href="javascript:cargarventana('nuevocontenido.php')" class="c"> Nueva Contenido </a><br><br>

<a href="../bandeja.php" class="c">Principal</a>
</tr>
</table> </td>
</tr>
<tr height="100%">
<td>



<!--Para el CONTENIDO-->
<table width="91%" border="0" cellspacing="1" cellpadding="2">
<caption class="foninput2">CONTENIDO</caption>
<?php if ($row= mysql_fetch_array($result)){ ?>
<tr> <td colspan="4"> </td>
</tr> <tr bgcolor="#CCCC99" class="subtituloplan">
<td width="36%" align="left">Titulo del Evento </td>
<td width="8%" align="center"><strong>imagen</strong></td>
<td width="9%" align="center">Mostrar</td>
<td width="6%" align="center">Principal</td>
<td width="14%" align="center"><strong>Eliminar</strong></td>
</tr> <?php DO{ ?> <tr >
<?php if ($row["principal"]=="1") { ?>
<td align="left"><img src="principal.gif" border="0"><a href="javascript:cargarventana('modificar.php?Modee=<?php echo $row['id'] ?>')" class="c"> <?php echo $row["titulo"] ?></a></td>
<?php } else { ?>
<td align="left"><img src="index.gif" border="0"><a href="javascript:cargarventana('modificar.php?Modee=<?php echo $row['id'] ?>')" class="c"> <?php echo $row["titulo"] ?></a></td>
<?php }?>
<td align="center"> <a href="subidos/presubida.php?Modee=<?php echo $row["id"] ?>" class="c"> imagen </a></td>
<?php if ($row["mostrar"]=="1") { ?>
<td align="center">Si</td>
<td width="14%" align="center"><a href="principalcontenido.php?Modee=<?php echo $row["id"] ?>" class="c"> principal </a> </td>
<td width="6%" align="center"> <a href="pre.php?Modee=<?php echo $row["id"] ?>" class="c"> Eliminar </a></td>
<?php } else { ?>
<td width="3%" align="center">No</td>
<td width="9%" align="center">Desactivado</td>
<td width="9%" align="center">Desactivado</td>
<?php }?>
</tr>
<?php }WHILE ($row=mysql_fetch_array($result)); }?>
<tr>
<td colspan="4"></td>
</tr>
</table>
<hr color="#8C908C">
</td>
</tr>
</table>





</body>
</html>