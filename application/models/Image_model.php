<?php

class Image_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_all_images() {
        $query = $this->db->get('image');
        return $query->result();
    }

    public function get_one_image($id) {
        $query = $this->db->get_where('image', array('id' => $id));
        return $query->row();
    }

    public function add_new_image() {
        $data = array(
            'file_name' => $this->upload->data('file_name'),
            'thumb_name' => $this->upload->data('raw_name').'_thumb'.$this->upload->data('file_ext'),
            'description' => $this->input->post('description'),
        );
        return $this->db->insert('image', $data);
    }

}
