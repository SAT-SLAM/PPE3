<?php

class ControleurCreationOffre extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_CreationOffre_TR');
        $data['lesServices'] = $this->Model_CreationOffre_TR->getAllServices();
        $this->load->view('View_CreationOffreTR', $data);
    }
}
?>