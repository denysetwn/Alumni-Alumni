<?php

class Post_model extends CI_Model
{
    public function postContent()
    {
        $queryPost = "SELECT *
                        FROM `posting` JOIN `user`
                          ON `posting`.`id_sender` = `user`.`id`
                    ORDER BY `posting`.`id_posting` DESC
        ";

        $post = $this->db->query($queryPost)->result_array();

        return $post;
    }

    public function commentContent()
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