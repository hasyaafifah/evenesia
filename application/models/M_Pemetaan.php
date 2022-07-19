<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Pemetaan extends CI_Model
{

    function getData()
    {
        $query = $this->db->get('tb_pemetaan');
        return $query->result();
    }

    function insertData($data)
    {
        $this->db->insert('tb_pemetaan', $data);
        $this->session->set_flashdata('msg_alert', 'Data Pemetaan berhasil ditambah');
    }

    function getDataDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_pemetaan');
        return $query->row();
    }

    function updateData($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_pemetaan', $data);
        $this->session->set_flashdata('msg_alert', 'Data Pemetaan berhasil diubah');
    }

    function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_pemetaan');
        $this->session->set_flashdata('msg_alert', 'Data Pemetaan berhasil dihapus');
    }
}

/* End of file M_Mahasiswa.php */
/* Location: ./application/models/M_Mahasiswa.php */