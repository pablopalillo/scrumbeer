<?php
use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
use Phalcon\Config\Adapter\Ini as ConfigIni;

define('APP_PATH', realpath('..') . '/');

try {
    
    $config = new ConfigIni(APP_PATH . 'app/config/config.ini');
    
    // Register an autoloader
    $loader = new Loader();
    $loader->registerDirs(array(
        APP_PATH. $config->dirs->controllers,
        APP_PATH. $config->dirs->models,
        APP_PATH. $config->dirs->formsDir
    ))->register();
    // Create a DI
    $di = new FactoryDefault();
    $di->set('db', function() use ($config) {
       return new \Phalcon\Db\Adapter\Pdo\Sqlite(array( 
         "dbname" => $config->databasesqlite->dbname
       )

       );
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
        function () use ($config) {
    
            $view = new View();
    
            $view->setViewsDir(APP_PATH.$config->dirs->viewsDir);
    
            $view->registerEngines(
                array(
                    ".phtml" => 'Phalcon\Mvc\View\Engine\Volt'
                )
            );
    
            return $view;
        }
    );
    
    // Setup a base URI so that all generated URIs include the "tutorial" folder
    $di->set('url', function () use ($config) {
        $url = new UrlProvider();
        $url->setBaseUri($config->dirs->baseUri);
        return $url;
    });
    // Handle the request
    $application = new Application($di);
    echo $application->handle()->getContent();
    
} catch (\Exception $e) {
     echo "Exception: ", $e->getMessage();
}