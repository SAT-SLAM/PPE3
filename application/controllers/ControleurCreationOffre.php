<?php

class ControleurCreationOffre extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_CreationOffre_TR');
        $this->load->view('View_CreationOffreTR');
    }
}
?>