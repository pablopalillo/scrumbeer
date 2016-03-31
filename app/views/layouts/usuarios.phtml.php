<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/public/css/foundation.min.css" type="text/css" />
        <link rel="stylesheet" href="/public/css/app.css" type="text/css" />
        <title> <?php echo $titulo; ?>  || Srum Beer</title>
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
                        <li><?php echo $this->tag->linkTo(array('usuarios', 'Usuarios')); ?></li>
                        <li></li>
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="menu">
                        <li><input type="search" placeholder="Search"></li>
                        <li><button type="button" class="button">Search</button></li>
                    </ul>
                </div>
            </div>
        </div>
            
        <div class="column row main">
            
    <div class="column row">
        <hr>
        <article class="small-12 columns">
            <header>
                <h1><?php echo $titulo; ?></h1>
            </header>
            <section>
                <?php echo $this->getContent(); ?>
            </section>
        </article>
    </div>

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
    </body>
</html>