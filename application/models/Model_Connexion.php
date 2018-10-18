<?php
class Model_Connexion extends CI_Model
{
    //public function getUser($login, $mdp)
    //{
      //  $sql = $this->db->query("select nomUser, sexe, email, dateNaissance, login, mdp, photoUser from user where mdp = '".$mdp."' and login = '".$login."'");
        //return $sql->result();


    //}
    
    public function login_user($login,$mdp){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('login',$login);
        $this->db->where('mdp',$mdp);
  
        if($query=$this->db->get())
        {
          return $query->row_array();
        }
        else{
          return false;
        }
  
  
      }


}
?>