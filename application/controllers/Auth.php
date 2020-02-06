<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->model('Auth_model');
        $this->auth = $this->Auth_model;
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('home');
        }

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Alumni Saintek User Registration';
            $this->load->view('templates/headerFix', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/footerFix');
        } else {
            $this->auth->registration();
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('home');
    }
}
