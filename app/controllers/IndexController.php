<?php 

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
 
    public function IndexAction()
    {
        $this->view->titulo = "Index";
        $this->view->name = "el padrino";
    }
    
}