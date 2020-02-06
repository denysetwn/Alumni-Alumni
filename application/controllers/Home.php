<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->model('Auth_model');
        $this->auth = $this->Auth_model;
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Alumni Saintek';
            $this->load->view('home/landing', $data);
        } else {
            $this->auth->login($data);
        }
    }

    public function aboutUs()
    {
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Alumni Saintek';
            $this->load->view('home/aboutUs', $data);
        } else {
            $this->auth->login($data);
        }
    }

    public function berita()
    {
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Alumni Saintek';
            $this->load->view('home/berita', $data);
        } else {
            $this->auth->login($data);
        }
    }
}
