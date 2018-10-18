<?php

class Model_Offres extends CI_Model
{
    public function getAllServices()
    {
        $sql = $this->db->query("select idService, nomService from service");
        return $sql->result();
    }
    
    public function InsertNewOffre($idOffre, $descriptionOffre, $dateOffre, $idService, $idUser) 
    {
       
            $sql = $this->db->query("insert into offre values (".$idOffre.", ".$descriptionOffre.", ".$dateOffre.", ".$idService.", ".$idUser.")");
            return "Nouvelle offre créée !";
        
    }

    public function UpdateOffre($descriptionOffre, $dateOffre)
    {
        //$sql = $this->db->query("update offre set descriptionOffre = "..", dateOffre =".." ");
        return "Modification de l'offre faite !";
    }

};
