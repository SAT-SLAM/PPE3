<?php

class ControlerInscription extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_Inscription');
        $this->load->view('View_Inscription');
        
    }

    public function InscriptionUser(){

            $this->Model_Inscription->insertUser($_POST["nomUser"], $_POST["sexe"], $_POST["email"], $_POST["dateNaissance"], $_POST["login"], $_POST["mdp"], $_POST["photoUser"]);
            $data["nomUser"] = $_POST["nomUser"];
            $data["sexe"] = $_POST["sexe"];
            $data["email"] = $_POST["email"];
            $data["dateNaissance"] = $_POST["dateNaissance"];
            $data["login"] = $_POST["login"];
            $data["mdp"] = $_POST["mdp"];
            $data["photoUser"] = $_POST["photoUser"];
            $this->load->view("View_PageDeProfil");
        
    }

    
}
?>