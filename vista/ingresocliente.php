﻿<?php
session_start();//se debe poner para que continue con la sesión que abri, si no existe la crea
if(!isset($_SESSION["_PKUsuario"]))//pregunto por variable SESSION
{
echo "<script languge='javascript'>alert('No te has autenticado') </script>";
echo "<script languge='javascript'>location.href='../index.php'</script>";
}
else
{
?>
  <center>
  <h1>Informacion Clientes</h1>
<form name="Frmcliente" action="guardarcliente.php" method="post">
<input type="hidden" name="Pos[]" id="Pos" value="">
<table border=1 cellspacin ='2' cellpadding="2">
  <tr>
    <td>Cedula</td>
    <td colspan="3"><input name="Cedula" id="Cedula" size="30"/></td>
  </tr>
  <tr>
    <td >Nombres</td>
    <td colspan="3"><input name="Nombres" size="30"/></td>
  </tr>
  <tr>
    <td>Apellidos</td>
    <td colspan="3"><input name="Apellidos" size="30"/></td>
  </tr>
  <tr>
    <td>Direccion</td>
    <td colspan="3"><input name="Direccion" size="30" /></td>
  </tr>
    <tr>
    <td>Telefono</td>
    <td colspan="3"><input name="Telefono" size="30"/></td>
  </tr>
      <tr>
    <td>Celular</td>
    <td colspan="3"><input name="Celular" size="30"/></td>
  </tr>
  <tr>
    <td>Email</td>
    <td colspan="3"><input name="Email" id="Email" size="30"/></td>
  </tr>
     <tr>
    <td colspan="4" align="center"><input type="submit" name="Guardar" value="Guardar" onclick="return validartexto()"/></td>
  </tr>
</table>
</form>
<br />
 <a href="menu.php" class='enlaceboton'>Menu Clientes</a>
 </center>
 <?php
 }
 ?>
