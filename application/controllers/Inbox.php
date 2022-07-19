<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inbox extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Inbox');
    }

    public function index()
    {

        $queryAllInbox = $this->M_Inbox->getData();
        $DATA = array('queryAllInb' => $queryAllInbox);
        $data = generate_page('Inbox', 'Inbox/index', 'Admin');

        $data['content'] = $this->load->view('partial/Inbox/Inbox',  $DATA, true);
        $this->load->view('V_Inbox', $data);
    }


    public function indexpegawai()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'Nipp', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        $queryAllInbox = $this->M_Inbox->getData();
        $DATA = array('queryAllInb' => $queryAllInbox);
        $data = generate_page('Permohonan', 'Inbox/indexpegawai', 'Pegawai');

        $data['content'] = $this->load->view('partial/Permohonan/Permohonan',  $DATA, true);
        $this->load->view('V_Inbox', $data);
    }

    public function halaman_tambah()
    {
        $this->load->view('partial/Inbox/Inbox');
    }

    public function halaman_edit($id)
    {
        $queryInboxDetail = $this->M_Inbox->getDataDetail($id);
        $DATA = array('queryInbDetail' => $queryInboxDetail);
        $data = generate_page('Inbox', 'Inbox/halaman_edit', 'Admin');
        $data['content'] = $this->load->view('partial/Inbox/Edit',  $DATA, true);
        $this->load->view('V_Inbox', $data);
    }

    public function fungsiTambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'Nipp', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $unit_kerja = $this->input->post('unit_kerja');
        $jabatan = $this->input->post('jabatan');
        $keterangan = $this->input->post('keterangan');

        $ArrInsert = array(
            'nama' => $nama,
            'nip' => $nip,
            'unit_kerja' => $unit_kerja,
            'jabatan' => $jabatan,
            'keterangan' => $keterangan
        );

        $this->M_Inbox->insertData($ArrInsert);
        $this->session->set_flashdata('msg_alert', 'Data Inbox berhasil ditambah');
        redirect(base_url('Inbox/indexpegawai'));
    }

    public function fungsiEdit()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $unit_kerja = $this->input->post('unit_kerja');
        $jabatan = $this->input->post('jabatan');
        $keterangan = $this->input->post('keterangan');

        $ArrUpdate = array(
            'nama' => $nama,
            'nip' => $nip,
            'unit_kerja' => $unit_kerja,
            'jabatan' => $jabatan,
            'keterangan' => $keterangan
        );

        $this->M_Inbox->updateData($id, $ArrUpdate);
        $this->session->set_flashdata('msg_alert', 'Data Inbox berhasil diubah');
        redirect(base_url('Inbox/index'));
    }

    public function fungsiDelete($id)
    {
        $this->M_Inbox->deleteData($id);
        $this->session->set_flashdata('msg_alert', 'Data Inbox berhasil dihapus');
        redirect(base_url('Inbox/index'));
    }
}

	

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */