<?php

class Model_CreationOffre_TR extends CI_Model
{
    public function getAllServices()
    {
        $sql = $this->db->query("select idService, nomService from service");
        return $sql->result();
    }
    
    public function InsertNewOffre($idOffre, $descriptionOffre, $dateOffre, $idService, $idUser) 
    {
       
            $sql = $this->db->query("insert into offre values (".$idOffre.", ".$descriptionOffre.", ".$dateOffre.", ".$idService.", ".$idUser.")");
            return $sql->result();
        
        
        
    }
}
?>