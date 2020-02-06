<?php
class Profile_model extends CI_Model
{
    public function post($user)
    {
        $user_id = $user['id'];

        $queryPost = "SELECT *
                        FROM `posting` jOIN `user`
                          ON `posting`.`id_sender` = `user`.`id`
                       WHERE `posting`.`id_sender` = $user_id
                    ORDER BY `posting`.`date` DESC
            ";
        $post = $this->db->query($queryPost)->result_array();

        return $post;
    }

    public function comment()
    {
        $queryComment = "SELECT *
                          FROM `comment` JOIN `user`
                            ON `comment`.`id_sender` = `user`.`id`
                      ORDER BY `comment`.`id_comment` ASC
            ";
        $comment = $this->db->query($queryComment)->result_array();

        return $comment; 
    }
}
