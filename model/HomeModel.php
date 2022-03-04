<?php
class HomeModel
{
    public $db;
    
    public function CheckUserLogin($username, $password)
    {
        $query = "SELECT * FROM utilisateur WHERE username='{$username}'
        AND password='{$password}'";
        $stmt = $$this->db->prepare($query)->execute();
        return $stmt;
    }
}
?>