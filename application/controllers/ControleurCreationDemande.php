<?php

class ControleurCreationDemande extends CI_Controller
{
public function index()
{
    $this->load->model('Model_CreationDemandeTR');
    $data['lesServices'] = $this->Model_CreationDemandeTR->getAllServices();
    $this->load->view('View_CreationDemande', $data);
}
}
?>