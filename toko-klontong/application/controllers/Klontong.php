<?php


class Klontong extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['produk'] = $this->db->get('produk')->result_array();

        $this->load->view('produk', $data);
    }

    public function hapusProduk()
    {
        $where = ['kode_produk' => $this->uri->segment(3)];
        $this->ModelProduk->deleteProduk($where);
        redirect('klontong');
    }

}