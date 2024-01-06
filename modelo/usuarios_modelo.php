<?php 

class Usuarios_modelo{
    private $db;
    private $usuarios;

    public function __construct(){
        require_once("conectar.php");
        $this->db = Conectar::conexion();
        $this->usuarios = array();
    }

    public function get_usuarios(){
        $consulta = $this->db->query("SELECT * FROM usuarios_pass");
        while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
            $this->usuarios[] = $filas;
        }

        return $this->usuarios;
    }

    public function get_datos_usuarios(){
        $consulta = $this->db->query("SELECT * FROM datos_usuarios");
            while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
                $this->usuarios[] = $filas;

            }
        return $this->usuarios;    
        
    }
}

?>