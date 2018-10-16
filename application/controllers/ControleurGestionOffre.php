<?php

class ControleurGestionOffre extends CI_Controller
{
public function index()
{
    $this->load->model('Model_GestionOffre');
    $data['lesServices'] = $this->Model_GestionOffre->getAllServices();
    $this->load->view('View_GestionOffre', $data);
}
}
?>