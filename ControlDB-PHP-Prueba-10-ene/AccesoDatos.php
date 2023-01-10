<?php
include_once "Cliente.php";
include_once "Pedido.php";
class AccesoDatos
{

    private static $modelo = null;
    private $dbh = null;
    private $stmt = null;
    private $consultaLogin;
    private $consultaPedidos;
    private $update;
    public static function getModelo(){
        if (self::$modelo == null){
            self::$modelo = new AccesoDatos();
        }
        return self::$modelo;
    }
    
    // Creo un lista de alimentos, podría obtenerse de una base de datos
    private function __construct(){
        
        try {
            $dsn = "mysql:host=localhost;dbname=etienda;charset=utf8";
            $this->dbh = new PDO($dsn,"root","root");
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Error de conexión ".$e->getMessage();
            exit();
        }
        
        $this->consultaLogin = $this->dbh->prepare("select * from clientes where nombre = ? and clave = ?");
        $this->consultaPedidos = $this->dbh->prepare("select * from pedidos where cod_cliente = ?");
        $this->update = $this->dbh->prepare("UPDATE clientes SET veces = veces+1  WHERE cod_cliente = ?; ");
    }


    public function comprobarLogin(String $nombre, String $clave)
    {
        $usuario = null;

        $this->consultaLogin->bindValue(1,$nombre);
        $this->consultaLogin->bindValue(2,$clave);

        $this->consultaLogin->setFetchMode(PDO::FETCH_CLASS, 'Cliente');
        $this->consultaLogin->execute();
        $usuario = $this->consultaLogin->fetch();
        return $usuario;

    }


    public function pedidosCliente($cod_cliente):array
    {
        $listaPedidos = [];

        $this->consultaPedidos->bindValue(1,$cod_cliente);
        $this->consultaPedidos->setFetchMode(PDO::FETCH_CLASS, 'Pedido');
        $this->consultaPedidos->execute();
        while($pedido = $this->consultaPedidos->fetch())
        {
            $listaPedidos[] = $pedido;
        }

        return $listaPedidos;
    }


    public function updateEntradas($cod_cliente)
    {
        $this->update->bindValue(1,$cod_cliente);
        $result = $this->update->execute();
        return $result;
    }






}