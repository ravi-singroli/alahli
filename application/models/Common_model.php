<?php if(!defined('BASEPATH')) exit('No direct script access allowed');



class Common_model extends CI_Model

{

    function __construct()

    {

        parent::__construct();

        $this->load->database();		

    }	

    public function is_valid_admin_user($uname, $pass)

	{

		$this->db->select("*");

		$this->db->from("admin");

		$this->db->where(array("password"=>$pass, "email_id"=>$uname, "status"=>CV_STATUS_ACTIVE));

		return $this->db->get()->row_array();

	}

	public function update_data($table, $condition, $data)

	{

		$this->db->update($table, $data, $condition);

		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;

	}
	

	public function insert_data($table,$data)

    {

        $this->db->insert($table,$data);

        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;

    }

	

	public function get_table($table, $fields, $condition_arr, $order_by = "id") 

	{

		$this->db->select($fields);		

        $this->db->from($table);

		if($condition_arr)

		{

			$this->db->where($condition_arr);

		}

		$this->db->order_by($order_by);

		return $this->db->get()->result_array();		

	}

	

	public function get_table_row($table, $fields, $condition_arr) 

	{

		$this->db->select($fields);		

        $this->db->from($table);

		if($condition_arr)

		{

			$this->db->where($condition_arr);

		}

		return $this->db->get()->row_array();		

	}



    public function send_emails($mail_from="", $mail_to="", $subject="", $mail_body="")

	{

		$this->load->library('email');

		$config['protocol'] = 'sendmail';

		$config['mailpath'] = '/usr/sbin/sendmail';

		$config['charset'] = 'iso-8859-1';

		$config['wordwrap'] = TRUE;

		$config['mailtype'] = 'html';

		$this->email->initialize($config);

		$this->email->from($mail_from);

		$this->email->to($mail_to);

		$this->email->subject($subject);

		$this->email->message($mail_body);

		$this->email->send();

		$this->email->clear();

	}	

}