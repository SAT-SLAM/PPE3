<?php

class Model_CreationOffre_TR extends CI_Model
{
    function setOffre() 
    {
        $sql = $this->db->query("INSERT INTO offre(idOffre, descriptionOffre, dateOffre, idService) VALUES (?,?,?,?)");
        return $sql->result();
    }
}
?>