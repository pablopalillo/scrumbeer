a:5:{i:0;s:214:"<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/public/css/foundation.min.css" type="text/css" />
        <link rel="stylesheet" href="/public/css/app.css" type="text/css" />
        <title>";s:5:"title";N;i:1;s:1585:" || Srum Beer</title>
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
        
        <?php if ((empty($this->flash->success) ? ($this->flash->success) : ($this->flash->success))) { ?>
        <div class="row">
            <div class="small-12 medium-12 columns alert alert callout">
                <?php echo $this->flash->success; ?>
            </div>
        </div>
        <?php } ?>
        
        <div class="column row main">
            ";s:7:"content";N;i:2;s:634:"
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
</html>";}