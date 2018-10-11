<?php

class ControleurInscription extends CI_Controller
{
    public function pageInscription()
    {
        $this->load->model('Model_Inscription');
        $this->load->view('View_Inscription');
    }
}
?>