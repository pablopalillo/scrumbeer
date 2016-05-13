<?php

use Phalcon\Mvc\Model;

class Usuarios extends Model
{
    public $id;
    
    public $nombre;
    
    public $apellidos;
    
    public $genero;
    
    public $telefono;
    
    public $usuario;
    
    public $password;
    
    public $estado;
    
    public $descripcion;
    
    /**
     * Construiremos la relacion de Uno a Muchos
     * Indice en Usuarios.genero con genero.id_genero
     * 
     * */
    public function initialize()
    {
        $this->belongsTo(
            'genero',   // indice en usuarios
            'Genero',   // tabla referida
            'id_genero',       // Campo referido
            array(
                'reusable' => true
            )
        );
    }
    
}