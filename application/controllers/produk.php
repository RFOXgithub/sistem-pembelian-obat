<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('produk_model');
        $this->load->model('authentication_model');
    }

    public function index()
    {
        $data['title'] = "Product Page";
        $data['product'] = $this->produk_model->getAllProduct();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/nav');
        $this->load->view('home/home', $data);
        $this->load->view('layout/footer');
    }

    public function getProductDetails()
    {
        $id = $this->input->get('id_produk');
        $product = $this->produk_model->getProductById($id);

        echo json_encode($product ? $product : ['error' => 'Product not found']);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
