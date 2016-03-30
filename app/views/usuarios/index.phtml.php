<div>
    
    <h3>Usuarios Volt</h3>
    <div>
        <?php echo $this->tag->form("usuarios/guardar"); ?>
        
        <div>
         <label for="nombre">Nombre</label>
         <?php echo $this->tag->textField("nombre") ?>
        </div>
        
        <div>
         <label for="apellidos">Apellido</label>
         <?php echo $this->tag->textField("apellidos") ?>
        </div>
        
        <div>
         <label for="telefono">Telefono</label>
         <?php echo $this->tag->textField("telefono") ?>
        </div>
        
        
        <div>
            <?php echo $this->tag->submitButton("Guardar") ?>
        </div>
            
    </div>
</div>