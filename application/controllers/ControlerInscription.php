<?php

class ControlerInscription extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_Inscription');
        $this->load->view('View_Inscription');
        
    }

    public function insertUser(){

            $nomUser = $_POST['nomUser'];
            $sexe = $_POST['sexe'];
            $email = $_POST['email'];
            $dateNaissance = $_POST['dateNaissance'];
            $login = $_POST['login'];
            $mdp = $_POST['mdp'];
            $photoUser = $_POST['photoUser'];
            $this->load->model("Model_Inscription");
            $data['message'] = $this->model_Inscription->insertUser($nomUser, $sexe, $email, $dateNaissance, $login, $mdp, $photoUser);
            $this->load->view('View_PageDeProfil');
        
    }

    
}