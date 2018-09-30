<?php

class ControleurConnexion extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_Connexion');
        $this->load->view('View_Connexion');
    }
}
?>