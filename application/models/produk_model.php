<?php

class Produk_model extends CI_Model
{
    protected $table = 'produk';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProduct()
    {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function getProductById($id)
    {
        $this->db->where('id_produk', $id);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }
}
