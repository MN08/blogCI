<?php

class Blog_model extends CI_Model
{

    public function getBlog()
    {
        return $this->db->get("myblogs");
    }

    public function getDetail($url)
    {
        $this->db->where('url', $url);
        return $this->db->get('myblogs');
    }

    public function insertBlog($data)
    {
        $this->db->insert('myblogs', $data);
        return $this->db->insert_id();
    }
}
