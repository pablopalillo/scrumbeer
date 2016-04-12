<?php 

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Url;

class IndexController extends Controller
{
 
    public function IndexAction()
    {
        $this->view->titulo = "Index";
        $this->view->name = "el padrino";
    }
    
}