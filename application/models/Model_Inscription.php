<?php
class Model_Inscription extends CI_Model
{
    public function insertUser($nomUser, $sexe, $email, $dateNaissance, $login, $mdp, $photoUser){
        $sql = $this->db->query("insert into user values(".$nomUser.",".$sexe.",'".$email."',".$dateNaissance.",'".$login."','".$mdp."','".$photoUser."')");
        return "Merci pour votre inscription :)";
    }
} 
?>