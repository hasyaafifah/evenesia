<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Realisasi extends CI_Model
{

    function getData()
    {
        $query = $this->db->get('tb_realisasi');
        return $query->result();
    }

    function insertData($data)
    {
        $this->db->insert('tb_realisasi', $data);
        $this->session->set_flashdata('msg_alert', 'Data realisasi berhasil ditambah');
    }

    function getDataDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_realisasi');
        return $query->row();
    }

    function updateData($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_realisasi', $data);
        $this->session->set_flashdata('msg_alert', 'Data realisasi berhasil diubah');
    }

    function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_realisasi');
        $this->session->set_flashdata('msg_alert', 'Data realisasi berhasil dihapus');
    }
}
