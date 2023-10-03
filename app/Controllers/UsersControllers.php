<?php 

namespace App\Controllers;

use App\Models\User;

class UsersControllers extends Controller {

    public function index()
    {   
        return $this->view('users.index');
    }
    
    public function viewUsers()
    {
        $users = User::fetchUsers();
        
        return $this->view('users.view-users', [
            'heading' => 'List of Users',
            'users' => $users,
        ]);
    }
    
    public function getUsers()
    {
        $users = User::fetchUsers();
        
        return $this->response(['users' => $users]);
    }

}