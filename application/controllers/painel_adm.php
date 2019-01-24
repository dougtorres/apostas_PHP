<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Painel_adm extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('painel-nav-usuario');
        $this->load->view('painel-barra-adm');
        $this->load->view('painel-apostas');
    }

    public function adicionar_time() {
        $data['error_msg'] = "";
        $this->load->view('painel-nav-usuario');
        $this->load->view('painel-barra-adm');
        $this->load->view('adicionar-time', $data);
    }

    public function adicionar_jogo() {
        
        $this->load->model('times_model');
        $this->load->model('campeonatos_model');
        
        $times = $this->times_model->getTimes();
        $campeonatos = $this->campeonatos_model->getCampeonatos();
        $option = "";
        $option_camp = "";
        if($times->num_rows != 0){
        foreach($times -> result() as $linha) {
        $option .= "<option value='$linha->id'>$linha->nome</option>"; 
}
        }
        
        
        if($campeonatos->num_rows != 0){
        foreach($campeonatos -> result() as $linha) {
        $option_camp .= "<option value='$linha->id'>$linha->nome</option>"; 
}
        }
        
        
        
        $data['options'] = $option;
        $data['options_camp'] = $option_camp;
        $data['error_msg'] = "";
        $this->load->view('painel-nav-usuario');
        $this->load->view('painel-barra-adm');
        $this->load->view('adicionar-jogo', $data);
    }

    public function adicionar_time_func() {
 
        $this->form_validation->set_rules('nome-time', 'Nome', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('adicionar-time');
        } else {
            $data['nome'] = $this->input->post('nome-time');
            if ($this->times->getTime()) {
                $data['error_msg'] = "<p id='label-painel'>O Time informado já existe no sistema</p>";
                $this->load->view('painel-nav-usuario');
                $this->load->view('painel-barra-adm');
                $this->load->view('adicionar-time', $data);
            } else {
                if ($this->db->insert('times', $data)) {

                    if (!empty($_FILES)) {
                        $sql = "SELECT id FROM times WHERE nome =" . " '" . $this->input->post('nome-time') . "'";
                        $query = $this->db->query($sql);
                        foreach ($query->result_array() as $row) {
                            $data['id'] = $row['id'];
                        }


                        $uploaddir = 'public/images/escudos/'; #pasta para salvar os arquivos enviados
                        $path_parts = pathinfo($_FILES["file"]["name"]);
                        $fileext = $path_parts['extension'];

                        $uploadfile = $uploaddir . $data['id'] . "." . $fileext;

                        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {

                            $sql = "UPDATE times SET escudo= '" . $uploadfile . "' WHERE id = '" . $data['id'] . "'";
                            $query = $this->db->query($sql);
                        }
                        redirect('painel_adm/adicionar_time');
                    }
                }
            }
        }
    }

  

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */