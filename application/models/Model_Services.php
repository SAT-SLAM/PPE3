<?php

class Model_Services extends CI_Model
{
    function getLesServices()
    {
    $sql = $this->db->query("select idService, nomService from service");
    return $sql->result();
    }
}
?>