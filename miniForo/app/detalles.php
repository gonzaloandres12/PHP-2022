<div>
<b> Detalles:</b><br>
<table>
<tr><td>Longitud:          </td><td><?= longitud($_REQUEST['comentario']); ?></td></tr>
<tr><td>Nº de palabras:    </td><td><?= nPalabras($_REQUEST['comentario'], 1); ?></td></tr>
<tr><td>Letra + repetida:  </td><td><?=letraMasRep($_REQUEST['comentario']);?></td></tr>
<tr><td>Palabra + repetida:</td><td><?=palabraMasRep($_REQUEST['comentario']);  ?></td></tr>
</table>
</div>

