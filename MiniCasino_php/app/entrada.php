<form name="entrada">

    <h1>BIENVENIDO AL CASINO</h1>
    <p>Esta es su visita nº <?=(isset($_COOKIE['visitasUser']))?$_COOKIE['visitasUser']:''?></p>
    Introduzca el dinero con el que va a jugar <input type="number" name="dineroCliente">
    <input type="submit" name="ordenBut" value="Entrar">
</form>