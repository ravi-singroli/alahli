<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model('admin_model');
		$this->load->helper('string');
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']  = '</li>';
        $config['last_link']        = 'Last';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_close']   = '</li>';
        $config['next_link']        = 'Next &gt;';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['prev_link']        = '&lt; Prev';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="#">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $this->pagination->initialize($config); 
        help_is_valid_user(CV_ADMIN_ROLE);
		date_default_timezone_set(CV_TIME_ZONE_NAME);
    }
    public function index()
    {
    	//$data["statics_data"] = $this->common_model->get_dashboard_statics_dtls();
		$data['title'] = "Dashboard";
		$data['body'] = CV_ADMIN_FOLDER_NAME."/dashboard";
		$this->load->view(CV_ADMIN_FOLDER_NAME.'/layouts/main',$data);
    }
	
	public function scheduling()
    {
		$data['title'] = "Schedule";
		$data['body'] = CV_ADMIN_FOLDER_NAME."/scheduling";
		$this->load->view(CV_ADMIN_FOLDER_NAME.'/layouts/main',$data);
    }
	
	public function payment()
    {
		$data['title'] = "Payment";
		$data['body'] = CV_ADMIN_FOLDER_NAME."/payment";
		$this->load->view(CV_ADMIN_FOLDER_NAME.'/layouts/main',$data);
    }
		
	public function users_list()
    {
        $config['base_url'] = site_url(CV_ADMIN_FOLDER_NAME.'/users-list');
        $config['total_rows'] = $this->admin_model->users_list();
        $config['per_page'] = CV_RECORD_PER_PAGE;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["count"] = $this->uri->segment(3)+1;
        $data["links"] = $this->pagination->create_links();
        $data["list_data"] = $this->admin_model->users_list($config["per_page"], $page);
        $data['title'] = "Users List";
        $data['body'] = CV_ADMIN_FOLDER_NAME."/users_list";
        $this->load->view(CV_ADMIN_FOLDER_NAME.'/layouts/main',$data);
    }
    public function add_user($student_id=0)
    {
		$data["msg"] = "";
		$data['title'] = "Add Student";
		$data["is_subscribed_package_full_time"] = 0;
		$today_dt = date("Y-m-d");
		
		if($student_id)
		{
			$data['title'] = "Edit Student";
			 $data['edit_dtls'] = $this->common_model->get_table_row("students", "*", array('students.status <'=>CV_STATUS_DELETED, "students.id"=>$student_id));
			if(!$data["edit_dtls"])
			{
				$this->session->set_flashdata("message","<div style='color:red; font-weight:bold;'>Invalid request, You can't edit.</div>");
				redirect(CV_ADMIN_FOLDER_NAME."/students-list");
			}
			
			
			
			$this->db->select("count(*) as full_time_subscribed_package_counts");
			$this->db->from('subscription_dtls');   
			$this->db->join('packages', 'packages.id = subscription_dtls.package_id');     
			$this->db->where(array('subscription_dtls.status'=>1, "packages.pkg_type"=>1, "user_id"=>$student_id, "end_date >="=>$today_dt));
			$this->db->order_by('subscription_dtls.id','desc');
			$package_dtls = $this->db->get()->row_array();
			
			if($package_dtls["full_time_subscribed_package_counts"]>0)
			{
				$data["is_subscribed_package_full_time"] = 1;
			}
			
		}
        if($this->input->post())
        {
			if(!$student_id)
			{
				$this->form_validation->set_rules('ddl_stream','Stream','required');
				$this->form_validation->set_rules('ddl_class','Class','required');
				$this->form_validation->set_rules('txt_email','Email Id','required|valid_email|is_unique[students.email_id]|max_length[50]');
			}
			$this->form_validation->set_rules('txt_name','Name','required|max_length[50]');
			$this->form_validation->set_rules('txt_mobile_no','Mobile No','max_length[10]');
			$this->form_validation->set_rules('txt_institute_name','Institute Name','max_length[150]');
			$this->form_validation->set_rules('txt_dob','DoB','max_length[10]');
			//$this->form_validation->set_rules('ddl_status','Status','required');
            if($this->form_validation->run())     
            {           
				$dob = "";
				if($this->input->post('txt_dob'))
				{
					$dob_arr = explode("/", $this->input->post('txt_dob'));	
					$dob = $dob_arr[2]."-".$dob_arr[1]."-".$dob_arr[0];
				}
				if($student_id)
				{
					$params = array(                    
						'name' => $this->input->post('txt_name'),
						'mobile_no' => $this->input->post('txt_mobile_no'),
						'institute_name' => $this->input->post('txt_institute_name'),
						'dob' => $dob,
						'gender' => $this->input->post('ddl_gender'),
						'status' => $this->input->post('ddl_status'),
						//'updated_by' => $this->session->userdata(CV_SES_USERID),
						'updated_on' => date('Y-m-d H:i:s')
					);
					$this->admin_model->update_student_dtls(array("students.id"=>$student_id), $params);	
					
					if($this->input->post('ddl_package')>0 and $data["is_subscribed_package_full_time"]<=0)
					{		
						$package_dtls = $this->common_model->get_table_row("packages", "*", array("id"=>$this->input->post('ddl_package')));
						$endDate = date('Y-m-d', strtotime("+".$package_dtls["duration"]." months", strtotime($today_dt)));
						$subs_db_data = array("package_id"=>$package_dtls["id"],
										"user_id" => $student_id,
										"orderid" => time().random_string('numeric',2),
										"status" => 1,
										'full_response' => 'Done By Admin',
										'start_date' => $today_dt,
										'end_date' => $endDate,
										"duration" => $package_dtls["duration"],
										"amount" => $package_dtls["price"],
										'created_on'  => date('Y-m-d H:i:s'),
										'updated_on'  => date('Y-m-d H:i:s'),
										"created_by" => 1// From Admin
									);
						$this->common_model->insert_data("subscription_dtls", $subs_db_data);
					}
									
					$this->session->set_flashdata("message","<div style='color:green;'>Data updated successfully.</div>");
					redirect(CV_ADMIN_FOLDER_NAME."/students-list");
				}
				else
				{
					$this->load->helper('string');
					$pwd = strtolower(random_string('alnum', 6));
					$params = array(						
						'stream_id' => $this->input->post('ddl_stream'),
						'class_id' => $this->input->post('ddl_class'),
						'name' => $this->input->post('txt_name'),
						'email_id' => $this->input->post('txt_email'),
						'mobile_no' => $this->input->post('txt_mobile_no'),
						'institute_name' => $this->input->post('txt_institute_name'),
						'dob' => $dob,
						"usr_pwd"=>md5($pwd),
						'gender' => $this->input->post('ddl_gender'),
						//'status' => $this->input->post('ddl_status'),
						//'created_by' => $this->session->userdata(CV_SES_USERID),
						'reg_type' => 4,
						'created_on' => date('Y-m-d H:i:s')
					);
					$new_uid = $this->admin_model->add_students($params);
					
					if($this->input->post('ddl_package'))
					{		
						$package_dtls = $this->common_model->get_table_row("packages", "*", array("id"=>$this->input->post('ddl_package')));
						$endDate = date('Y-m-d', strtotime("+".$package_dtls["duration"]." months", strtotime($today_dt)));
						$subs_db_data = array("package_id"=>$package_dtls["id"],
										"user_id" => $new_uid,
										"orderid" => time().random_string('numeric',2),
										"status" => 1,
										'full_response' => 'Done By Admin',
										'start_date' => $today_dt,
										'end_date' => $endDate,
										"duration" => $package_dtls["duration"],
										"amount" => $package_dtls["price"],
										'created_on'  => date('Y-m-d H:i:s'),
										'updated_on'  => date('Y-m-d H:i:s'),
										"created_by" => 1// From Admin
									);
						$this->common_model->insert_data("subscription_dtls", $subs_db_data);
					}
					
					$verification_url = site_url("verify-account/".base64_encode($new_uid)."/".base64_encode($this->input->post('txt_email')));
					$mail_body = "Hello ".strtoupper($this->input->post("txt_name")).",
						<br /><br />
						Congratulation, You have successfully registered with ".CV_PROJECT_NAME.".
						Your Username :".$this->input->post('txt_email')."<br />
						Your Password :".$pwd."<br />
						<br /><br />
						Please <a href=".$verification_url.">Click here </a> to verify your Email Address.<br /><br />";

					$mail_sub = "Email Verification.";					
					$this->common_model->send_emails(CV_EMAIL_FROM, trim($this->input->post('txt_email')), $mail_sub, $mail_body);
					
					$this->session->set_flashdata("message","<div style='color:green;'>Data saved successfully.</div>");
					redirect(CV_ADMIN_FOLDER_NAME."/add-student");
				}
            }            
        }
		$data["streams"] = $this->common_model->get_table("streams", "id, name", array('streams.status'=>CV_STATUS_ACTIVE), 'streams.name asc');
		$data['body'] = CV_ADMIN_FOLDER_NAME."/add_student";
		$this->load->view(CV_ADMIN_FOLDER_NAME.'/layouts/main',$data);
    }  
	public function delete_user($student_id)
    {
        $flag = $this->admin_model->update_user_dtls(array("tbl_registrations.id"=>$student_id), array("tbl_registrations.status"=>CV_STATUS_DELETED, "tbl_registrations.updated_on"=>date("Y-m-d H:i:s")));
        if($flag)
        {
            $this->session->set_flashdata("message","<div style='color:green;'>Data deteled successfully.</div>");
        }
        redirect(CV_ADMIN_FOLDER_NAME."/users-list");
    }
	
	
}