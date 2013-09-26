<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dict
 *
 * @author jenal<warungkopidigital.blogspot.com>
 */

namespace Models;

use Resources;

class User {

    private $db;

    public function __construct() {

        $this->db = new Resources\Database;
    }

    public function getALL($offset = 0, $limit = NULL, $keyword = NULL) {
        $where = $lim = "";
        if ($keyword != NULL) {
            $where = " WHERE " . $this->getwhere($keyword);
        }
        if ($limit != NULL) {
            $lim = "LIMIT $offset,$limit";
        }
        $query = "SELECT username,nama,ip,level,last_login,password FROM user  $where ORDER BY name " . $lim;
        $result = $this->db->results($query);
        return $result;
    }

    public function save($field) {

        $result = $this->db->insert('user', $field);
        return $result;
    }

    public function delete($id) {
        $query = "DELETE FROM user WHERE id='" . $id . "'";
        return $this->db->results($query);
    }

    public function update($field, $username) {
        return $this->db->update('user', $field, array('username' => $username));
    }

    public function getwhere($param) {
        $where = "1";
        $fc = 0;
        if (is_array($param)) {
            foreach ($param as $key => $value) {
                if ($fc == 0) {
                    $where = $key . "=" . $value;
                    $fc = 1;
                } else {
                    $where = $where . " AND " . $key . "" . $value;
                }
            }
        } else {
            $where = $param;
        }
        return $where;
    }

}

