<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Dashboard extends CI_Model
{

	public function total_admin()
	{
		$q = $this->db->query('SELECT COUNT(*) FROM tb_admin');
		return $q->row_array()['COUNT(*)'];
	}

	public function total_dataizin()
	{
		$q = $this->db->query("SELECT ( SELECT COUNT(*) FROM tb_izin ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}

	public function total_izinterkonfirmasi()
	{
		$q = $this->db->query("SELECT ( SELECT COUNT(*) FROM tb_izin WHERE status!='waiting' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}


	public function pegawai_total_izincuti()
	{
		$q = $this->db->query("SELECT COUNT(*) FROM tb_izin AS i LEFT JOIN tb_namaizin AS ni ON i.id_namaizin=ni.id_namaizin WHERE ni.type='cuti' AND i.id='{$this->session->userdata('user_id')}'");
		return $q->row_array()['COUNT(*)'];
	}


	public function pegawai_total_izinsekolah()
	{
		$q = $this->db->query("SELECT COUNT(*) FROM tb_izin AS i LEFT JOIN tb_namaizin AS ni ON i.id_namaizin=ni.id_namaizin WHERE ni.type='sekolah' AND i.id='{$this->session->userdata('user_id')}'");
		return $q->row_array()['COUNT(*)'];
	}

	public function pegawai_total_izinseminar()
	{
		$q = $this->db->query("SELECT COUNT(*) FROM tb_izin AS i LEFT JOIN tb_namaizin AS ni ON i.id_namaizin=ni.id_namaizin WHERE ni.type='seminar' AND i.id='{$this->session->userdata('user_id')}'");
		return $q->row_array()['COUNT(*)'];
	}

	public function pegawai_izin_terkonfirmasi()
	{
		$q = $this->db->query("SELECT ( SELECT COUNT(*) FROM tb_izin AS i LEFT JOIN tb_namaizin AS ni ON i.id_namaizin=ni.id_namaizin WHERE status!='waiting' AND i.id='{$this->session->userdata('user_id')}' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}

	public function baak_total_izincuti()
	{
		$q = $this->db->query("SELECT COUNT(*) FROM tb_izin AS i LEFT JOIN tb_namaizin AS ni ON i.id_namaizin=ni.id_namaizin WHERE ni.type='cuti'");
		return $q->row_array()['COUNT(*)'];
	}

	public function graph()
	{
		$data = $this->db->query("SELECT * from tb_cabang");
		return $data->result();
	}

	public function total_pegawai()
	{
		$q = $this->db->query('SELECT COUNT(*) FROM tb_datapegawai');
		return $q->row_array()['COUNT(*)'];
	}

	public function pegawai_total_organik_pelindo()
	{
		$q = $this->db->query("SELECT ( SELECT COUNT(*) FROM tb_pegawai WHERE status_pegawai='Organik Pelindo' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}

	public function pegawai_total_tno()
	{
		$q = $this->db->query("SELECT ( SELECT COUNT(*) FROM tb_pegawai WHERE status_pegawai='TNO' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}

	public function pegawai_total_pkwt()
	{
		$q = $this->db->query("SELECT ( SELECT COUNT(*) FROM tb_pegawai WHERE status_pegawai='PKWT' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}

	public function pegawai_total_organik_ptp()
	{
		$q = $this->db->query("SELECT ( SELECT COUNT(*) FROM tb_pegawai WHERE status_pegawai='Organi PTP' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}

	//Grafik Cabang
	public function graph_cabang()
	{
		$data = $this->db->query("SELECT * from tb_cabang");
		return $data->result();
	}
	//Grafik Produktivitas
	public function graph_produktivitas()
	{
		$data = $this->db->query("SELECT * from tb_produktivitas");
		return $data->result();
	}
	//Grafik Status pegawai
	public function graph_status()
	{
		$data = $this->db->query("SELECT * from tb_statuspegawai");
		return $data->result();
	}
}

/* End of file M_Dashboard.php */
/* Location: ./application/models/M_Dashboard.php */