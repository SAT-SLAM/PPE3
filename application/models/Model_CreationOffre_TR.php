<?php

class Model_CreationOffre_TR extends CI_Model
{
    public function getAllServices()
    {
        $sql = $this->db->query("select idService, nomService from service");
        return $sql->result();
    }
    
    public function InsertNewOffre() 
    {
        $sql = $this->db->query("INSERT INTO offre(idOffre, descriptionOffre, dateOffre, idService) VALUES (?,?,?,?)");
        return $sql->result();
    }
}
?>