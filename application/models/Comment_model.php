<?php

class Comment_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_all_comments($image_id) {
        $query = $this->db->get_where('comment', array('image_id' => $image_id));
        return $query->result();
    }

    public function add_new_comment($image_id) {
        $data = array(
            'image_id' => $image_id,
            'comment_text' => $this->input->post('comment_text'),
        );
        return $this->db->insert('comment', $data);
    }

}
