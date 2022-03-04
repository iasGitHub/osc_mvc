<?php

class HomeController 
{
    public $model;
    
    public function index()
    {
        if(isset($_GET['logout']))
        {
            unset($_SESSION['userLogInStatus']);
        }
        if(isset($_POST['LoginSubmit']))
        {
            $email = $_POST['email'];
            $motDePasse = $_POST['motDePasse'];

            $chkUserLogin = $this->model->CheckUserLogin($email, $motDePasse);
            
            if($chkUserLogin == 1)
            {
                $_SESSION['userLogInStatus'] = 1;
            }
        }

        if(isset($_POST['RegisterSubmit']))
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $civilite = $_POST['civilite'];
            $email = $_POST['email'];
            $motDePasse = $_POST['motDePasse'];
            $telephone = $_POST['telephone'];
            $poste = $_POST['poste'];

            $this->model->UserRegister($nom,$prenom,
                $civilite, $email, md5($motDePasse), $telephone, $poste);
                $_SESSION['userLogInStatus'] = 1;
        }

        $this->routeManager();
    }

    public function routeManager()
    {
        if(isset($_SESSION['userLogInStatus']))
        {
            return require_once('views/dashboard.php');
        }

        if(isset($_GET['register']))
        {
            return require_once('views/register.php');
        }

        if(isset($_GET['login']))
        {
            return require_once('views/login.php');
        }
        return require_once('views/login.php');
    }
}
?>