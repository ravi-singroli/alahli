
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller 
{
    public function __construct()
	{
        parent::__construct();
		$this->load->model("common_model");
		date_default_timezone_set(CV_TIME_ZONE_NAME);
    }	
	public function index() 
	{ 
		if($this->input->post())
		{
			$this->form_validation->set_rules('txt_name', 'Your Name', 'trim|required|max_length[50]');
			$this->form_validation->set_rules('txt_email_id', 'Your Email Id', 'trim|required|valid_email|max_length[50]');
			$this->form_validation->set_rules('txt_mobile_no', 'Your Phone Number', 'trim|required|max_length[10]');
			if($this->form_validation->run())
			{   
				$is_already_exist = $this->common_model->get_table_row("tbl_registrations", "id", array("email_id" => $this->input->post("txt_email_id")));
				if(!$is_already_exist)
				{	
					$db_arr = array("name" => $this->input->post("txt_name"),
								"email_id" => $this->input->post("txt_email_id"),
								"mobile_no" => $this->input->post("txt_mobile_no"),
								"created_on" => date('Y-m-d H:i:s')
								);

					$this->common_model->insert_data("tbl_registrations", $db_arr);
					
					$mail_body = "You have got a new enquiry for a new registration. <br/><br/>
					Name : ".strtoupper($this->input->post("txt_name"))."<br/>
								  Email Address : ".strtoupper($this->input->post("txt_email_id"))."<br/>
								  Phone Number : ".strtoupper($this->input->post("txt_mobile_no"))."<br/>";
	
					$mail_sub = "New register with us request at ".date("d/m/Y H:i:s");
	
					$this->common_model->send_emails(CV_EMAIL_FROM, CV_EMAIL_TO, $mail_sub, $mail_body);
					//$this->session->set_flashdata('message', "<p style='color:green'>Your request submitted successfully, We will contact you soon.</p>");				
					echo "100";die;
				}
				else
				{
					echo "<p style='color:green; padding-left:10px;'>You have already registered.</p>";die;
				}
			}
			else
			{
				echo validation_errors();die;	
			}
		} 
		
		$data['title'] = "Home";
		$data['body'] = CV_ARABIC_LANG."/home";
		$this->load->view(CV_ARABIC_LANG.'/layouts/main',$data); 
	}
	
	public function about_us() 
	{
		$data['title'] = "About Us";
		$data['body'] = CV_ARABIC_LANG."/about_us";
		$this->load->view(CV_ARABIC_LANG.'/layouts/main',$data);
	}
	
	public function contact_us() 
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('txt_name', 'Your Name', 'trim|required|max_length[50]');
			$this->form_validation->set_rules('txt_email_id', 'Your Email Id', 'trim|required|valid_email|max_length[50]');
			$this->form_validation->set_rules('txt_msg', 'Your Message', 'trim|required|max_length[5000]');
			if($this->form_validation->run())
			{   	
				$db_arr = array("name" => $this->input->post("txt_name"),
								"email_id" => $this->input->post("txt_email_id"),
								"message" => $this->input->post("txt_msg"),
								"created_on" => date('Y-m-d H:i:s')
								);

				$this->common_model->insert_data("tbl_contact_requests", $db_arr);
				//$this->session->set_flashdata('message', "<p style='color:green'>Your request submitted successfully, We will contact you soon.</p>");
				//redirect(site_url("contact-us"));
				echo "100";die;
			}
			else
			{
				echo validation_errors();die;	
			}
		}
		
		$data['title'] = "Contact Us";
		$data['body'] = CV_ARABIC_LANG."/contact_us";
		$this->load->view(CV_ARABIC_LANG.'/layouts/main',$data);
		
	}
	
	public function get_in_touch() 
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('txt_name', 'Your Name', 'trim|required|max_length[50]');
			$this->form_validation->set_rules('txt_email_id', 'Your Email Id', 'trim|required|valid_email|max_length[50]');
			$this->form_validation->set_rules('txt_msg', 'Your Message', 'trim|required|max_length[5000]');
			if($this->form_validation->run())
			{   	
				$db_arr = array("name" => $this->input->post("txt_name"),
								"email_id" => $this->input->post("txt_email_id"),
								"message" => $this->input->post("txt_msg"),
								"created_on" => date('Y-m-d H:i:s')
								);

				$this->common_model->insert_data("tbl_get_in_touch_requests", $db_arr);
				echo "100";die;
			}
			else
			{
				echo validation_errors();die;	
			}
		}		
	}
	
	public function submit_newsletter() 
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('txt_email_id', 'Your Email Id', 'trim|required|valid_email|max_length[50]');
			if($this->form_validation->run())
			{   
				$is_already_subs = $this->common_model->get_table_row("tbl_newletter_requests", "id", array("email_id" => $this->input->post("txt_email_id")));
				if(!$is_already_subs)
				{	
					$db_arr = array("email_id" => $this->input->post("txt_email_id"),
									"created_on" => date('Y-m-d H:i:s')
									);
	
					$this->common_model->insert_data("tbl_newletter_requests", $db_arr);
					echo "100";die;
				}
				else
				{
					echo "<p style='color:#fff'>You have already subscribed.</p>";die;
				}
			}
			else
			{
				echo validation_errors();die;	
			}
		}		
	}
	
	public function store_user_feedbacks() 
	{  
		if($this->input->post())
		{
			$this->form_validation->set_rules('feedback_val', 'Feedback', 'trim|required|max_length[20]');
			if($this->form_validation->run())
			{
				/*$is_already_subs = $this->common_model->get_table_row("tbl_newletter_requests", "id", array("email_id" => $this->input->post("txt_email_id")));
				if(!$is_already_subs)
				{*/	
					$db_arr = array("feedback_val" => $this->input->post("feedback_val"),
									"user_ip_address" => $_SERVER['REMOTE_ADDR'],
									"created_on" => date('Y-m-d H:i:s')
									);
		
					$this->common_model->insert_data("tbl_feedbacks", $db_arr);
					echo "100";die;
				/*}
				else
				{
					echo "<p style='color:#fff'>You have already subscribed.</p>";die;
				}*/
			}
			else
			{
				echo validation_errors();die;	
			}
		}					
	}	
	
	public function light_motor_driving() 
	{
		$data['title'] = "Light Motor Driving";
		$data['body'] = CV_ARABIC_LANG."/light_motor_driving";
		$this->load->view(CV_ARABIC_LANG.'/layouts/main',$data);
	}
		
	public function motor_cycle_driving() 
	{
		$data['title'] = "Motor Cycle Driving";
		$data['body'] = CV_ARABIC_LANG."/motor_cycle_driving";
		$this->load->view(CV_ARABIC_LANG.'/layouts/main',$data);
	}
	
	public function heavy_bus_driving() 
	{
		$data['title'] = "Heavy Bus Driving";
		$data['body'] = CV_ARABIC_LANG."/heavy_bus_driving";
		$this->load->view(CV_ARABIC_LANG.'/layouts/main',$data);
	}

	public function light_bus_driving()
	{
		$data['title'] = "Light Bus Driving" ;
		$data['body'] = CV_ARABIC_LANG."/light_bus_driving";
		$this->load->view(CV_ARABIC_LANG.'/layouts/main', $data);
	}


	public function people_determination_details()
	{
		$data['title'] = "People of Determination Details" ;
		$data['body'] = CV_ARABIC_LANG."/people_determination_details";
		$this->load->view(CV_ARABIC_LANG.'/layouts/main', $data);
	}		
	
	public function heavy_truck_driving() 
	{
		$data['title'] = "Heavy Truck Driving";
		$data['body'] = CV_ARABIC_LANG."/heavy_truck_driving";
		$this->load->view(CV_ARABIC_LANG.'/layouts/main',$data);
	}		
	
	public function heavy_light_forklift_driving() 
	{
		$data['title'] = "Heavy Light Forklift Driving";
		$data['body'] = CV_ARABIC_LANG."/heavy_light_forklift_driving";
		$this->load->view(CV_ARABIC_LANG.'/layouts/main',$data);
	}	
	
	public function desert_driving() 
	{
		$data['title'] = "Desert Driving";
		$data['body'] = CV_ARABIC_LANG."/desert_driving";
		$this->load->view(CV_ARABIC_LANG.'/layouts/main',$data);
	}	
	
	public function defensive_driving() 
	{
		$data['title'] = "Defensive Driving";
		$data['body'] = CV_ARABIC_LANG."/defensive_driving";
		$this->load->view(CV_ARABIC_LANG.'/layouts/main',$data);
	}
		
	public function company_introductions() 
	{
		$data['title'] = "Company Introductions";
		$data['body'] = CV_ARABIC_LANG."/company_introductions";
		$this->load->view(CV_ARABIC_LANG.'/layouts/main',$data);
	}	
	
} // End of the controller