<?php
class Producto {
// ... constructor y método listar() ...
public function crear($nombre, $precio) { // NUEVO
$sql = "INSERT INTO productos (nombre, precio) VALUES ('$nombre', '$precio')";
return $this->db->query($sql);
}
public function buscarPorId($id) {
$sql = "SELECT * FROM productos WHERE id = $id";
return $this->db->query($sql)->fetch_assoc();
}
public function actualizar($id, $nombre, $precio) {
$sql = "UPDATE productos SET nombre='$nombre', precio='$precio' WHERE id=$id";
return $this->db->query($sql);
}
public function borrar($id) { // NUEVO
$sql = "DELETE FROM productos WHERE id=$id";
return $this->db->query($sql);
}
}