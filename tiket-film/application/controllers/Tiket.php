<?php 
class Tiket extends CI_Controller
{
    public function index()

    {
        $this->load->view('form-tiket');
    }

    public function datatiket() {
        $data['tiket_film'] = $this->ModelTiket->getTiket('tiket_film')->result_array();

        $this->load->view('data-tiket', $data);
    }

    public function cetaktiket()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('kode_tiket', 'Kode Tiket', array('required', 'min_length[4]'));

        $this->form_validation->set_message('min_length', '<span class="error_msg">Ada kesalahan:</span> <span class="error_desc">Setidaknya terdapat {param} karakter!</span>');
        $this->form_validation->set_message('required', '<span class="error_msg">Ada kesalahan:</span> <span class="error_desc">{field} harus diisi!</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form-tiket');
            echo form_error('kode_tiket', '<script>alert("Ada kesalahan pada kolom \'Kode Tiket\'!")</script>');
        } else {
            $data = [
                'kode_tiket' => $this->input->post('kode_tiket'),
                'studio' => $this->input->post('studio'),
                'genre' => $this->input->post('genre'),
                'harga' => $this->input->post('harga')
            ];

            $this->ModelTiket->simpanData($data);
            echo "<script>alert(\"Berhasil menambahkan tiket!\")</script>";

            $this->load->view('form-tiket');
            
        }
    }
}