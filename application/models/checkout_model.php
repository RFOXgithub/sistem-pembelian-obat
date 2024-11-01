<?php

class checkout_model extends CI_Model
{

    function selectAll()
    {
        return $this->db->order_by('id_checkout', 'asc')->get('checkout')->result();
    }

    public function insert($id_akun, $total_amount, $payment_method)
    {
        $data = [
            'id_akun' => $id_akun,
            'total_amount' => $total_amount,
            'payment_method' => $payment_method,
            'checkout_Date' =>  date('Y-m-d H:i:s')
        ];
        $this->db->insert('checkout', $data);

        $dataDetail = [
            'id_produk' => $id_produk,
            'id_checkout' => $id_checkout,
            'nama_produk' => $nama_produk,
            'quantity' =>  $quantity,
            'harga' =>  $harga,
        ];
        $this->db->insert('checkout_detail', $dataDetail);
    }

    function delete($id)
    {
        $this->db->where('id_checkout', $id);
        $this->db->delete('checkout');
    }

    function update($id)
    {
        $this->db->where('id_checkout', $id)->update('checkout', $_POST);
    }

    function select($id)
    {
        return $this->db->get_where('checkout', array('id_checkout' => $id))->row();
    }
}
