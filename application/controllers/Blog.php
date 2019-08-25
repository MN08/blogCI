<?php

class Blog extends CI_Controller{

public function index(){

    $data['blogs'] = [
        [
                'title' => 'artikel pertama saya',
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus debitis explicabo quae totam quos perferendis nobis, dignissimos dolor officia animi accusamus laudantium obcaecati impedit ex sunt incidunt, maiores dolore sit!'
        ],
        [
                'title' => 'artikel kedua saya',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sed viverra ipsum nunc aliquet bibendum enim. In massa tempor nec feugiat. Nunc aliquet bibendum enim facilisis gravida. Nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Amet luctus venenatis lectus magna fringilla.'
        ],
        [
                'title' => 'artikel ketiga saya',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sed viverra ipsum nunc aliquet bibendum enim. In massa tempor nec feugiat. Nunc aliquet bibendum enim facilisis gravida. Nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Amet luctus venenatis lectus magna fringilla.'
        ],

    ];

    $this->load->view('blog',$data);
}

}

?>