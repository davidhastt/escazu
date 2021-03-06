<?php

class Usuario {

    private $id_usuario;
    private $nombre;
    private $apellidoP;
    private $apellidoM;
    private $fechaNac;
    private $sexo;
    public $email;
    public $password;
    public $puesto;
    public $db;
    public $listResult;
    

    public function __construct() {
        $this->db = Database::connect();
    }
    
    public function getUsurio($id_usuario){
        $strsql="SELECT * FROM usuarios WHERE id_usuario=" . $id_usuario;
        $this->listResult = $this->db->query($strsql);                
    }

    
    public function cambiarPuesto($id_usuario){
        //primero buscar el usuario por su id y obtner su puesto
        //una vez sabiendo su puesto: cambiarlo por el opuesto
        $strsql="SELECT puesto FROM usuarios WHERE id_usuario=" . $id_usuario;
        $MRO=$this->listResult = $this->db->query($strsql);
        $puesto=$MRO->fetch_object()->puesto;
        if ($puesto==0){
            $strsql="UPDATE usuarios SET puesto=1 WHERE id_usuario=" . $id_usuario;            
            $this->listResult = $this->db->query($strsql);
        }else{
            $strsql="UPDATE usuarios SET puesto=0 WHERE id_usuario=" . $id_usuario;
            $this->listResult = $this->db->query($strsql);
        }
    }
    
   
    public function borrarUsuario($id_usuario){
        $strsql="DELETE FROM usuarios WHERE id_usuario=" . $id_usuario;
        $this->listResult = $this->db->query($strsql);
    }

    function getListResult() {
        return $this->listResult;
    }

    function setListResult($strsql) {
        $this->listResult = $this->db->query($strsql);
    }    

    function getPuesto() {
        return $this->puesto;
    }

    function setPuesto($puesto) {
        $this->puesto = $puesto;
    }

    public function login() {
        //comprobar si existe el usuario
        $result = false;
        $email = $this->email;
        $password = $this->password;


        $sql = "SELECT * FROM usuarios WHERE email='$email' AND confirmado=1";
        $login = $this->db->query($sql);

        if ($login && $login->num_rows == 1) {
            $usuario = $login->fetch_object();
            //verificar contrase??a
            $verify = password_verify($password, $usuario->password);
            if ($verify) {
                $result = $usuario;
            }
        }

        return $result;
    }

    public function buscarXapellidoP($apellidoP) {
        $strsql = "SELECT usuario.id_usuario, usuario.nombre, usuario.apellidoP, usuario.apellidoM, usuario.id_unidad, usuario.email, usuario.tramite, usuario.telefono1, usuario.telefono2, cita.id_cita FROM usuario INNER JOIN cita ON usuario.id_usuario = cita.id_usuario WHERE usuario.apellidoP LIKE '" . $apellidoP . "'";
        $resultado = $this->db->query($strsql);
        return $resultado;
    }

    public function actualiza() {//este metodo va a guardar las propiedades que esten definidas
        $strsql = "UPDATE usuarios SET "
                ."nombre='".$this->nombre . "', "
                ."apellidoP='".$this->apellidoP . "', "
                ."apellidoM='".$this->apellidoM . "', "
                ."fechaNac='".$this->fechaNac . "', "
                ."sexo='".$this->sexo . "', "
                ."email='".$this->email . "', "                
                ."puesto=".$this->puesto;

        $strsql .= " WHERE id_usuario= " . $this->id_usuario;
        $save = $this->db->query($strsql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }


    public function IdentificaXid($id_usuario) {
        $strsql = "SELECT * FROM usuario WHERE id_usuario=" . $id_usuario;
        $resultado = $this->db->query($strsql);
        return $resultado->fetch_object();
    }

    public function guardar($fieldList, $user) {//este metodo va a guardar las propiedades que esten definidas
        $strsql = "INSERT INTO usuarios (";
        $strsqlFields = "";
        $strsqlValues = ") VALUES(";
        //obtener lista de metodos get
        $getList = array("getNombre", "getApellidoP", "getApellidoM", "getFechaNac", "getSexo", "getEmail", "getPassword",);

        $i = 0;
        //este for es para concatenar los campos
        foreach ($getList as $metodo) {
            $valor = $user->$metodo();
            if (isset($valor)) {
                $strsqlFields .= $fieldList[$i];
                $strsqlValues .= "'" . $valor . "'";
                $strsqlFields .= ", ";
                $strsqlValues .= ", ";
            }
            $i++;
        }

        $strsqlFields = substr($strsqlFields, 0, -2); //quitamos la ultima coma a la cadena de campos
        $strsqlValues = substr($strsqlValues, 0, -2); //quitamos la ultima coma a la cadena de valores

        $strsql .= $strsqlFields . $strsqlValues . ")";

        $save = $this->db->query($strsql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    //metodos get y set

    function getNombre() {
        return $this->nombre;
    }

    function getPassword() {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
        //return $this->password;
        
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function getApellidoP() {
        return $this->apellidoP;
    }

    function getApellidoM() {
        return $this->apellidoM;
    }

    function getFechaNac() {
        return $this->fechaNac;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getEmail() {
        return $this->email;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidoP($apellidoP) {
        $this->apellidoP = $apellidoP;
    }

    function setApellidoM($apellidoM) {
        $this->apellidoM = $apellidoM;
    }

    function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setEmail($email) {
        $this->email = $email;
    }

}
