/**
 * Funciones auxiliares de javascripts 
 */
function confirmarBorrar(nombre,id){
  if (confirm("¿Quieres eliminar el usuario:  "+nombre+"?"))
  {
   document.location.href="?orden=Borrar&id="+id;
  }
}

function confimarTerminar(){
  if (confirm("¿Quieres guardar los datos?"))
  {
   document.location.href="?orden=Terminar";
  }
}