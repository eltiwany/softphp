<?php

namespace App\Controllers;

class Controller {

    /**
     * Return view with optional data
     */
    public function view($viewName, $data = [])
    {
        if(!empty($data))
            $_SESSION[$viewName . '.data'] = $data;
            
        // for session management of data
        $_SESSION['current_path'] = $viewName;

        return $viewName;
    }
    
    /**
     * Return view with optional data
     */
    public function response($data = [], $statusCode = 200)
    {
        if(!empty($data))
            $_SESSION['api_response_data'] = $data;
            $_SESSION['api_response_code'] = $statusCode;

        return 'api_response=true';
    }
}