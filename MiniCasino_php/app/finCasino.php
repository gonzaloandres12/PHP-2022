<form name="finpedido" method="POST">
<h1>Muchas gracias por jugar con controsos.</h1>
<h1>Su resultado final es de <?php echo $_SESSION['dinero']?>€</h1>
<?php session_destroy();?>

<input type="button" value="Salir del casino" onclick="location.href='<?=$_SERVER['PHP_SELF'];?>'">
</form>