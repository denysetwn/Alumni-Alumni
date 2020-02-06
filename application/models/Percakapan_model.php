<?php

class Percakapan_model extends CI_Model
{
    public function personal($data)
    {
        $id_sender = $data['user']['id'];
        $id_receiver = $data['target']['id'];

        $data = [
            'id_sender' => htmlspecialchars($id_sender),
            'id_receiver' => htmlspecialchars($id_receiver),
            'chat_content' => htmlspecialchars($this->input->post('tulis', true)),
            'chat_date' => time()
        ];

        $this->db->insert('chat_personal', $data);
    }

    public function group($data)
    {
        $id_sender = $data['user']['id'];
        $id_group = $data['target']['id'];

        $data = [
            'id_sender' => htmlspecialchars($id_sender),
            'id_group' => htmlspecialchars($id_group),
            'chat_content' => htmlspecialchars($this->input->post('tulis', true)),
            'chat_date' => time()
        ];

        $this->db->insert('chat_group', $data);
    }

    public function globalGroup($data)
    {
        $id_sender = $data['user']['id'];

        $data = [
            'id_sender' => htmlspecialchars($id_sender),
            'chat_content' => htmlspecialchars($this->input->post('tulis', true)),
            'chat_date' => time()
        ];

        $this->db->insert('chat_global', $data);
    }
}
