<!DOCTYPE html>
<html>
    <head>
        <title> <?= $titulo ?>  || Srum Beer</title>
        <?= $this->assets->outputCss() ?>
        <link rel="stylesheet" href="<?= $this->url->getStatic('public/css/foundation.min.css') ?>" type="text/css" />
        <link rel="stylesheet" href="<?= $this->url->getStatic('public/css/app.css') ?>" type="text/css" />
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
                            <a href="#">Calendario</a>
                            <ul class="submenu menu vertical" data-submenu>
                                <li><?= $this->tag->linkTo(['calendario', 'Calendario']) ?></li>
                            </ul>
                        </li>
                        <li><?= $this->tag->linkTo(['usuarios', 'Usuarios']) ?></li>
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
        
        <?php if (isset($this->flash->success)) { ?>
            <?php if ((empty($this->flash->success) ? ($this->flash->success) : ($this->flash->success))) { ?>
            <div class="row">
                <div class="small-12 medium-12 columns alert alert callout">
                    <?= $this->flash->success ?>
                </div>
            </div>
            <?php } ?>
        <?php } ?>
        
        <div class="column row main">
            
    <div class="column row main">

<div class="row marketing">
    <div class="col-lg-12">
      <h4>calendario</h4>
      
        <div id='calendar'></div>

    </div>     
</div>


<div class="modal fade" id="modalCitaNueva" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Nueva cita</h4>
          </div>
          <div class="modal-body">
                <form class="form-horizontal" id="frm-event" role="form">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="descripcionCita">Descripción</label>
                        <div class="col-sm-15">
                            <textarea id="descripcionCita" name="event[descripcionCita]" style="width: 76%;" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-2 control-label">Inicio
                            <span class="label label-success" id="startDate"></span></label>
                            <input type="hidden" id="EventStartDate" name="event[startDate]" value=""/>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-2 control-label">Fin 
                            <span class="label label-warning" id="enDate"></span></label>
                            <input type="hidden" id="EventEnDate" name="event[enDate]" value=""/>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="control-label">Color del evento </label>
                            <div id="cp2" class="input-group colorpicker-component">
                                  <input id="color" type="text" value="#23527c" name="event[color]" class="form-control"/>
                                  <span class="input-group-addon"><i></i></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" id="savEvent">Guardar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </div>

	 	<style>

	
		    #calendar {
		        max-width: 900px;
		        margin: 50px auto;
		    }

		    .closeon{
		        position: absolute;
		        top: 0;
		        right: 0;
		        margin-top: 3px;
		        margin-right: 3px;
		        z-index: 10;
		    }

		</style>
	
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
        <?= $this->assets->outputJs() ?>
    </body>
</html>