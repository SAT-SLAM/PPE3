<?php
class ControleurPageDeProfil extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_PageDeProfil');
        $data['lesUsers']=$this->Model_PageDeProfil->getUser();
        $this->load->view('View_PageDeProfil',$data);
    }
   
}
?>