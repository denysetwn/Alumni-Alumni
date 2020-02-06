<?php
class Action_model extends CI_Model
{
    public function post($data)
    {
        $upload = $_FILES['upload']['name'];

        if ($upload) {
            $config['allowed_types'] = 'jpg|jpeg|png|gif|doc|docx|pdf|xls|xlsx';
            $config['max_size']      = '2048';
            $config['upload_path']   = './assets/post/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('upload')) {
                $conf = array('upload_data' => $this->upload->data());
                $file = $conf['upload_data']['file_name'];
            } else {
                echo $this->upload->display_errors();
            }
        }

        $id_sender = $data['user']['id'];
        $data = [
            'id_sender' => htmlspecialchars($id_sender),
            'content_upload' => htmlspecialchars($this->input->post('status', true)),
            'content_file' => htmlspecialchars($file),
            'date' => time()
        ];

        $this->db->insert('posting', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your post has been uploaded!</div>');
    }

    public function comment($data)
    {
        $id_post = $data['posting']['id_posting'];
        $id_sender = $data['user']['id'];

        $data = [
            'id_posting' => htmlspecialchars($id_post),
            'id_sender' => htmlspecialchars($id_sender),
            'comment_content' => htmlspecialchars($this->input->post('comment', true)),
            'date' => time()
        ];

        $this->db->insert('comment', $data);
    }

    public function edit()
    {
        $nama_baru = $this->input->post('namabaru');
        $this->db->set('name', $nama_baru);
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->update('user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Berhasil</div>');
    }

    public function editPhoto($data)
    {
        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['upload']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('upload')) {
                $old_image = $data['user']['image'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->dispay_errors();
            }
        }
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->update('user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Berhasil!</div>');
    }
}
