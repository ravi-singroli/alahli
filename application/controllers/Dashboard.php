
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller 
{
    public function __construct()
	{
        parent::__construct();
		$this->load->model("common_model");
		date_default_timezone_set(CV_TIME_ZONE_NAME);
    }	
	/*public function index() 
	{ 
	}*/
	
	public function my_account() 
	{
		$data['title'] = "My Account";
		$data['body'] = "front/my_account";
		$this->load->view('front/layouts/main',$data);
	}	
	
	public function payment_details() 
	{
		$data['title'] = "Payment Details";
		$data['body'] = "front/payment_details";
		$this->load->view('front/layouts/main',$data);
	}
	
	public function test_details() 
	{
		$data['title'] = "Test Details";
		$data['body'] = "front/test_details";
		$this->load->view('front/layouts/main',$data);
	}	
	
	
} // End of the controller