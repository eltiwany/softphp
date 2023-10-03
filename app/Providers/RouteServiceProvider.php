<?php

namespace App\Providers;

require_once 'app/Providers/FileServiceProvider.php';
// error_reporting(E_ERROR | E_PARSE);
session_start();

class RouteServiceProvider extends FileServiceProvider {

    private static $routePaths = [
        'web.php',
        'api.php'
    ];

    public function fileLoader()
    {
        // Load all controllers
        FileServiceProvider::includeAll('app' . DIRECTORY_SEPARATOR . 'Controllers');
        // Load all Models
        FileServiceProvider::includeAll('app' . DIRECTORY_SEPARATOR . 'Models');
    }

    public static function initiateRouting()
    {
        self::fileLoader();

        foreach (self::$routePaths as $indexRoutePath => $routePath) {
            require_once 'routes' . DIRECTORY_SEPARATOR . $routePath;
            $notFoundViewPath = 'views' . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'not-found' . '.php';
    
            foreach ($routes as $indexRoute => $route) {
                $serverURI = $_SERVER['REQUEST_URI'];
        
                // Comment out below three lines on production
                $baseDirectory = "/" . self::getConfig('params')['basePath'];
                $pos = strpos($serverURI, $baseDirectory);
                $serverURI = substr($serverURI, $pos + strlen($baseDirectory));
        
                if ($indexRoute === $serverURI) {
                    require_once $route[0] . '.php';
                    $className = $route[0];
                    $methodName = $route[1];
        
                    $instance = new $className();
                    $viewName = $instance->$methodName();
                    $viewPath = 'views' . DIRECTORY_SEPARATOR . str_replace('.', DIRECTORY_SEPARATOR, $viewName) . '.php';
        
                    if (!file_exists($viewPath))
                        $viewPath = $notFoundViewPath;
                       
                    break;
                }
            }
            
            if (!isset($viewPath) || !$viewName)
                $viewPath = $notFoundViewPath;
        }
        
        if ($viewName == 'api_response=true') {
            header('Content-Type: application/json');
            http_response_code($_SESSION['api_response_code']);
            echo json_encode($_SESSION['api_response_data']);
        }

        else {
            include $viewPath;
        }
    }

}