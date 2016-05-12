<div class="row">

    <div class="small-12 medium-6 columns">

        <?php echo $this->tag->form(array('usuarios/guardar', 'method' => 'post')); ?>
        
            <?php foreach ($form as $field) { ?>
        
                <?php $messages = $form->getMessagesFor($field->getName()); ?>

                <?php if ($this->length($messages) > 0) { ?>
                    <div class="messages alert callout">
                        <?php foreach ($messages as $message) { ?>
                            <div class="message">
                              <p><?php echo $message; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <div class="row">
                     <label for="<?php echo $field->getName(); ?>"> <?php echo $field->getLabel(); ?>
                     <?php echo $field; ?>
                      </label>
                </div>
            <?php } ?>
             <div class="row">
                <div class="small-12 medium-6">
                    <?php echo $this->tag->submitButton(array('Guardar', 'class' => 'button text-center')); ?>
                </div>   
             </div>
        <?php echo $this->tag->endForm(); ?>
    </div>          

</div>