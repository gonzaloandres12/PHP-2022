<form name="casino">
<p>Disponde de <?php echo $_SESSION['dinero']?> para jugar</p>
Cantida a apostar:<input type="number" name="cantApuesta"><br><br>
Tipo de apuesta:Par<input type="radio" name="tipoApuesta" value="Par" checked>Impar<input type="radio" name="tipoApuesta" value="Impar">
<br><br>
<input type="submit" name="ordenCasino" value="Apostar">
<input type="submit" name="ordenCasino" value="Abandonar">
</form>