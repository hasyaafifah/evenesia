<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Produktivitas extends CI_Model
{

    function getData()
    {
        $query = $this->db->get('tb_produktivitas');
        return $query->result();
    }

    function insertData($data)
    {
        $this->db->insert('tb_produktivitas', $data);
        $this->session->set_flashdata('msg_alert', 'Data Produktivitas berhasil ditambah');
    }

    function getDataDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_produktivitas');
        return $query->row();
    }

    function updateData($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_produktivitas', $data);
        $this->session->set_flashdata('msg_alert', 'Data Produktivitas berhasil diubah');
    }

    function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_produktivitas');
        $this->session->set_flashdata('msg_alert', 'Data Produktivitas berhasil dihapus');
    }
}
