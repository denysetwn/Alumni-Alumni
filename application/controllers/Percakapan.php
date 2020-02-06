<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Percakapan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Percakapan_model');
        $this->load->model('LeftContent_model');
        $this->load->model('Chat_model');

        $this->percakapan = $this->Percakapan_model;
        $this->chat = $this->Chat_model;
        $this->leftcontent = $this->LeftContent_model;;
    }

    public function personal()
    {
        $target_id = $this->uri->segment(3);

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['target'] = $this->db->get_where('user', ['id' => $target_id])->row_array();

        $target = $data['target'];
        $user = $data['user'];
        $data['personal'] = $this->chat->personal($user, $target);

        $data['menu'] = $this->leftcontent->menu();
        $data['submenu'] = $this->leftcontent->submenu($user);

        $this->form_validation->set_rules('tulis', 'Tulis', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Alumni Saintek';
            $this->load->view('chat/personal', $data);
        } else {
            $this->percakapan->personal($data);
            redirect('percakapan/personal/' . $this->uri->segment(3));
        }
    }

    public function group()
    {
        $target_id = $this->uri->segment(3);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['target'] = $this->db->get_where('jurusan', ['id' => $target_id])->row_array();

        $target = $data['target'];
        $user = $data['user'];
        $data['group'] = $this->chat->group($target);

        $data['menu'] = $this->leftcontent->menu();
        $data['submenu'] = $this->leftcontent->submenu($user);

        $id_jurusan = $target['id'];
        $data['alluser'] = $this->chat->groupUser($id_jurusan);

        $this->form_validation->set_rules('tulis', 'Tulis', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Alumni Saintek';
            $this->load->view('chat/group', $data);
        } else {
            $this->percakapan->group($data);
            redirect('percakapan/group/' . $this->uri->segment(3));
        }
    }

    public function globalGroup()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['globalgroup'] = $this->chat->globalgroup();

        $user = $data['user'];
        $data['menu'] = $this->leftcontent->menu();
        $data['submenu'] = $this->leftcontent->submenu($user);

        $data['alluser'] = $this->chat->globalGroupUser();

        $this->form_validation->set_rules('tulis', 'Tulis', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Alumni Saintek';
            $this->load->view('chat/globalgroup', $data);
        } else {
            $this->percakapan->globalGroup($data);
            redirect('percakapan/globalGroup');
        }
    }
}
