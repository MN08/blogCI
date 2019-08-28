<?php

class Blog_model extends CI_Model
{

    public function getBlog($limit, $offset)
    {
        $filter = $this->input->get('search');
        $this->db->like('title', $filter);
        $this->db->limit($limit, $offset);
        $this->db->order_by('date', 'desc');
        return $this->db->get("articles");
    }

    public function getAllBlog()
    {
        $filter = $this->input->get('search');
        $this->db->like('title', $filter);
        return $this->db->count_all_results("articles");
    }

    public function getDetail($field, $value)
    {
        $this->db->where($field, $value);
        return $this->db->get('articles');
    }

    public function insertBlog($data)
    {
        $this->db->insert('articles', $data);
        return $this->db->insert_id();
    }

    public function updateBlog($id, $udata)
    {
        $this->db->where('id', $id);
        $this->db->update('articles', $udata);
        return $this->db->affected_rows();
    }

    public function deleteBlog($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('articles');
        return $this->db->affected_rows();
    }
}
