<?php

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Blog_model');
    }

    public function index()
    {
        $query = $this->Blog_model->getBlog();
        $data['blogs'] = $query->result_array();

        $this->load->view('blog', $data);
    }

    public function detail($url)
    {
        $query = $this->Blog_model->getDetail('url', $url);
        $data['blog'] = $query->row_array();

        $this->load->view('detail', $data);
    }

    public function insert()
    {
        if ($this->input->post()) {
            $data['title'] = $this->input->post('title');
            $data['content'] = $this->input->post('content');
            $data['url'] = $this->input->post('url');

            $id =  $this->Blog_model->insertBlog($data);
            if ($id) {
                echo "ADD BLOG SUCCESS";
            } else {
                echo "ADD BLOG FAILED";
            }
        }

        $this->load->view('insertFrom');
    }

    public function edit($id)
    {

        $query = $this->Blog_model->getDetail('id', $id);
        $data['blog'] = $query->row_array();

        if ($this->input->post()) {
            $udata['title'] = $this->input->post('title');
            $udata['content'] = $this->input->post('content');
            $udata['url'] = $this->input->post('url');

            $id =  $this->Blog_model->updateBlog($id, $udata);
            if ($id) {
                echo "EDIT BLOG SUCCESS";
            } else {
                echo "EDIT BLOG FAILED";
            }
        }

        $this->load->view('editArticle', $data);
    }

    public function delete($id)
    {
        $this->Blog_model->deleteBlog($id);
        redirect('/');
    }
}
