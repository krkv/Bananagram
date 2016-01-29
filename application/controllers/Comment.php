<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('comment_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function add() {
        $image_id = $this->input->post('image_id');
        $this->form_validation->set_rules('comment_text', 'Comment', 'trim|required');
        if (!$this->form_validation->run()) {
            redirect(base_url('gallery/image/'.$image_id));
        } else {
            $this->comment_model->add_new_comment($image_id);
            redirect(base_url('gallery/image/'.$image_id));
        }
    }

}
