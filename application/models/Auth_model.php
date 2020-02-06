<?php

class Auth_model extends CI_Model
{
    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('home');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('home');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('home');
        }
    }

    // public function registration()
    // {
    //     $email = $this->input->post('email', true);
    //     $name = $this->input->post('name', true);
    //     $jurusan = $this->input->post('jurusan', true);
    //     $queryid_jurusan = "SELECT `id`
    //                           FROM `jurusan`
    //                          WHERE `jurusan`.`name` = $jurusan ";
    //     $id_jurusan = $this->db->query($queryid_jurusan)->result_array();

    //     $data = [
    //         'name' => htmlspecialchars($name),
    //         'email' => htmlspecialchars($email),
    //         'image' => 'default.png',
    //         'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
    //         'id_jurusan' => htmlspecialchars($id_jurusan),
    //         'jurusan' => htmlspecialchars($jurusan),
    //         'role_id' => 2,
    //         'url' => 'percakapan/personal',
    //         'is_active' => 0,
    //         'id_access' => 5,
    //         'date_created' => time()
    //     ];

    //     $this->db->insert('user', $data);

    //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account</div>');
    //     redirect('home');
    // }
}
