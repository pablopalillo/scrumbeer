<?php 

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model\Query;

class UsuariosController extends Controller
{
 
    public function IndexAction()
    {
        $usuarios = Usuarios::find();
        
        $this->view->titulo     = "Usuarios";
        $this->view->usuarios   = $usuarios;
        
    }
    

    public function guardarAction()
    {
        $this->view->titulo             = "Crear Usuario";
        $this->view->form               = new UsuariosForm;
        
        if ($this->request->isPost()) 
        {
            $usuario            =   new  Usuarios();    
            $data               = $this->request->getPost();
            
            if($this->view->form->isValid($data,$usuario))
            {
                $usuario->estado    = '1';
                // Para sqllite que no existen los AUTO numerico.
                // vamo a emularlo
                $phql = "SELECT MAX(id) as id FROM Usuarios";
                $rs   = $this->modelsManager->executeQuery($phql);

                if(count($rs) > 0 )
                {
                    foreach ($rs as $field) 
                    {
                        $usuario->id = $field->id + 1 ;    
                    }
                }
                else 
                {
                    $usuario->id = 0;   
                    
                }
                

                $result     =  $usuario->save($this->request->getPost(), array('nombre','apellidos','genero','telefono','descripcion'));    
                 if( !$result )
                 {
                         foreach ($usuario->getMessages() as $message) 
                         {
                            $this->flash->error($message);
                         }
                         
                        $this->dispatcher->forward(['action' => 'index']);
                        return;
                 } 
                             
                $this->view->form->clear();
                $this->flash->success("Usuario Creado");
                $this->dispatcher->forward(['action' => 'index']);
                return;
            
            }

            
        }
        
    }
    
}