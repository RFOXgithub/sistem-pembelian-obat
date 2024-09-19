<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Akses extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('authentication_model');
    }

    public function index()
    {
        $data['akses'] = $this->authentication_model->selectAll();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/nav');
        $this->load->view('nav/akses', $data);
        $this->load->view('layout/footer');
    }

    public function index_akun()
    {
        $data['akun'] = $this->authentication_model->selectAll();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/nav');
        $this->load->view('nav/akun', $data);
        $this->load->view('layout/footer');
    }

    function delete($id)
    {
        $this->authentication_model->deleteAkses($id);
        redirect('akses');
    }

    function deleteAkun($id)
    {
        $this->authentication_model->deleteAkses($id);
        redirect('akses/index_akun');
    }

    function edit($id)
    {
        $data['title'] = "Akses Pengguna";
        $data['subtitle'] = "Ubah Akses Pengguna";

        $this->load->view('layout/header', $data);
        $this->load->view('layout/nav');

        $dbres = $this->db->order_by('id_akun', 'asc')->get('akun');

        $ddmenu = array();
        foreach ($dbres->result_array() as $tablerow) {
            $ddmenu[$tablerow['id_akun']] = $tablerow['username'];
        }

        $data['options'] = $ddmenu;

        if ($_POST == NULL) {
            $data['akses'] = $this->authentication_model->select($id);
            $data['select_level'] = $this->authentication_model->selectLevelAkses($id);
            $this->load->view('nav/akses_edit', $data);
            $this->load->view('layout/footer');
        } else {
            $this->authentication_model->updateAkses($id);
            redirect('akses');
        }
    }

    public function editAkun()
    {
        $data['title'] = "Data Akun";

        $this->load->view('layout/header', $data);
        $this->load->view('layout/nav');

        if ($_POST == NULL) {
            $data['karyawan'] = $this->authentication_model->select($id);
            $data['select_jabatan'] = $this->authentication_model->select_jabatan($id);
            $data['select_gedung'] = $this->authentication_model->select_gedung($id);
            $this->load->view('akses/editAkun', $data);
            $this->load->view('layout/footer');
        } else {
            $this->authentication_model->update($id);
            redirect('akses/index_akun');
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */