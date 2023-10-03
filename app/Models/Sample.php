<?php 

namespace App\Models;

class Sample {
    
    public static function fetchSampleData() {
        return require('public/sample-data.php');
    }
}