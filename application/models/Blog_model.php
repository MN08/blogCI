<?php

class Blog_model extends CI_Model
{

    public function getBlog()
    {
        $filter = $this->input->get('search');
        $this->db->like('title', $filter);
        return $this->db->get("myblogs");
    }

    public function getDetail($field, $value)
    {
        $this->db->where($field, $value);
        return $this->db->get('myblogs');
    }

    public function insertBlog($data)
    {
        $this->db->insert('myblogs', $data);
        return $this->db->insert_id();
    }

    public function updateBlog($id, $udata)
    {
        $this->db->where('id', $id);
        $this->db->update('myblogs', $udata);
        return $this->db->affected_rows();
    }

    public function deleteBlog($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('myblogs');
        return $this->db->affected_rows();
    }
}
