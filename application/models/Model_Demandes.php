<?php

class Model_Demandes extends CI_Model 
{
    public function getAllServices()
    {
        $sql = $this->db->query("select idService, nomService from service");
        return $sql->result();
    }
}
?>