<div id="productos">
    
    <div class="row medium-up-3 large-up-5">
   <?php foreach ($productos as $prod) { ?>
       <div class="column" >
           <h5><?php echo $prod->producto; ?></h5>
           <p> <?php echo $prod->descripcion; ?></p>
           <p><strong>Cant:</strong> <?php echo $prod->unidades; ?>  </p>
           <h3><small>$<?php echo $prod->valor; ?></small></h3>
           <a href="#" class="button hollow tiny expanded">Buy Now</a>
       </div>
    <?php } ?>
    </div>
</div>