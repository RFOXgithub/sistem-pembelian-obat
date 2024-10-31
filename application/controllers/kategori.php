<?php

class Kategori extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('isLogin') == FALSE) {
            redirect('login/process_login');
        } else {
            $this->load->model('kategori_model');
            $this->load->model('authentication_model');
        }
    }

    function index()
    {
        $data['title'] = "Data Kategori Aset";
        $data['subtitle'] = "Data Kategori Aset";
        $this->load->view('layout/header', $data);
        $this->load->view('layout/nav');
        $data['kategori'] = $this->kategori_model->selectAll();
        $this->load->view('kategori/kategori', $data);
        $this->load->view('layout/footer');
    }

    function add()
    {
        $data['title'] = "Tambah Kategori Aset";
        $data['subtitle'] = "Tambah Kategori Aset";
        $this->load->view('header', $data);
        $this->load->view('nav');
        if ($_POST == NULL) {
            $this->load->view('kategori/add_kategori');
            $this->load->view('footer');
        } else {
            $this->kategori_m->insert($_POST);
            redirect('kategori');
        }
    }

    function delete($id)
    {
        $this->kategori_m->delete($id);
        redirect('kategori');
    }

    function edit($id)
    {
        $data['title'] = "Ubah Kategori Aset";
        $data['subtitle'] = "Ubah Kategori Aset";
        $this->load->view('header', $data);
        $this->load->view('nav');
        if ($_POST == NULL) {
            $data['kategori'] = $this->kategori_m->select($id);
            $this->load->view('kategori/edit_kategori', $data);
            $this->load->view('footer');
        } else {
            $this->kategori_m->update($id);
            redirect('kategori');
        }
    }
}
