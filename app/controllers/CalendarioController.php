<?php

class CalendarioController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view->titulo = "Calendario";
        $this->view->name = "Mi calendario";
    	$this->assets
//            ->addCss('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',false,'', array('rel'=> 'stylesheet', 'integrity'=>'sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7', 'crossorigin'=>'anonymous'))
            ->addCss('public/vendor/fullcalendar/lib/fullcalendar.min.css',true,'',array('rel'=> 'stylesheet') )
            ->addCss('public/vendor/fullcalendar/lib/fullcalendar.print.css',true,'',array('rel'=> 'stylesheet', 'media'=>'print') )
            ->addCss('public/vendor/fullcalendar/lib/bootstrap-fullcalendar.css',true,'',array('rel'=> 'stylesheet') )
            ->addCss('public/vendor/fullcalendar/scheduler.min.css',true,'',array('rel'=> 'stylesheet') )
            ->addCss('//cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.min.css',false,'',array('rel'=> 'stylesheet') )
            ->addCss('public/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css',true,'',array('rel'=> 'stylesheet') );

        $this->assets
            ->addJs('public/vendor/fullcalendar/lib/moment.min.js',true)
            //->addJs('public/vendor/fullcalendar/lib/jquery.min.js',true)
            ->addJs('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js',false,'',array('integrity'=>'sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS', 'crossorigin'=>'anonymous'))
            ->addJs('public/vendor/fullcalendar/lib/fullcalendar.min.js',true)
            ->addJs('http://fullcalendar.io/js/fullcalendar-2.6.0/lang-all.js',false)
            ->addJs('public/vendor/fullcalendar/lib/gcal.js',true)
            ->addJs('public/vendor/fullcalendar/scheduler.js',true)
            ->addJs('public/vendor/bootbox/bootbox.min.js',true)
            ->addJs('public/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')
			->addJs('public/js/myCalendar.js',true); 
    }


    public function cargarHorariosAction()
    {
    	$data = array(
			array('id' => 1, 'color'  => 'rgba(35,20,212,7)', 'resourceId' => 'a', 'start' => '2016-01-05T02:00:00', 'end' => '2016-01-05T07:00:00', 'title' => 'event 1'),
			array('id' => 2, 'color'  => '#000', 'resourceId' => 'b', 'start' => '2016-01-06T05:00:00', 'end' => '2016-01-06T22:00:00', 'title' => 'event 2'),
			array('id' => 3, 'color'  => '#000', 'resourceId' => 'c', 'start' => '2016-01-07T03:00:00', 'end' => '2016-01-07T08:00:00', 'title' => 'event 4'),
		);

		echo json_encode($data);die;
    }

    public function guardarHorarioAction()
    {
    	$data = $_POST['event'];
		$data['id'] = uniqid();

		echo json_encode($data);die;
    }

}

