<?php

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Blog_model');
    }

    public function index($offset = 0)
    {
        $this->load->library('pagination');

        $config['base_url'] = site_url('blog/index');
        $config['total_rows'] = $this->Blog_model->getAllBlog();
        $config['per_page'] = 3;

        $this->pagination->initialize($config);

        $query = $this->Blog_model->getBlog($config['per_page'], $offset);
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
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required|alpha_dash');

        if ($this->form_validation->run() === TRUE) {
            $data['title'] = $this->input->post('title');
            $data['content'] = $this->input->post('content');
            $data['url'] = $this->input->post('url');

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('cover')) {
                echo $this->upload->display_errors();
            } else {
                $data['cover'] = $this->upload->data()['file_name'];
            }

            $id =  $this->Blog_model->insertBlog($data);
            if ($id) {
                $this->session->set_flashdata("message", '<div class="alert alert-info">ADD BLOG SUCCESS </div>');
                redirect('/');
            } else {
                $this->session->set_flashdata("message", '<div class="alert alert-danger">ADD BLOG FAILED </div>');
                redirect('/');
            }
        }

        $this->load->view('insertFrom');
    }

    public function edit($id)
    {

        $query = $this->Blog_model->getDetail('id', $id);
        $data['blog'] = $query->row_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required|alpha_dash');

        if ($this->form_validation->run() === TRUE) {

            $udata['title'] = $this->input->post('title');
            $udata['content'] = $this->input->post('content');
            $udata['url'] = $this->input->post('url');

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            $this->upload->do_upload('cover');

            if (!empty($this->upload->data()['file_name'])) {
                $udata['cover'] = $this->upload->data()['file_name'];
            }


            $id =  $this->Blog_model->updateBlog($id, $udata);
            if ($id) {
                $this->session->set_flashdata("message", '<div class="alert alert-info">EDIT BLOG SUCCESS </div>');
                redirect('/');
            } else {
                $this->session->set_flashdata("message", '<div class="alert alert-danger">EDIT BLOG FAILED </div>');
                redirect('/');
            }
        }

        $this->load->view('editArticle', $data);
    }

    public function delete($id)
    {
        $result = $this->Blog_model->deleteBlog($id);
        if ($result) {
            $this->session->set_flashdata("message", '<div class="alert alert-info">DELETE BLOG SUCCESS </div>');
            redirect('/');
        } else {
            $this->session->set_flashdata("message", '<div class="alert alert-danger">DELETE BLOG FAILED </div>');
            redirect('/');
        }
        redirect('/');
    }

    public function login()
    {
        if ($this->input->post()) {

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($username == 'admin' && $password == 'admin') {
                $_SESSION['username'] = 'admin';
                redirect('/');
            } else {
                $this->session->set_flashdata("message", '<div class="alert alert-danger">Username and password incorrect </div>');
                redirect('blog/login');
            }
        }
        $this->load->view("login");
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
