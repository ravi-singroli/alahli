<?php
class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function add_users($params)
    {
        $this->db->insert('tbl_registrations',$params);
        return $this->db->insert_id();
    }
   
    public function users_list($limit=0, $start=0)
    {
        $this->db->select("tbl_registrations.*");
        $this->db->from('tbl_registrations');
       // $this->db->where(array('tbl_registrations.status <'=>CV_STATUS_DELETED));
        $this->db->order_by('tbl_registrations.name','asc');
        if($limit==0 and $start==0)
        {
            return $this->db->count_all_results();
        }       
        $this->db->limit($limit, $start);
        return $this->db->get()->result_array();
    }

    public function update_user_dtls($condition, $data)
    {
        $this->db->where($condition);
        $this->db->update('tbl_registrations',$data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
	
}