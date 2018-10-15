<?php

class ControleurCreationDemande extends CI_Controller
{
public function creationDemande()
{
    $this->load->model('Model_CreationDemande');
    $this->load->view('View_CreationDemande');
}
}
?>