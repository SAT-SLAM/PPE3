<?php
class Model_Inscription extends CI_Model
{
    public function index($pLogin){

        $sql = $this->db->query("select idUser, nomUser, sexe, email, dateNaissance, login, mdp, photoUser=$pLogin");
        return $sql->result();

    }

    public function insertUser($nomUser, $sexe, $email, $dateNaissance, $login, $mdp, $photoUser){
        $sql = $this->db->query("insert into(nomUser, sexe, email, dateNaissance, login, mdp, photoUser) values('".$nomUser."','".$sexe."','".$email."', '".$dateNaissance."', '".$login."', '".$mdp."', '".$photoUser."')");
        
    }


}
 
?>






      