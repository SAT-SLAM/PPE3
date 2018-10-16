<?php
class Model_PageDeProfil extends CI_Model
{
    public function getUser(){
        $sql = $this->db->query("select nomUser from user");
        return $sql->result();
    }
}
?>