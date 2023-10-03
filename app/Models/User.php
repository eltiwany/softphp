<?php 

namespace App\Models;

class User {
    private static $columns = ['id', 'email'];
    
    public static function fetchUsers() {
        require_once 'config/db.php';
        $sqlString = 'select ' . implode(',', self::$columns) . ' from users';
        $sqlQuery = mysqli_query($dbConnection, $sqlString);

        return mysqli_fetch_all($sqlQuery);
    }
}
