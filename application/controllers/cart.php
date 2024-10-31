<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('cart_model');
        $this->load->model('authentication_model');

        $input = $this->session->userdata('username');
        $pengguna = $this->authentication_model->dataPengguna($input);
        $this->id_akun = $pengguna ? $pengguna->id_akun : null;
    }

    public function index()
    {
        $data['title'] = "Cart Page";

        if ($this->id_akun) {
            $data['cart'] = $this->cart_model->selectAllCartUser($this->id_akun);
        } else {
            $data['cart'] = [];
        }

        $this->load->view('layout/header', $data);
        $this->load->view('layout/nav');
        $this->load->view('cart/cart', $data);
        $this->load->view('layout/footer');
    }

    public function insertCart($id_produk)
    {
        if ($this->id_akun) {
            $existingCartItem = $this->cart_model->getCartItem($this->id_akun, $id_produk);

            if ($existingCartItem) {
                $newQuantity = $existingCartItem->quantity + 1;
                $this->cart_model->updateCartQuantity($existingCartItem->id_cart, $newQuantity);
            } else {
                $this->cart_model->insert($this->id_akun, $id_produk, 1);
            }
        }
        redirect('produk');
    }


    function deleteCart($id)
    {
        $this->cart_model->delete($id);
        redirect('cart');
    }

    public function incrementQuantity($id_cart)
    {
        $this->cart_model->incrementCartQuantity($id_cart);
        redirect('cart');
    }

    public function decrementQuantity($id_cart)
    {
        $this->cart_model->decrementCartQuantity($id_cart);
        redirect('cart');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
