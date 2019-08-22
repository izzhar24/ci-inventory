<?php
class Barang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			// redirect them to the login page
			redirect('login', 'refresh');
		}
		$this->load->model('m_kategori');
		$this->load->model('m_barang');
	}
	public function index()
	{
		$data['data'] = $this->m_barang->tampil_barang();
		$data['kat'] = $this->m_kategori->tampil_kategori();
		$data['kat2'] = $this->m_kategori->tampil_kategori();
		$this->template->load('template', 'admin/v_barang', $data);
		// var_dump($data['kat']);
		// die;
	}

	public function tambah_barang()
	{
		$kobar = $this->m_barang->get_kobar();
		$nabar = $this->input->post('nabar');
		$kat = $this->input->post('kategori');
		$satuan = $this->input->post('satuan');
		$harpok = str_replace(',', '', $this->input->post('harpok'));
		$harjul = str_replace(',', '', $this->input->post('harjul'));
		$harjul_grosir = str_replace(',', '', $this->input->post('harjul_grosir'));
		$stok = $this->input->post('stok');
		$min_stok = $this->input->post('min_stok');
		$this->m_barang->simpan_barang($kobar, $nabar, $kat, $satuan, $harpok, $harjul, $harjul_grosir, $stok, $min_stok, $this->session->userdata('user_id'));
		// var_dump($userID);
		redirect('barang');
	}
	public function edit_barang()
	{
		$kobar = $this->input->post('kobar');
		$nabar = $this->input->post('nabar');
		$kat = $this->input->post('kategori');
		$satuan = $this->input->post('satuan');
		$harpok = str_replace(',', '', $this->input->post('harpok'));
		$harjul = str_replace(',', '', $this->input->post('harjul'));
		$harjul_grosir = str_replace(',', '', $this->input->post('harjul_grosir'));
		$stok = $this->input->post('stok');
		$min_stok = $this->input->post('min_stok');
		$this->m_barang->update_barang($kobar, $nabar, $kat, $satuan, $harpok, $harjul, $harjul_grosir, $stok, $min_stok, $this->session->userdata('user_id'));
		redirect('barang');
	}
	public function hapus_barang()
	{
		if ($this->session->userdata('group_id')->id == '1') {
			$kode = $this->input->post('kode');
			$this->m_barang->hapus_barang($kode);
			redirect('barang');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}

	public function switch()
	{
		if ($this->session->userdata('group_id')->id == '1') {
			$kode = $this->input->post('kode');
			$mode = $this->input->post('mode');
			if ($mode == 1) {
				$mode = 0;
			} else {
				$mode = 1;
			}
			$this->m_barang->update_status($kode, $mode);
			redirect('barang');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
}
