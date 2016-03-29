<?php 

use Phalcon\Mvc\Controller;

class UsuariosController extends Controller
{
 
    public function IndexAction()
    {
        
    }
    
    public function guardarAction()
    {
        $usuario    =   new  Usuarios();
        $usuario->estado = '1';
        $result     =       $usuario->save($this->request->getPost(), array('nombre','apellidos','telefono'));
        
        if( $result )
         {
             echo "Usuario registrado.";
             $this->view->disable();    
             die;
         }   
        else
        {
             echo "Ashh! fallo : <br /> ";
             
            foreach ($user->getMessages() as $message) 
            {
                echo $message->getMessage(), "<br/>";
            }
            
             $this->view->disable();    
             die;
        }
         
         
        
    }
    
}