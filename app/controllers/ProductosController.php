<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model\Query;


class ProductosController extends Controller 
{
    public function IndexAction()
    {
        $productos  =   Productos::find();
        
        $this->view->titulo     = "Productos";
        $this->view->productos  = $productos;
    }
}