<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class ModelTiket extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('tiket_film', $data);
    }
    public function getTiket()
    {
        return $this->db->get('tiket_film');
    }

}
