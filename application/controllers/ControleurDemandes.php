<?php

class ControleurDemandes extends CI_Controller
{
public function index()
{
    $this->load->model('Model_Demandes');
    $data['lesServices'] = $this->Model_Demandes->getAllServices();
    $this->load->view('View_CreationDemande', $data);
}

public function updateDemande()
{
    $this->load->model('Model_Demandes');
    $data['lesServices'] = $this->Model_Demandes->getAllServices();
    $this->load->view('View_GestionDemande', $data);
}
}
?>