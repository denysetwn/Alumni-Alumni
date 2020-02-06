<?php

class LeftContent_model extends CI_Model
{
    public function menu()
    {
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `sidebar_menu`.`id`,`menu`,`id_access`
                        FROM `sidebar_menu` JOIN `user_role`
                          ON `sidebar_menu`.`id_access` = `user_role`.`id`
                       WHERE `sidebar_menu`.`id_access` = $role_id
                    ORDER BY `sidebar_menu`.`id` ASC
        ";
        $menu = $this->db->query($queryMenu)->result_array();

        return $menu;
    }

    public function submenu($user)
    {
        $role_id = $this->session->userdata('role_id');
        $userJurusan = $user['id_jurusan'];

        if ($role_id == 1) {
            $allChat = [
                [
                    'id' => '11',
                    'image' => '',
                    'id_access' => '3',
                    'name' => 'Fakultas Saintek',
                    'url'  => 'percakapan/globalGroup'
                ]
            ];
            $queryJurusan = "SELECT `id`,`name`,`id_access`,`url`,`image`
                               FROM `jurusan`
                           ORDER BY `id` ASC
                ";
            $jurusan = $this->db->query($queryJurusan)->result_array();
            $finalJurusan = array_merge($jurusan, $allChat);

            $querySubMenu = "SELECT `id`,`name`,`id_access`,`url`,`image`
                               FROM `sidebar_sub_menu`
                              WHERE `sidebar_sub_menu`.`is_active` = 1
                           ORDER BY `sidebar_sub_menu`.`id` ASC
                ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            $mergeSubMenu = array_merge($finalJurusan, $subMenu);
        } else {
            $allChat = [
                [
                    'id' => '11',
                    'image' => '',
                    'id_access' => '4',
                    'name' => 'Fakultas Saintek',
                    'url'  => 'percakapan/globalGroup'
                ]
            ];
            $queryJurusan = "SELECT `id`,`name`,`id_access`,`url`,`image`
                               FROM `jurusan`
                              WHERE `id` = $userJurusan
                ";
            $jurusan = $this->db->query($queryJurusan)->result_array();
            $finalJurusan = array_merge($jurusan, $allChat);

            $queryUser = "SELECT `id`,`name`,`image`,`url`,`id_access`
                            FROM `user`
                           WHERE `user`.`is_active` = 1
                             AND `user`.`id_jurusan` = $userJurusan
                        ORDER BY `user`.`id` ASC
                ";
            $user = $this->db->query($queryUser)->result_array();
            $mergeSubMenu = array_merge($finalJurusan, $user);
        }

        return $mergeSubMenu;
    }
}