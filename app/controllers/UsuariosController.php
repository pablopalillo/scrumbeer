<?php 

use Phalcon\Mvc\Controller;

class UsuariosController extends Controller
{
 
    public function IndexAction()
    {
        $usuarios = Usuarios::find();
        
        $this->view->titulo     = "Usuarios";
        $this->view->usuarios   = $usuarios;
        
    }
    
    public function adduserAction()
    {
        $this->view->titulo             = "Crear Usuario";
        $this->view->form               = new UsuariosForm;
    }
    
    public function guardarAction()
    {
        $this->view->titulo             = "Crear Usuario";
        $this->view->form               = new UsuariosForm;
        
        if ($this->request->isPost()) 
        {
            $usuario            =   new  Usuarios();    
            $data               = $this->request->getPost();
            
            if(!$this->view->form->isValid($data,$usuario))
            {
                foreach ($this->view->form->getMessages() as $message) 
                {
                    $this->flash->error($message);
                }

            }
            else
            {
                $usuario->estado    = '1';
                // Para sqllite que no existen los AUTO numerico.
                $usuario->id        = 'ROWID';
                $result             =       $usuario->save($this->request->getPost(), array('nombre','apellidos','telefono'));    
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