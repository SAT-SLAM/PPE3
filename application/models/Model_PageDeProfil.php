<?php
class Model_PageDeProfil extends CI_Model
{
    public function getUser(){
        $sql = $this->db->query("select idUser, nomUser, photoUser, sexe from user");
        return $sql->result();

        if(sexe==0){
            echo '<img src="http://image.noelshack.com/fichiers/2018/42/3/1539762609-male.png" />';
        }
    }

   
}
?>