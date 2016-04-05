<ul class="tabs" data-tabs id="example-tabs">
    <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Reviews</a></li>
    <li class="tabs-title"><a href="#panel2">Nuestros Usuarios</a></li>
</ul>
<div class="tabs-content" data-tabs-content="example-tabs">
    <div class="tabs-panel is-active" id="panel1">
        <h4>Reviews</h4>
        <div class="media-object stack-for-small">
            <div class="media-object-section">
                <img class="thumbnail" src="http://placehold.it/200x200">
            </div>
            <div class="media-object-section">
                <h5>Mike Stevenson</h5>
                <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.</p>
            </div>
        </div>
        <div class="media-object stack-for-small">
            <div class="media-object-section">
                <img class="thumbnail" src="http://placehold.it/200x200">
            </div>
            <div class="media-object-section">
                <h5>Mike Stevenson</h5>
                <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you</p>
            </div>
        </div>
        <div class="media-object stack-for-small">
            <div class="media-object-section">
                <img class="thumbnail" src="http://placehold.it/200x200">
            </div>
            <div class="media-object-section">
                <h5>Mike Stevenson</h5>
                <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you</p>
            </div>
        </div>
    </div>
    <div class="tabs-panel" id="panel2">
        <div class="row medium-up-3 large-up-5">
            
            <?php foreach ($usuarios as $usuario) { ?>
                <div class="column">
                    <!-- 
                        URL automatica desde config del index path 
                        en este caso /public/ 
                    -->
                    <?php if ($usuario->genero == 1) { ?>
                        <?php echo $this->tag->image(array('images/man.png', 'class' => 'thumbnail')); ?>
                    <?php } else { ?>
                        <?php if ($usuario->genero == 2) { ?>
                             <?php echo $this->tag->image(array('images/women.png', 'class' => 'thumbnail')); ?>
                        <?php } else { ?>
                                UNDEFINED
                        <?php } ?>
                    <?php } ?>    
                        
                    <h5><?php echo $usuario->nombre; ?> <?php echo $usuario->apellidos; ?> </h5>
                    <p><?php echo $usuario->descripcion; ?></p>
                   <!-- <a href="#" class="button hollow tiny expanded">Buy Now</a> -->
                </div>
            <?php } ?>
            
        </div>
    </div>
</div>