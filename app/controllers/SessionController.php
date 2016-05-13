<?php

class SessionController extends ControllerBase
{

    private function _registerSession($user)
    {
        $this->session->set(
            'auth',
            array(
                'id'   => $user->id,
                'name' => $user->nombre
            )
        );
    }

    /**
     * This action authenticate and logs a user into the application
     */
    public function startAction()
    {
        if ($this->request->isPost()) 
        {

            // Get the data from the user
            $email    = $this->request->getPost('usuario');
            $password = $this->request->getPost('password');

            // Find the user in the database
            $user = Usuarios::findFirst(
                array(
                    "(usuario = :usuario: ) AND password = :password: AND estado = '1'",
                    'bind' => array(
                        'usuario'    => $usuario,
                        'password' => sha1($password)
                    )
                )
            );

            if ($user != false) 
            {

                $this->_registerSession($user);

                $this->flash->success('Welcome ' . $user->name);

                // Forward to the 'invoices' controller if the user is valid
                return $this->dispatcher->forward(
                    array(
                        'controller' => 'index',
                        'action'     => 'index'
                    )
                );
            }

            $this->flash->error('Wrong email/password');
        }

        // Forward to the login form again
        return $this->dispatcher->forward(
            array(
                'controller' => 'usuario',
                'action'     => 'login'
            )
        );
    }
}