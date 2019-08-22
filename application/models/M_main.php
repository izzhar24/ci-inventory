<?php
class M_main extends CI_Model
{
    function cekadmin($userID)
    {
        $this->db->select('group_id');
        $this->db->where('user_id', $userID);
        $this->db->from('users_groups', $userID);
        return $this->db->get()->row();
    }
}
