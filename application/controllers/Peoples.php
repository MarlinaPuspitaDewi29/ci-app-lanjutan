<?php

class Peoples extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'List of Peoples';

        $this->load->model('Peoples_model', 'Peoples');

        //load library
        $this->load->library('pagination');

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // config
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->from('Peoples');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 8;

        // initialize
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->Peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('Peoples/index', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {

        $this->load->Peoples_model('Peoples_model', 'Peoples');

        $this->Peoples_model->deleteListOfPeoples($id);
        $this->session->set_flashdata('flash', 'Didelete');
        redirect('Peoples');
    }

    public function detail($id)
    {
        $data['judul'] = 'List Of Peoples';
        $data['Peoples'] = $this->Peoples_model->gePeoplesById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('Peoples/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'List Of Peoples';
        $data['People'] = $this->Peoples_model->getPeoplesById($id);

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('Peoples/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Peoples_model->ubahListOfPeople();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Peoples');
        }
    }
}