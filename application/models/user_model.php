<?php

class User_model extends CI_Model
{

    public function insertUser($arraydata)
    {

        // $this->db->query('insert into'); MANUAL QUERY COMMAND
        // $arraydata = array('first_name'=>$first_name,);
        // return $this->db->affected_rows();
        $this->db->insert('login', $arraydata);

        if ($this->db->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    }

    public function userLogin($email, $password)
    {
        $this->db->where('email', $email, true);
        $this->db->where('password', $password, true);
        $query = $this->db->get('login');

        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    // public function fetchuser($id)
    // {
    //     $this->db->where('id', $id);
    //     $query = $this->db->get('login')->result_array();
    //     // select * from login where id = ?
    //     // limit 1 row_array
    //     // all result result array
    //     return $query;
    // }

    // public function updateUser($id, $arraydata)
    // {

    //     $this->db->where('id', $id);
    //     $this->db->update('login', $arraydata);
    // }

    public function retriveData()
    {
        $this->db->where('is_valid', '1');
        $query = $this->db->get('login');
        return $query->result_array();
    }

    public function getData($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('login');
        return $query->row_array();
    }

    public function updateData($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('login', $data);
    }

    public function deleteData($id)
    {
        $this->db->where('is_valid', '0');
        $this->db->where('id', $id);
        $this->db->update('login');
    }
    public function getUserByEmail($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('login'); // Assuming your table name is 'users'
        return $query->row(); // Return a single row
    }

}
