<?php

class ControleurCreationOffre extends CI_Controller
{
    public function creationOffre()
    {
        $this->load->model('Model_CreationOffre_TR');
        $this->load->view('View_CreationOffreTR');
    }

    public function GetAllServices()
    {
        $this->load->model(Model_CreationOffre_TR);
        $data['lesServices'] = $this->Model_CreationOffre_TR->getAllServices();
        $this->load->view(viewServices, $data);
    }
}
?>