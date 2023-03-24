<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class CreateEvent_model extends Model
{

    /**
     * The database table used by the model.
     * 
     * Insert or create a new record or event record
     */
    public function createEvent($role_id, $e_title, $e_s_date, $e_e_date, $e_s_t, $e_e_t, $e_v, $e_l, $e_d)
    {

        $event = [
            'role_id' => $role_id,
            'e_title' => $e_title,
            'e_start_date' => $e_s_date,
            'e_end_date' => $e_e_date,
            'e_start_time' => $e_s_t,
            'e_end_time' => $e_e_t,
            'e_venue' => $e_v,
            'e_address' => $e_l,
            'e_description' => $e_d
        ];

        $result = $this->db->table('event')->insert($event);

        if ($result)
            return true;
    }



    /**
     * Get all event listed 
     */

    public function getAllEvent()
    {
        return $this->db->table('event as e')
            ->join('admin as a', 'e.role_id = a.admin_id')


            ->get_all();
    }

    /**
     * See details of the event 
     * passing the event id of the event
     */
    public function event_details($event_id)
    {
        return $this->db
            ->table('event as e')
            ->select('e.e_id,e.e_title,e.e_start_date,e.e_end_date,e.e_description,e.e_address,e.created_date,a.username')
            ->join('admin as a', 'a.admin_id = e.role_id')


            ->where('e_id', $event_id)
            // ->where('products.product_name', $product_id)

            ->get();
    }

    public function exist_check($title)
    {
        $check = $this->db->table('event')->where('e_title', $title)->get();
        if ($check) {
            return true;
        } else {
            return false;
        }
    }
}