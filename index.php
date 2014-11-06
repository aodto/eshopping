<?php
session_start();
mb_internal_encoding("UTF-8");

define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', __DIR__);

/*
 * Include all files
 */
include ROOT_PATH.DS.'lib'.DS.'di.php';
include ROOT_PATH.DS.'lib'.DS.'base.php';
include ROOT_PATH.DS.'lib'.DS.'config.php';
include ROOT_PATH.DS.'lib'.DS.'database.php';
include ROOT_PATH.DS.'lib'.DS.'cookie.php';
include ROOT_PATH.DS.'lib'.DS.'session.php';
include ROOT_PATH.DS.'lib'.DS.'request.php';
include ROOT_PATH.DS.'lib'.DS.'controller.php';
include ROOT_PATH.DS.'lib'.DS.'view.php';
include ROOT_PATH.DS.'lib'.DS.'model.php';
include ROOT_PATH.DS.'lib'.DS.'utility.php';

/*
 * Create Objects
 */
$di				= new DI();
$config         = new Config();
$request        = new Request();
$cookie         = new Cookie();
$session        = new Session();
$model          = new Model();
$view           = new View();
$controller     = new Controller();
$database       = new Database();
$database->setConfig($config->get('database'));
$database->connect();

/*
 * Add object to Dependency Injection
 */
$di->set("config", $config);
$di->set("request", $request);
$di->set("cookie", $cookie);
$di->set("session", $session);
$di->set("model", $model);
$di->set("view", $view);
$di->set("controller", $controller);
$di->set("database", $database);

/*
 * Assign $di to each object
 */
$config->setDI($di);
$request->setDI($di);
$cookie->setDI($di);
$session->setDI($di);
$model->setDI($di);
$view->setDI($di);
$controller->setDI($di);
$database->setDI($di);


/*
 * Execute Controller
 */
$controllerName     = $request->get('c');
$controllerAction   = $request->get('action');
$controller->load($controllerName);
$controller->execute($controllerAction);