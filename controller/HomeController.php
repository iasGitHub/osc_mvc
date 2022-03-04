<?php
session_start();

class HomeController 
{
    public $model;
    
    public function index()
    {
        if(isset($_POST['LoginSubmit']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $chkLogin = $this->model->CheckUserLogin($username, $password);
            if($chkLogin == 1)
            {
                $_SESSION['userLogin'] = 1;
            }
        }
        $this->routeManager();
    }

    public function routeManager()
    {
        return require_once('view/login.php');
    }
}
?>