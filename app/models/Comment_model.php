<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Comment_model extends Model
{

    public function addComment($pid, $uid, $comment)
    {
        $comment = [
            'e_id' => $pid,
            'user_id' => $uid,
            'comments' => $comment

        ];

        $comment = $this->db->table('comments')->insert($comment);

        if ($comment)
            return true;
    }


    public function getAllComment($id)
    {
        // return $this->db->table('ratings')->where('rating_id', $id)->get_all();
        return $this->db
            ->table('comments as c')
            // ->select('r.rate_no,')
            ->join('event as e', 'c.e_id=e.e_id')
            ->join('users as u', 'c.user_id=u.user_id')
            // ->group_by('c.user_id', 'ASC')
            // ->order_by('r.rating_id','DESC')

            ->where('c.e_id', $id)


            ->get_all();
    }

    public function countComment($id)
    {

        return $this->db->table('comments as c')
            ->join('event as e', 'c.e_id = e.e_id')

            ->select_count('c.c_id', 'comment')
            ->where('c.e_id', $id)
            ->get();
    }
}