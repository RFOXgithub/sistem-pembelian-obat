<?php

class Kategori_model extends CI_Model
{

    function selectAll()
    {
        return $this->db->order_by('nama_kategori', 'asc')->get('kategori')->result();
    }

    function insert($set)
    {
        $this->db->insert('kategori', $set);
    }

    function delete($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }

    function update($id)
    {
        $this->db->where('id_kategori', $id)->update('kategori', $_POST);
    }

    function select($id)
    {
        return $this->db->get_where('kategori', array('id_kategori' => $id))->row();
    }

    public function get_kategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $query = $this->db->get();
        return $query->result();
    }
}
