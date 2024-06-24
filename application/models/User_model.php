<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function getUserByUsername1($username)
    {
        $sql = 'select * from tb_user 
        where username = ' . $this->db->escape($username);
        $query = $this->db->query($sql);
        return $query;
    }

    public function getUserByUsername2($where)
    {
        return $this->db->select('id_user, nama, username, password')
            ->from('tb_user')
            ->where($where)
            ->get();
    }

    public function getUserByUsername3($username)
    {
        $this->db->select('id_user, username, password');
        $this->db->where('username', $username);
        $query = $this->db->get("tb_user");
        return $query;
    }

    public function getAllUser()
    {
        $this->db->order_by("id_user", "desc");
        $query = $this->db->get("tb_user");
        return $query;
    }
}
