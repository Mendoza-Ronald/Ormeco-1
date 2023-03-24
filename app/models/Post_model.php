<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Post_model extends Model
{


    public function exist_check($caption)
    {
        $check = $this->db->table('post')->where('post_caption', $caption)->get();
        if ($check) {
            return true;
        } else {
            return false;
        }
    }

    public function insert_post($uid, $caption, $add)
    {



        # GET CURRENT TIME
        date_default_timezone_set('Asia/Manila');
        $data = [

            'user_id' => $uid,
            'post_caption' => $caption,
            'post_date' => date("F j, Y H:i:s a"),
            'post_file' => '',
            'post_address' => $add
        ];

        $result = $this->db->table('post')->insert($data);

        if ($result)
            return true;
    }
}
