<?php

class ControleurConnexion extends CI_Controller
{
    public function pageConnexion()
    {
        $this->load->model('Model_Connexion');
        $this->load->view('View_Connexion');
    }

    public function connexion()
    {
        $this->load->model('Model_Connexion');
        $data["user"] = $this->Model_Connexion->getUser($_POST["login"], $_POST["mdp"]);
    }

    function accesConnexion()
    {
        //$data=$this->Model_Connexion->getUser();
        //if($data){
            //$_SESSION['login'] = $data['login'];
           // $_SESSION['mdp'] = $data['mdp'];
           // redirect('ControleurPageDeProfil/index');
        //}
        //else{
           // echo "Erreur";
        //}

        $user_login = array('login'=>$this->input->post('login'), 'mdp'=>$this->input->post('mdp'));
        $data = $this->Model_Connexion->login_user($user_login['login'],$user_login['mdp']);
            if($data){
                $_SESSION['nomUser']=$data['nomUser'];
                $_SESSION['sexe']=$data['sexe'];
                $_SESSION['email']=$data['email'];
                $_SESSION['dateNaissance']=$data['dateNaissance'];
                $_SESSION['login']=$data['login'];
                $_SESSION['mdp']=$data['mdp'];

                redirect('ControleurPageDeProfil/index');
            }
            else{
                echo "ERREUR BANANE";
            }
    }
}


?>