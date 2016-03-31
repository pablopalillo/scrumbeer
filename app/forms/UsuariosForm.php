<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Select;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Numericality;
use Phalcon\Validation\Validator\Regex;
use Phalcon\Validation\Validator\StringLength;




class UsuariosForm extends Form
{
        /**
     * Usuarios the products form
     */
    public function initialize($entity = null, $options = array())
    {
 
        $this->add(new Hidden("id"));
        

        $nombre = new Text("nombre");
        $nombre->setLabel("Nombre");
        $nombre->setFilters(array('striptags', 'string'));
     //   $nombre->setFilters('nombre', 'trim');
        $nombre->addValidators(
            array(
                new PresenceOf(
                    array(
                        'message' => 'Nombre es requerido'
                    )
                )
            )
        );
        $this->add($nombre);
        
        $apellidos = new Text("apellidos");
        $apellidos->setLabel("Apellidos");
        $apellidos->setFilters(array('striptags', 'string'));
     //   $apellidos->setFilters('apellidos', 'trim');
        $apellidos->addValidators(
            array(
                new PresenceOf(
                    array(
                        'message' => 'Apellidos requeridos'
                      
                    )
                )
            )
        );
        
        $this->add($apellidos);
        
        $telefono = new Text("telefono");
        $telefono->setLabel("telefono");
        $telefono->setFilters(array('striptags', 'string'));
   //     $telefono->setFilters('telefono', 'trim');

        $telefono->addValidators(
            array(
                new PresenceOf(
                    array(
                        'message' => 'telefono requeridos',
                        'cancelOnFail' => true
                    )
                ),
                new Numericality(
                    array(
                        'message' => 'solo numeros',
                        'cancelOnFail' => true
                    )
                ),
              /**  new Regex(
                    array(
                    'message' => 'El telefono debe ser numerico',
                    'pattern' => '/\+44[0-9]+/'
                     // 'allowEmpty' => true
                    )
                ),**/
                new StringLength(
                    array(
                    'messageMinimum' => 'Telefono ingresado no valido',
                    'min'            => 7
                    )
                ),
            )
        );
        $this->add($telefono);
        
        // Add a text element to put a hidden CSRF
        $this->add(new Hidden("csrf"));


    }
}

?>