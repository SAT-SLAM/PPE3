<?php

class Model_GestionDemande extends CI_Model 
{
    public function getAllServices()
    {
        $sql = $this->db->query("select idService, nomService from service");
        return $sql->result();
    }
}
?>