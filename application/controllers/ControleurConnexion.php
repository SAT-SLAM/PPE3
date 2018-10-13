<?php

class ControleurConnexion extends CI_Controller
{
    public function pageConnexion()
    {
        $this->load->model('Model_Connexion');
        $this->load->view('View_Connexion');
    }
}
?>