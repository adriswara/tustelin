<?php

namespace App\Models;

use CodeIgniter\Model;


class Login_Database extends Model
{

    // Insert registration data in database
    public function registration_insert($data)
    {

        // Query to check whether username already exist or not
        $condition = "username_pengguna =" . "'" . $data['username_pengguna'] . "'";
        $this->select('*');
        $this->from('pelanggan');
        $this->where($condition);
        $this->limit(1);
        $query = $this->get();
        if ($query->num_rows() == 0) {

            // Query to insert data in database
            $this->insert('pelanggan', $data);
            if ($this->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }

    // Read data using username and password
    public function login($data)
    {

        $condition = "username_pengguna =" . "'" . $data['username'] . "' AND " . "sandi_pengguna =" . "'" . $data['password'] . "'";
        $this->select('*');
        $this->from('pelanggan');
        $this->where($condition);
        $this->limit(1);
        $query = $this->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    // Read data from database to show data in admin page
    public function read_user_information($username)
    {

        $condition = "username_pengguna =" . "'" . $username . "'";
        $this->select('*');
        $this->from('pelanggan');
        $this->where($condition);
        $this->limit(1);
        $query = $this->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}
