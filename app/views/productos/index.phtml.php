<div id="productos">
    

   <?php foreach ($productos as $prod) { ?>
   <div class="row">
        <div class="small-12 medium-6 columns">
            <?php echo $prod->producto; ?>
        </div>
        
        <div class="small-12 medium-6 columns">   
            <div>
                <?php echo $prod->descripcion; ?>
            </div>
            <div>
                <?php echo $prod->unidades; ?>
            </div>
            <div>
                <?php echo $prod->valor; ?>
            </div>
        </div>
        
    </div>
    <?php } ?>

</div>