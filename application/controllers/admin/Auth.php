<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller 

{

    public function __construct()

	{

        parent::__construct();

		$this->load->model("common_model");

		date_default_timezone_set(CV_TIME_ZONE_NAME);

    }	

	

	public function index() 

	{ 

		//help_is_user_logged_in();

		

		$data['msg']='';		

		if ($_POST)

		{ 

			$this->form_validation->set_rules('username', 'user name', 'trim|required');

			$this->form_validation->set_rules('passwd', 'password', 'trim|required');

			if ($this->form_validation->run()) 

			{				

				$uname = $this->input->post('username');

				$pass=md5($this->input->post("passwd"));

				$result=$this->common_model->is_valid_admin_user($uname,$pass);

				if($result)

				{

					$detail = array(

						CV_SES_USERID=>$result['id'],

						CV_SES_USER_FIRST_NAME => $result['first_name'],

						CV_SES_USER_LAST_NAME => $result['last_name'],

						CV_SES_EMAILID => $result['email_id'],

						CV_SES_ROLEID => $result['role'],

						CV_SES_REGISTERED_ON => date('d M Y', strtotime($result['created_on']))

						);

					$this->session->set_userdata($detail);										

					help_is_user_logged_in();

				}

				else

				{

					$data["msg"]="User name or password not valid.";

				}			

			}

		}



		$data['title'] = "Login";

		$this->load->view(CV_ADMIN_FOLDER_NAME.'/login',$data);

	}

		

	public function logout()

	{		

		$this->session->sess_destroy();

        setcookie(session_name(), "", time() - 3600);

		

		//$this->session->set_flashdata('message', '<div align="left" style="color:red;" id="notify"><span><b>Logged out successfully.</b></span></div>');					

		redirect(site_url(CV_ADMIN_FOLDER_NAME));

	}

	

	public function change_password()

	{

		help_is_valid_user($this->session->userdata(CV_SES_ROLEID));

				

		$data['msg']='';			

		if($_POST)

		{

			$this->form_validation->set_rules('old_password','old password','trim|required');

			$this->form_validation->set_rules('new_password', 'new password', 'trim|required|min_length[5]|matches[confirm_password]');

			$this->form_validation->set_rules('confirm_password', 'confirm password', 'trim|required|min_length[5]');

			if ($this->form_validation->run()) 

			{

				$old_pass=md5($this->input->post("old_password"));

				$new_pass=md5($this->input->post("new_password"));

				$temp = $this->common_model->update_data("admin", array("status"=>1, "id" => $this->session->userdata(CV_SES_USERID), "password" => $old_pass), array("password" => $new_pass));

                 

				if($temp)

				{

					$this->session->set_flashdata('message', '<div align="left" style="color:green;" id="notify"><span><b>Password updated successfully.</b></span></div>');

				}

				else

				{

					$this->session->set_flashdata('message', '<div align="left" style="color:red;" id="notify"><span><b>Incorrect old password.</b></span></div>');					

				}

				redirect(CV_ADMIN_FOLDER_NAME."/change-password");

			}			

		}

		

		$data['title'] = "Change Password";

		$data['body'] = CV_ADMIN_FOLDER_NAME."/change_password";

		$this->load->view(CV_ADMIN_FOLDER_NAME.'/layouts/main',$data);

	}

	

	public function forgot_password_NIU()

	{

		$data['msg']='';

		if($_POST)

		{

			$this->form_validation->set_rules('username', 'Email', 'trim|required|min_length[5]|max_length[50]|valid_email');



			if ($this->form_validation->run())

			{

				$user_dtls = $this->common_model->get_table_row("admin", "*", array("status"=>CV_STATUS_ACTIVE, "username" => $this->input->post("username")));

				

				if($user_dtls)

				{

					$this->load->helper('string');

					$new_pass = random_string('alnum', 6);

					$this->common_model->update_data("admin", array("id" => $user_dtls["id"]), array("password" =>  md5($new_pass)));

					

					$mail_body = "Dear ".strtoupper($user_dtls["first_name"]).",

								<br /><br />

								Your Username :".$user_dtls["username"]."<br />

								<br /><br />

								New Password :".$new_pass."<br />

								<br /><br />";



					$mail_sub = "New Password.";

					

					$this->common_model->send_emails(CV_EMAIL_FROM, $user_dtls["username"], $mail_sub, $mail_body);						

					$this->session->set_flashdata('message', '<div align="left" style="color:green;" id="notify"><span><b>Please check your mail box for getting login details.</b></span></div>');

					redirect("admin");				

				}

				else

				{

					$data['msg']='Email id is not valid.';

				}

			}

		}

		$data['title'] = "Forgot Password";

		$data['body'] = "admin/forgot_password";

		$this->load->view('admin/common/structure',$data);

	}

		

} // End of the controller