<?php

class Binatang_model extends CI_model
{
    public function getAllBinatang()
    {
        return $this->db->get('binatang')->result_array();
    }

    public function tambahDaftarBinatang()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "asal" => $this->input->post('asal', true),
            "namalatin" => $this->input->post('namalatin', true),
            "tingkattaksonomi" => $this->input->post('tingkattaksonomi', true),
            "makanan" => $this->input->post('makanan', true)
        ];

        $this->db->insert('binatang', $data);
    }

    public function hapusDaftarBinatang($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('binatang');
    }

    public function getBinatangById($id)
    {
        return $this->db->get_where('binatang', ['id' => $id])->row_array();
    }

    public function ubahDaftarBinatang()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "asal" => $this->input->post('asal', true),
            "namalatin" => $this->input->post('namalatin', true),
            "tingkattaksonomi" => $this->input->post('tingkattaksonomi', true),
            "makanan" => $this->input->post('makanan', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('binatang', $data);
    }

    public function cariDaftarBinatang()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('makanan', $keyword);
        $this->db->or_like('asal', $keyword);
        $this->db->or_like('namalatin', $keyword);
        $this->db->or_like('tingkattaksonomi', $keyword);
        return $this->db->get('binatang')->result_array();
    }
}