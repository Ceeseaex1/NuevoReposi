<?php
Class persistDB {
 public $conn;
 public function connect() {
 try {
 $this->conn = new PDO('mysql:host=bfngjzxj17wvecjd0vaz-mysql.services.clever-cloud.com;dbname=bfngjzxj17wvecjd0vaz', 'um8kgqisqiu8ackm', 'wYLUdnsmKmIcYcuaon4I', array(
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 } catch (PDOException $e) {
 echo 'ERROR: ' . $e->getMessage();
 }
 }
 public function findAll() {
 try {
 $stmt = $this->conn->prepare('SELECT * FROM usuarios');
 $stmt->execute(array());
 $result = $stmt->fetchAll();
 return $result;
 } catch (PDOException $e) {
 echo 'ERROR: ' . $e->getMessage();
 }
 }
}
class Usuarios {
 private $id;
 private $nombre;
 private $correo;
 private $usuario;
 private $clave;

 public function __construct($data) {

 $this->nombre = $data['nombre'];
 $this->correo = $data['correo'];
 $this->usuario= $data['usuario'];
 $this->clave = $data['clave'];
 }
 public function guardarUsuario($persistDB, array $data = null) {
 try {
 $this->nousuaruiombre = isset($data['usuario']) ?
$data['usuario'] : $this->usuario;
 $this->nombre = isset($data['nombre']) ? $data['nombre'] : $this->nombre;
 $this->correo = isset($data['correo']) ? $data['correo'] : $this->correo;
 $this->clave = isset($data['clave']) ? $data['clave'] : $this->clave;
 
 $sql = "INSERT INTO usuario (nombre, correo, usuario, clave)
VALUES (:NombEstu, :CorreoEstu, :UsuarioEstu, :ClaveEstu,)";
 $query = $persistDB->prepare($sql);
 $r = $query->execute(array(

 ':NombEstu' => $this->nombre,
 ':CorreoEstu' => $this->correo,
 ':UsuarioEstu' => $this->usuario,
 ':ClaveEstu' => $this->clave
 ));
 } catch (PDOException $e) {
 throw new Exception($e->getMessage());
 }
 }
}
?>