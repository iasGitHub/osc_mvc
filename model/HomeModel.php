<?php
class HomeModel
{
    public $db;
    
    public function CheckUserLogin($email, $motDePasse)
    {
        $query = "SELECT count(*) FROM utilisateur WHERE email='{$email}'
        AND motDePasse='{$motDePasse}'";
        $stmt = $this->db->prepare($query)->execute();
        return $stmt;
    }

    public function UserRegister($nom, $prenom, $civilite, $email, $motDePasse, $telephone, $poste )
    {
        $query = "INSERT INTO (nom,prenom,civilite,email,motDePasse,telephone,poste)
        VALUES ('".$nom."','".$prenom."','".$civilite."','".$email."','".$motDePasse."',
        '".$telephone."','".$poste."')";
        $stmt = $this->db->query($query);
        return 1;
    }

}
?>