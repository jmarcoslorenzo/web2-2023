<?php
 
class productModel {

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tienda;charset=utf8','root','');
    }

    function getProductos(){
        $query = $this->db->prepare("SELECT * FROM producto");
        $query->execute();
        $productos = $query->fetch(PDO::FETCH_OBJ);

        return $productos;
    }

}