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

    public function accesConnexion($login, $mdp)
    {
        if(isset($login == $_POST["login"] && $mdp == $_POST["mdp"])){
            redirect('ControleurPageDeProfil'/'index');
        }
        else{
            echo "Erreur";
        }
    }
}




?>