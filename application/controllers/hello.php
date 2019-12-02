<?php 

//aturan membuat controller
// 1. controller disimpan pada direktori application/controllers/
// 2. nama classs controller harus sama dengan nama file controller
// 3. nama class controller harus diawali dengan huruf besar
// 4. nama class controller tidak boleh menggunakan spasi , "-", dan tanda lainnya kecuali underscore "_";
// 5. tidak boleh ada nama function yang sama dalam satu class controller;

class Hello extends CI_Controller {
    public function index (){
        //$this->load->view('contoh_view'); cara me load view
        $this->load->model('m_mhs'); 
        
        $data['mahasiswa']= $this->m_mhs->get_data();

        $this->load->view('v_mhs', $data);

    }

}

?>