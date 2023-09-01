<?php
require_once 'app/models/products.model.php';

class productController {
    private $model;
    private $view;

        public function __construct(){
            $this->model = new productModel();
            $this->view = new productView();
        }

        public function showProducts(){
          $products = $this->model->getProducts();
          $this->view->showProducts($products);
        }
}