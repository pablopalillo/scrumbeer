a:5:{i:0;s:233:"<!DOCTYPE html>
<html lang="ES">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>";s:5:"title";N;i:1;s:2455:" || Srum Beer</title>
        <?php echo $this->assets->outputCss(); ?>
        <link rel="stylesheet" href="<?php echo $this->url->getStatic('public/css/foundation.min.css'); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->url->getStatic('public/css/app.css'); ?>" type="text/css" />
    </head>
    <body>
        <div class="top-bar">
            <div class="row">
                <div class="top-bar-left">
                    <ul class="dropdown menu" data-dropdown-menu>
                        <li class="menu-text">Srum Beer</li>
                        <li class="has-submenu">
                            <a href="#">One</a>
                            <ul class="submenu menu vertical" data-submenu>
                                <li><a href="#">One</a></li>
                                <li><a href="#">Two</a></li>
                                <li><a href="#">Three</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Agenda</a>
                            <ul class="submenu menu vertical" data-submenu>
                                <li><a href="calendario">Calendario</a></li>
                            </ul>
                        </li>
                        <li><?php echo $this->tag->linkTo(array('usuarios', 'Usuarios')); ?></li>
                        <li><?php echo $this->tag->linkTo(array('productos', 'Productos')); ?></li>
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="menu">
                        <li><?php echo $this->tag->linkTo(array('login', 'Acceder')); ?></li>
                        <li><input type="search" placeholder="Search"></li>
                        <li><button type="button" class="button">Search</button></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <?php if (isset($this->flash->success)) { ?>
            <?php if ((empty($this->flash->success) ? ($this->flash->success) : ($this->flash->success))) { ?>
            <div class="row">
                <div class="small-12 medium-12 columns alert alert callout">
                    <?php echo $this->flash->success; ?>
                </div>
            </div>
            <?php } ?>
        <?php } ?>
        
        <div class="column row main">
            ";s:7:"content";N;i:2;s:683:"
        </div>
        <div class="row column">
            <hr>
            <ul class="menu">
                <li>Yeti Store</li>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li class="float-right">Copyright 2016</li>
            </ul>
        </div>
        
            <!-- scrips zone -->
        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
        <?php echo $this->assets->outputJs(); ?>
    </body>
</html>";}