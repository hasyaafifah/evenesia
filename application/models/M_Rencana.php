<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Rencana extends CI_Model
{

    function getData()
    {
        $query = $this->db->get('tb_rencana');
        return $query->result();
    }

    function insertData($data)
    {
        $this->db->insert('tb_rencana', $data);
        $this->session->set_flashdata('msg_alert', 'Data rencana berhasil ditambah');
    }

    function getDataDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_rencana');
        return $query->row();
    }

    function updateData($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_rencana', $data);
        $this->session->set_flashdata('msg_alert', 'Data rencana berhasil diubah');
    }

    function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_rencana');
        $this->session->set_flashdata('msg_alert', 'Data rencana berhasil dihapus');
    }
}
