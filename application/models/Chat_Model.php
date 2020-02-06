<?php
class Chat_model extends CI_Model
{
    public function personal($user, $target)
    {
        $id_sender = $user['id'];
        $id_receiver = $target['id'];

        $queryChat = "SELECT `chat_personal`.`id_sender`,`id_receiver`,`chat_content`,`chat_date`
                    FROM `chat_personal`
                   WHERE `chat_personal`.`id_sender` = $id_sender 
                     AND `chat_personal`.`id_receiver` = $id_receiver
                      OR `chat_personal`.`id_sender` = $id_receiver 
                     AND `chat_personal`.`id_receiver` = $id_sender
                ORDER BY `chat_personal`.`chat_date` ASC
    ";
        $personal = $this->db->query($queryChat)->result_array();

        return $personal;
    }

    public function group($target)
    {
        $id_group = $target['id'];

        $queryChat = "SELECT `chat_group`.`id_sender`,`id_group`,`chat_content`,`chat_date`,`user`.`name`,`user`.`image`
                    FROM `chat_group` JOIN `user`
                      ON `chat_group`.`id_sender`= `user`.`id`
                   WHERE `chat_group`.`id_group` = $id_group
                ORDER BY `chat_group`.`chat_date` ASC
    ";
        $group = $this->db->query($queryChat)->result_array();

        return $group;
    }

    public function globalgroup()
    {
        $queryChat = "SELECT `chat_global`.`id_sender`,`chat_content`,`chat_date`,`user`.`name`,`user`.`image`,`user`.`jurusan`
                    FROM `chat_global` JOIN `user`
                      ON `chat_global`.`id_sender` = `user`.`id`
                ORDER BY `chat_global`.`id_chat` ASC
    ";

        $globalgroup = $this->db->query($queryChat)->result_array();
        
        return $globalgroup;
    }

    public function groupUser($id_jurusan)
    {
        $queryUser = "SELECT `user`.`id`, `user`.`name`
                        FROM `user` JOIN `jurusan`
                          ON `user`.`id_jurusan` = `jurusan`.`id`
                       WHERE `user`.`id_jurusan` = $id_jurusan
                    ORDER BY `user`.`id` ASC
    ";

        $groupUser = $this->db->query($queryUser)->result_array();
        
        return $groupUser;
    }
    
    public function globalGroupUser()
    {
        $queryUser = "SELECT `user`.`id`, `user`.`name`
                        FROM `user` JOIN `jurusan`
                          ON `user`.`id_jurusan` = `jurusan`.`id`
                    ORDER BY `user`.`id` ASC
    ";

        $groupUser = $this->db->query($queryUser)->result_array();
        
        return $groupUser;
    }
}
