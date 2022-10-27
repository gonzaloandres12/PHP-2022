<form name="fruteria" method="POST">
<h1>La Fruteria del siglo XXI</h1>

<h2>Realice su compra <?php echo $_SESSION['nombreCliente']; ?></h2>

<?php if(isset($_SESSION['pedidos'])){
?>
<p>Este es su pedido:</p>
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

Selecciona la fruta:<select name="frutas" >
        <option value="Platano">Platano</option>
        <option value="Manzana">Manzana</option>
        <option value="Naranja">Naranja</option>
        <option value="Limones">Limon</option>
      </select>
    Cantidad:<input type="number" name="cantidad">
    Anotar:<input type="submit" name="ordenFrut" value="Anotar">
    Terminar:<input type="submit" name="ordenFrut" value="Terminar">

</form>