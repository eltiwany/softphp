<?php 

namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller {
    public function index()
    {
        return $this->view('home.landing-page');
    }

    public function learnMore()
    {
        return $this->view('home.learn-more');
    }
    
    public function documentation()
    {
        return $this->view('home.documentation');
    }
}