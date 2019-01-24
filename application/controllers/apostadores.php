<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apostadores extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('adicionar_apostador');
	}


	public function inserir()
        {
            $this->form_validation->set_rules('nome','Nome','trim|required');
            $this->form_validation->set_rules('telefone','Telefone','trim|required');
            $this->form_validation->set_rules('login','Login','trim|required');
            $this->form_validation->set_rules('senha','Senha','trim|required');
            $this->form_validation->set_rules('confirma','Confirmar Senha','trim|required');
            
            if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('adicionar_apostador');
        }
        else
        {  
            $data['nome'] = $this->input->post('nome');
            $data['telefone'] = $this->input->post('telefone');
            $data['login'] = $this->input->post('login');
            $data['senha'] = $this->input->post('senha');
            
            if($this->db->insert('apostadores', $data)){
                
                redirect('adicionar_apostador');
            }
}

}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */