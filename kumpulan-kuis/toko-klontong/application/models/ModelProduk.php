<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class ModelProduk extends CI_Model
{

    public function getProduk()
    {
        return $this->db->get('produk');
    }

    public function deleteProduk($where = null)
    {
        $this->db->delete('produk', $where);
    }

    public function getProdukWhere($where = null)
    {
        return $this->db->get_where('produk', $where);
    }

}
