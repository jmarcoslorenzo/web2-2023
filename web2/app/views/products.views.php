<?php

<?php
require_once 'app/controllers/products.controller.php';

class productController {
    private $model;
    private $view;

    public function __construct(){
        $this->smarty = new Smarty(); //inicializo smarty
    }


    function showCProducts($products){
        $this->smarty->assign('productos', $products);
        $this->smarty->display('table.tpl');
    }