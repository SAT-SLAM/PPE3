<?php

class ControleurGestionDemande extends CI_Controller
{
public function index()
{
    $this->load->model('Model_GestionDemande');
    $data['lesServices'] = $this->Model_GestionDemande->getAllServices();
    $this->load->view('View_GestionDemande', $data);
}
}
?>