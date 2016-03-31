<?php
use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

try {

    // Register an autoloader
    $loader = new Loader();
    $loader->registerDirs(array(
        '../app/controllers',
        '../app/models',
        '../app/forms'
    ))->register();

    // Create a DI
    $di = new FactoryDefault();

    $di->set('db', function(){
       return new \Phalcon\Db\Adapter\Pdo\Sqlite(array( 
          "dbname" => '/home/ubuntu/workspace/database.db'
       ));
    });

 /**   $di->set('db', function () {
        return new DbAdapter(array(
            "host"     => "localhost",
            "username" => "root",
            "password" => "",
            "dbname"   => "phalcon"
        ));
    });**/
    
    
    // Setup the view component
 /**   $di->set('view', function () {
        $view = new View();
        $view->setViewsDir('../app/views/');
        return $view;
    });
    **/
    
    // Plantillas Volt
    // Registering Volt as template engine
    $di->set(
        'view',
        function () {
    
            $view = new View();
    
            $view->setViewsDir('../app/views/');
    
            $view->registerEngines(
                array(
                    ".phtml" => 'Phalcon\Mvc\View\Engine\Volt'
                )
            );
    
            return $view;
        }
    );

    // Setup a base URI so that all generated URIs include the "tutorial" folder
    $di->set('url', function () {
        $url = new UrlProvider();
        $url->setBaseUri('/public/');
        return $url;
    });

    // Handle the request
    $application = new Application($di);

    echo $application->handle()->getContent();

} catch (\Exception $e) {
     echo "Exception: ", $e->getMessage();
}