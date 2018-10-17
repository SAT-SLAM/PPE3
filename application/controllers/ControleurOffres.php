<?php

class ControleurOffres extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_Offres');
        $data['lesServices'] = $this->Model_Offres->getAllServices();
        $this->load->view('View_CreationOffreTR', $data);
    }

    public function updateOffre()
{
    $this->load->model('Model_Offres');
    $data['lesServices'] = $this->Model_Offres->getAllServices();
    $this->load->view('View_GestionOffre', $data);
}

    public function newOffre()
    {
        /*$idOffre = $this->input->post('idOffre');
        $descriptionOffre = $this->input->post('descriptionOffre');
        $dateOffre = $this->input->post('dateOffre');
        $idService = $this->input->post('idService');
        //$idUser = $this->input->post('"$_SESSION['idUser']"');*/
            $idOffre = $_GET['idOffre'];
            $descriptionOffre = $_GET['descriptionOffre'];
            $dateOffre = $_GET['dateOffre'];
            $idService = $_GET['idService'];
            $idUser = $_GET['$_SESSION['idUser']'];
            $this->load->model('Model_Offres');
            $data['lesOffres'] = $this->Model_Offres->InsertNewOffre($idOffre, $descriptionOffre, $dateOffre, $idService, $idUser);
            
    }
}
?>