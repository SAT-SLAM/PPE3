<?php

class ControleurPageDeProfil extends CI_Controller
{
    public function PageDeProfil()
    {
        $this->load->model('Model_PageDeProfil');
        $this->load->view('View_PageDeProfil');
    }
}
?>