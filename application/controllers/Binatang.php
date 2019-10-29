<?php

class Binatang extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Binatang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Binatang';
        $data['binatang'] = $this->Binatang_model->getAllBinatang();
        if ($this->input->post('keyword')) {
            $data['binatang'] = $this->Binatang_model->cariDaftarBinatang();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('binatang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Daftar Binatang';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('asal', 'Asal', 'required');
        $this->form_validation->set_rules('namalatin', 'Nama Latin', 'required');
        $this->form_validation->set_rules('tingkattaksonomi', 'Tingkat taksonomi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('binatang/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Binatang_model->tambahDaftarBinatang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('binatang');
        }
    }

    public function hapus($id)
    {
        $this->Binatang_model->hapusDaftarBinatang($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('binatang');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Daftar Binatang';
        $data['binatang'] = $this->Binatang_model->getBinatangById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('binatang/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Daftar Binatang';
        $data['binatang'] = $this->Binatang_model->getBinatangById($id);
        $data['makanan'] = ['Sayuran', 'Daging', 'Rumput', 'lain-lain'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('asal', 'Asal', 'required');
        $this->form_validation->set_rules('namalatin', 'Nama Latin', 'required');
        $this->form_validation->set_rules('tingkattaksonomi', 'Tingkat taksonomi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('binatang/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Binatang_model->ubahDaftarBinatang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('binatang');
        }
    }
}