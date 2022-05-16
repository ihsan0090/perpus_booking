<?php class form_inputan extends CI_Controller 
{ 
    public function index() 
    { 
        $this->load->view('view-data_input_form'); 
    }

    public function cetak() 
    { 
        $this->form_validation->set_rules('nis', 'nis form_inputan', 'required|min_length[3]', [ 'required' => 'nis Harus diisi', 'min_lenght' => 'nis terlalu pendek' ]); 
        if ($this->form_validation->run() != true)
        { 
            $this->load->view('view-data_input_form'); 
        }
        else
        {
        $data = [ 
            'nama' => $this->input->post('nama'), 
            'nis' => $this->input->post('nis'), 
            'kelas' => $this->input->post('kelas'),
            'ttl' => $this->input->post('ttl'),
            'Alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama'), 
        ]; 
         }
            $this->load->view('view-tampil_input_form', $data); 
        }
}