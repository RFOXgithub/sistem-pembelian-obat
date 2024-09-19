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

    public function getAllKatalog()
    {
        $query = $this->db->get($this->table);
        return $query->result();
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

    function delete($id)
    {
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
    }

    function select($id)
    {
        return $this->db->get_where('produk', array('id_produk' => $id))->row();
    }

    function update($id, $gambar)
    {
        $nama_file = isset($gambar['file_name']) ? $gambar['file_name'] : null;

        $data = $_POST;

        if ($nama_file) {
            $data['gambar'] = $nama_file;
        }

        $this->db->where('id_produk', $id)->update('produk', $data);
    }
}
