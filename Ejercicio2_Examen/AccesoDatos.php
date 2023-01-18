<?php
include_once "Producto.php";
class AccesoDatos
{

    private static $modelo = null;
    private $dbh = null;
    private $consulta = null;
    public static function getModelo(){
        if (self::$modelo == null){
            self::$modelo = new AccesoDatos();
        }
        return self::$modelo;
    }
    
    // Creo un lista de alimentos, podría obtenerse de una base de datos
    private function __construct(){
        
        try {
            $dsn = "mysql:host=localhost;dbname=empresa;charset=utf8";
            $this->dbh = new PDO($dsn,"root","7388");
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Error de conexión ".$e->getMessage();
            exit();
        }
        
        $this->consulta = $this->dbh->prepare("SELECT * FROM productos WHERE
         `PRODUCTO_NO` NOT IN (SELECT PRODUCTO_NO from pedidos);");

    }



    public function obtenerProductos():array
    {
        $tablaP = [];
        $this->consulta->setFetchMode(PDO::FETCH_CLASS, 'Producto');
        if($this->consulta->execute())
        {
            $tablaP = $this->consulta->fetchAll();
        }

        return $tablaP;
    }






}