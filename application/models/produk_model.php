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

    function getProductById($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('id_produk', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    function get()
    {
        $this->db->distinct()->select('nama_produk, id_produk, harga');
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            $row_set = [];

            foreach ($query->result_array() as $row) {
                $row_set[] = htmlentities(stripslashes($row['nama_produk']));
                $row_set[] = htmlentities(stripslashes($row['id_produk']));
                $row_set[] = htmlentities(stripslashes($row['harga']));
            }

            echo json_encode($row_set);
        }
    }

    public function search($cari)
    {
        $this->db->select('*');
        $this->db->from('produk');

        $this->db->like('nama_produk', $cari);
        $this->db->or_like('harga', $cari);

        $this->db->order_by('nama_produk', 'DESC');
        return $this->db->get()->result();
    }
}
