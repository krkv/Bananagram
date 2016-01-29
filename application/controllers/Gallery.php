<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('image_model');
        $this->load->model('comment_model');
        $this->load->helper('form');
    }

    public function index() {
        $data['images'] = $this->image_model->get_all_images();
        $this->load->view('header');
        $this->load->view('view_all', $data);
        $this->load->view('footer');
    }

    public function image($id) {
        $data['selected_image'] = $this->image_model->get_one_image($id);
        if (empty($data['selected_image'])) {
            show_404();
        }
        $data['image_comments'] = $this->comment_model->get_all_comments($id);
        $this->load->view('header');
        $this->load->view('view_one', $data);
        $this->load->view('footer');
    }

}
