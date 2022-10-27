<form name="finpedido" method="POST">
<h1>La Fruteria del siglo XXI</h1>

<?php if(isset($_SESSION['pedidos'])){
?>
<p>Este Es su pedido:</p>
<table>    
    <?php
    
        foreach($_SESSION['pedidos'] as $key => $value) {
            ?>
            <tr> 
                <td> <?php echo $key ?> </td> 
         
                 <td> <?php echo $value ?> </td>
             </tr>
          <?php
         }
    ?>


</table>
<?php }?>
<?php session_destroy()?>
<p>Muchas gracias por el pedido</p>
<input type="button" value="NUEVO CLIENTE" onclick="location.href='<?=$_SERVER['PHP_SELF'];?>'">
</form>