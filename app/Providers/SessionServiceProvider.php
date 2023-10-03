<?php

namespace App\Providers;

class SessionServiceProvider {

    /**
     * Get session data
     */
    public static function getViewData()
    {
        $viewPath = $_SESSION['current_path'];
        
        return $_SESSION[$viewPath . '.data'];
    }
}