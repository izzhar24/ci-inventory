<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('login', 'refresh');
        }
        $this->load->model('m_dashboard');
    }
    public function index()
    {
        if ($this->session->userdata('group_id')->id == '1') {
            $data['report'] = $this->m_dashboard->statistik_stok_barang();
            $this->template->load('template', 'dashboard', $data);
        } else {
            echo "Halaman tidak ditemukan";
        }
    }
}
