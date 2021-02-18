<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Pages extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->model('Pages_model', 'pages');
     
    }

	public function index()
	{
		$data['dash'] = $this->pages->get_dash_figures();

		$data['active_link'] = "home";

		$this->load->view('incl/header');
		$this->load->view('incl/sidebar', $data);
		$this->load->view('incl/home', $data);
		$this->load->view('incl/footer');
	}

	function upload_exp()
	{
		$data['page_title'] = "Upload Expectation";
		$data['section'] = "Expectations";
		$data['active_link'] = "upload_exp";
  write_file('./myfile.txt', "Preparing to Uploading....");

		$this->load->view('incl/header');
		$this->load->view('incl/sidebar', $data);
		$this->load->view('pages/upload_exp', $data);
		$this->load->view('incl/footer');
	}
	
		function saveupload_exp()
	{
	    
  write_file('./myfile.txt', "Uploading....");


		$data['page_title'] = "Upload Expectation";
		$data['section'] = "Expectations";
		$data['active_link'] = "upload_exp";
	
	
			$file = $_FILES['file']['tmp_name'];
			$handle = fopen($file, "r");
$fp = file($file);

$tottal = count($fp);

			$c = 0;//
			while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
				if($c<>0){					//SKIP THE FIRST ROW


					$dat[] = array(
				     'empno' => $filesop[0],
				     'vote'   => $filesop[1],
				     'amount'   => $filesop[2],
				     'payrolldate'   => $this->input->post('year').'-'.$this->input->post('month'),
				     'status'   => 1,
				     'uploadedby'   => $_SESSION['scoc_user']['id']
				   );


					//echo $fname."<br>";

				}
				$c = $c + 1;
$perc = ($c/$tottal)*100;

  write_file('./myfile.txt', "Uploading ".$c." of ".$tottal);
    
			}
	
	//var_dump($data);
					$this->pages->saveexpectation($dat);

 $output = array(
   'success'  => true,
   'total_line' => ($tottal - 1)
  );
  
   echo json_encode($output);

       // redirect('/pages/view_exp');
	}
	

	function upload_bdown()
	{
		$data['page_title'] = "Upload Breakdown";
		$data['section'] = "Expectations";
		$data['active_link'] = "upload_bdown";
  write_file('./myfile2.txt', "Preparing to Upload....");

		$this->load->view('incl/header');
		$this->load->view('incl/sidebar', $data);
		$this->load->view('pages/upload_bdown', $data);
		$this->load->view('incl/footer');
	}


	
		function saveupload_breakdown()
	{
	    
  write_file('./myfile2.txt', "Uploading....");


		$data['page_title'] = "Upload Breakdown";
		$data['section'] = "Expectations";
		$data['active_link'] = "upload_bdown";
	
			$file = $_FILES['file']['tmp_name'];
			$handle = fopen($file, "r");
$fp = file($file);

$tottal = count($fp);

			$c = 0;//
			while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
				if($c<>0){					//SKIP THE FIRST ROW


					$dat[] = array(
				     'empno' => $filesop[0],
				     'vote'   => $filesop[1],
				     'dedcode'   => $filesop[2],
				     'amount'   => $filesop[3],
				     'payrolldate'   => $this->input->post('year').'-'.$this->input->post('month'),
				     'status'   => 1,
				     'uploadedby'   => $_SESSION['scoc_user']['id']
				   );


					//echo $fname."<br>";

				}
				$c = $c + 1;
$perc = ($c/$tottal)*100;

  write_file('./myfile2.txt', "Uploading ".$c." of ".$tottal);
    
			}
	
	$this->pages->savebreakdown($dat);

 $output = array(
   'success'  => true,
   'total_line' => ($tottal - 1)
  );
  
   echo json_encode($output);

	}
	




	function view_exp()
	{
	    if(isset($_GET['viewexp']))
	    {
	        $data['period'] = $_GET['year']."-".$_GET['month'];
	        $data['period'] = date('Y-m', strtotime($data['period']));
	        
	        $data['votes'] = $this->pages->get_votes();
	        $data['results'] = true;
	       
	    }
	    else
	    {
	        $data['results'] = false;
	    }
	    
		$data['page_title'] = "View Expectation Files";
		$data['section'] = "Expectations";
		$data['active_link'] = "view_exp";

		$this->load->view('incl/header');
		$this->load->view('incl/sidebar', $data);
		$this->load->view('pages/view_exp', $data);
		$this->load->view('incl/footer');
	}

	function upload_vote_schedules()
	{
		$data['votes'] = $this->pages->get_votes();

		$data['page_title'] = "Upload Vote Schedules";
		$data['section'] = "Payment Schedules";
		$data['active_link'] = "upload_vs";

		$this->load->view('incl/header');
		$this->load->view('incl/sidebar', $data);
		$this->load->view('pages/upload_vote_schedules', $data);
		$this->load->view('incl/footer');
	}
	
	
	
	function saveupload_schedules(){
	   write_file('./myfile3.txt', "Uploading....");


		$data['page_title'] = "Upload Vote Schedules";
		$data['section'] = "Payment Schedules";
		$data['active_link'] = "upload_vs";
	
			$file = $_FILES['file']['tmp_name'];
			$handle = fopen($file, "r");
$fp = file($file);

$tottal = count($fp);

			$c = 0;//
			while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
				if($c<>0){					//SKIP THE FIRST ROW


					$dat[] = array(
				     'empno' => $filesop[0],
				     'vote'   => $filesop[1],
				     'amount'   => $filesop[2],
				     'payrolldate'   => $this->input->post('year').'-'.$this->input->post('month'),
				     'status'   => 1,
				     'uploadedby'   => $_SESSION['scoc_user']['id']
				   );


					//echo $fname."<br>";

				}
				$c = $c + 1;
$perc = ($c/$tottal)*100;

  write_file('./myfile3.txt', "Uploading ".$c." of ".$tottal);
    
			}
	
	$this->pages->saveschedules($dat);

 $output = array(
   'success'  => true,
   'total_line' => ($tottal - 1)
  );
  
   echo json_encode($output);
 
	    
	}

	function view_vote_schedules()
	{
	    $data['schedules'] = $this->pages->get_schedules();
	    
// 		$data['votes'] = $this->pages->get_votes();

		$data['page_title'] = "View Vote Schedules";
		$data['section'] = "Payment Schedules";
		$data['active_link'] = "view_vs";

		$this->load->view('incl/header');
		$this->load->view('incl/sidebar', $data);
		$this->load->view('pages/view_vote_schedules', $data);
		$this->load->view('incl/footer');
	}
	
	function popup_schedules()
	{
	    $vote = $_GET['vote'];
	    $period = $_GET['period'];
	    
	    $data['results'] = $this->pages->get_popup_reports($vote, $period);
	    
	    $this->load->view('incl/popup', $data);
	}
	
	function popup_expectation()
	{
	    $vote = $_GET['vote'];
	    $period = $_GET['period'];
	    
	    $data['results'] = $this->pages->get_popup_exp_reports($vote, $period);
	    
	    $this->load->view('incl/popup_exp', $data);
	}

	function popup_recon()
	{
		$vote = $_GET['vote'];
	    $period = $_GET['period'];
	    
	    $data['results'] = $this->pages->get_popup_recon_reports($vote, $period);
	    
	    $this->load->view('incl/popup_recon', $data);
	}

	function login()
	{
		if(isset($_POST['login']))
		{
			$login = $this->pages->login();

			if($login)
			{
				$this->session->set_userdata('scoc_user', $login);
				$this->session->set_userdata('scocUserLoggedIn', 'Y');

				redirect(base_url()."pages");
			}
		}

		$this->load->view('pages/login');
	}

	function logout()
	{
		$this->session->unset_userdata('scocUserLoggedIn');
        $this->session->unset_userdata('scoc_user');
        $this->session->sess_destroy();
        redirect(base_url()."pages/login");
	}

	function manage_users()
	{

		$data['users'] = $this->pages->get_users();

		$data['page_title'] = "Manage Users";
		$data['section'] = "Management";
		$data['active_link'] = "users";

		$this->load->view('incl/header');
		$this->load->view('incl/sidebar', $data);
		$this->load->view('pages/manage_users', $data);
		$this->load->view('incl/footer');
	}

	function add_user()
	{
		if(isset($_POST['adduser']))
		{
			$add = $this->pages->add_user();

			if($add)
			{
				redirect(base_url()."pages/manage_users");
			}
		}

		$data['users'] = $this->pages->get_users();

		$data['page_title'] = "Add User";
		$data['section'] = "Management";
		$data['active_link'] = "add_user";

		$this->load->view('incl/header');
		$this->load->view('incl/sidebar', $data);
		$this->load->view('pages/add_user', $data);
		$this->load->view('incl/footer');
	}

	function profile()
	{
		if(isset($_POST['updateuser']))
		{
			$update = $this->pages->update_user();

			if($update)
			{
				$this->session->set_flashdata('succ_msg', "User details updated successfully");
			}
			else
			{
				$this->session->set_flashdata('err_msg', "User details NOT updated successfully");				
			}
		}

		$uid = $this->session->userdata('scoc_user')['id'];

		$data['uid'] = $uid;

		$data['user'] = $this->pages->get_user_details($uid);

		$data['page_title'] = "User Account";
		$data['section'] = "Management";
		$data['active_link'] = "profile";

		$this->load->view('incl/header');
		$this->load->view('incl/sidebar', $data);
		$this->load->view('pages/profile', $data);
		$this->load->view('incl/footer');
	}

	function view_reconciled()
	{
	    $data['schedules'] = $this->pages->get_reconciled();
	    
// 		$data['votes'] = $this->pages->get_votes();

		$data['page_title'] = "View Reconciled Schedules";
		$data['section'] = "Payment Schedules";
		$data['active_link'] = "view_rs";

		$this->load->view('incl/header');
		$this->load->view('incl/sidebar', $data);
		$this->load->view('pages/view_reconciled', $data);
		$this->load->view('incl/footer');
	}
	
	
	function reconcile()
	{
	    $formdata = $this->input->post();
	   
	   //$formdata = array(
	   //                 'exp' => '2000',
	   //                 'paydate' => '2021-02',
	   //                 'vote' => '122'
	   //             );
	    
	    $reconcile = $this->pages->do_reconciliation($formdata);
	    
	    if($reconcile)
	    {
	        $responseArr = array(
	                            'result' => true,
	                            'response' => $formdata
	                        );
	    }
	    else
	    {
	        $responseArr = array(
	                            'result' => false,
	                            'response' => $formdata
	                        );
	    }
	    
	    echo json_encode($responseArr);
	}
	
	function seedate()
	{
	    $date = '2012-2';
	    $newdate = date('Y-m-d', strtotime($date));
	    
	    echo $newdate;
	}

}

?>