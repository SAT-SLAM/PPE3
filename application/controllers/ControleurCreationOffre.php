<?php

class ControleurCreationOffre extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_CreationOffre_TR');
        $data['lesServices'] = $this->Model_CreationOffre_TR->getAllServices();
        $this->load->view('View_CreationOffreTR', $data);
    }

    public function newOffre()
    {
            $idOffre = $_GET['idOffre'];
            $descriptionOffre = $_GET['descriptionOffre'];
            $dateOffre = $_GET['dateOffre'];
            $idService = $_GET['idService'];
            $idUser = $_GET['idUser'];
            $this->load->model('Model_CreationOffre_TR');
            
    }
}
?>