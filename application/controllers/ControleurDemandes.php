<?php

class ControleurDemandes extends CI_Controller
{
public function index()
{
    $this->load->model('Model_CreationDemandeTR');
    $data['lesServices'] = $this->Model_CreationDemandeTR->getAllServices();
    $this->load->view('View_CreationDemande', $data);
}

public function updateDemande()
{
    $this->load->model('Model_GestionDemande');
    $data['lesServices'] = $this->Model_GestionDemande->getAllServices();
    $this->load->view('View_GestionDemande', $data);
}
}
?>