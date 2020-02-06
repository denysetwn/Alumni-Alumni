<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Action_model');
        $this->load->model('LeftContent_model');
        $this->load->model('Post_model');
        $this->load->model('Profile_model');

        $this->action = $this->Action_model;
        $this->leftcontent= $this->LeftContent_model;
        $this->post = $this->Post_model;
        $this->profile = $this->Profile_model;
    }

    public function index()
    {
        $data['title'] = 'Alumni Saintek';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->leftcontent->menu();
        $data['post'] = $this->post->postContent();
        $data['comment'] = $this->post->commentContent();

        $user = $data['user'];
        $data['submenu'] = $this->leftcontent->submenu($user);

        $this->load->view('user/index', $data);       
    }

    public function post()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('status', 'Status', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Alumni Saintek';
            $this->load->view('user/index', $data);
        } else {
            $this->action->post($data);
            redirect('user');
        }
    }

    public function comment()
    {
        $id_post = $this->uri->segment(3);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['posting'] = $this->db->get_where('posting', ['id_posting' => $id_post])->row_array();

        $this->form_validation->set_rules('comment', 'Comment', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Alumni Saintek';
            $this->load->view('user/index', $data);
            
        } else {
            $this->action->comment($data);
            redirect('user');
        }
    }

    public function myProfile()
    {
        $id_post = $this->uri->segment(3);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $user = $data['user'];
        $data['menu'] = $this->leftcontent->menu();
        $data['submenu'] = $this->leftcontent->submenu($user);

        $data['post'] = $this->profile->post($user);
        $data['comment'] = $this->profile->comment();

        $data['posting'] = $this->db->get_where('posting', ['id_posting' => $id_post])->row_array();

        $this->form_validation->set_rules('comment', 'Comment', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Alumni Saintek';
            $this->load->view('user/profile', $data);
        } else {
            $this->action->comment($data);
            redirect('user/profile');
        }
    }

    public function pengaturan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('lulusan', 'Lulusan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Alumni Saintek';
            $this->load->view('user/pengaturan', $data);
        } else {
            $this->action->edit();
            redirect('user/pengaturan');
        }
    }

    public function editPhoto()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->action->editPhoto($data);
        redirect('user/pengaturan');
    }

    public function changePassword()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('passwordlama', 'PasswordLama', 'required|trim');
        $this->form_validation->set_rules('passwordbaru', 'PasswordBaru', 'required|trim|min_length[3]|matches[passwordbaru2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('passwordbaru2', 'PasswordBaru2', 'required|trim|matches[passwordbaru]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Alumni Saintek';
            $this->load->view('user/password', $data);
        } else {
            $current_password = $this->input->post('passwordlama');
            $new_password = $this->input->post('passwordbaru');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/changePassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('user/changePassword');
                }
            }
        }
    }
}
