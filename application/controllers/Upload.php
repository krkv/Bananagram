<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('image_model');
        $this->load->library('image_lib');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('upload_new', array('error' => ''));
        $this->load->view('footer');
    }

    public function do_upload() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5120';
        $config['file_name'] = 'banana';
        $this->load->library('upload', $config);
        $this->form_validation->set_rules('description', 'Description', 'trim|max_length[255]');
        if (!$this->upload->do_upload('userfile') OR !$this->form_validation->run()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('header');
            $this->load->view('upload_new', $error);
            $this->load->view('footer');
        } else {
            $upload_data = $this->upload->data();
            $this->create_thumb($upload_data['full_path']);
            $this->image_model->add_new_image();
            $insert_id = $this->db->insert_id();
            redirect(base_url('gallery/image/'.$insert_id));
        }
    }

    private function create_thumb($full_path) {
        $config['image_library'] = 'gd2';
        $config['source_image'] = $full_path;
        $config['new_image'] = './uploads/thumbs';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 200;
        $config['height'] = 200;
        $this->image_lib->initialize($config);
        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        }
        $this->image_lib->clear();
    }

}
