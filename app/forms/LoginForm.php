<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Password;

class LoginForm extends Form
{
        /**
     * Usuarios the products form
     */
    public function initialize($entity = null, $options = array())
    {
 
        $user = new Text("usuario");
        $user->setLabel("Usuario");
        $user->setFilters(array('striptags', 'string'));
     
        $user->addValidators(
            array(
                new PresenceOf(
                    array(
                        'message' => 'Nombre es requerido'
                    )
                )
            )
        );
        $this->add($user);
        
        // Add a text element to put a hidden CSRF
        $csrf = new Hidden(array(
            'name' => $this->security->getTokenKey(),
            'value' => $this->security->getToken(),
            'id' => 'xtoken'
        ));

       $csrf->addValidator(new Identical(array(
            'value' => $this->security->getSessionToken(),
            'message' => 'CSRF validation failed'
        )));
        $this->add($csrf);

    }
}

?>