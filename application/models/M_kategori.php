<?php
class M_kategori extends CI_Model
{

	function hapus_kategori($kode)
	{
		$hsl = $this->db->query("DELETE FROM tbl_kategori where kategori_id='$kode'");
		return $hsl;
	}

	function update_kategori($kode, $kat)
	{
		$hsl = $this->db->query("UPDATE tbl_kategori set kategori_nama='$kat' where kategori_id='$kode'");
		return $hsl;
	}

	function tampil_kategori()
	{
		$this->db->order_by("kategori_id", "DESC");
		return $this->db->get("tbl_kategori");
	}

	function simpan_kategori($kat)
	{
		$hsl = $this->db->query("INSERT INTO tbl_kategori(kategori_nama) VALUES ('$kat')");
		return $hsl;
	}

	function update_status($kode, $mode)
	{
		$hsl = $this->db->query("UPDATE tbl_kategori SET `status`=$mode WHERE kategori_id='$kode'");
		return $hsl;
	}
}
