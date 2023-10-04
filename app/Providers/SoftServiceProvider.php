<?php

namespace App\Providers;

class SoftServiceProvider {

    public static function renderAll()
    {
        self::renderSection();
    }

    /**
     * Section Definition
     */
    public static function renderSection()
    {
        $viewName = $_SESSION['current_path'];
        
        $viewPath = 'views' . DIRECTORY_SEPARATOR . str_replace('.', DIRECTORY_SEPARATOR, $viewName) . '.soft.php';
        
        if (!file_exists($viewPath)) 
            return;

        // $contents = file_get_contents($viewPath);
    }
}