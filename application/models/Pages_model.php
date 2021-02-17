<?php

class Pages_model extends CI_Model {
	
	#Constructor
	public function __construct()
	{
		parent::__construct();
	}

	function get_votes()
	{
		$get = $this->db->query("SELECT * FROM scoc_departments");

		if($get->num_rows() > 0)
		{
			return $get->result_array();
		}
		else
		{
			return false;
		}
	}

	function get_users()
	{
		$get = $this->db->query("SELECT * FROM scoc_users WHERE isactive='Y'");

		if($get->num_rows() > 0)
		{
			return $get->result_array();
		}
		else
		{
			return false;
		}
	}

	function add_user()
	{
		$date = date('Y-m-d H:i:s');

		$add = $this->db->query("INSERT INTO scoc_users (name, username, password, type, datecreated) VALUES (".$this->db->escape($_POST['name']).", ".$this->db->escape($_POST['username']).", '".md5($_POST['password'])."', ".$this->db->escape($_POST['type']).", '$date')");

		if($add)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function login()
	{
		$login = $this->db->query("SELECT * FROM scoc_users WHERE username=".$this->db->escape($_POST['scocusername'])." AND password='".md5($_POST['scocpassword'])."' AND isactive='Y'");

		if($login->num_rows() > 0)
		{
			return $login->row_array();
		}
		else
		{
			return false;
		}
	}
	
	function get_exp_vote($vote, $period)
	{
	    $period = date('Y-m', strtotime($period));
	    
	    $get = $this->db->query("SELECT COUNT(id) AS NoOfEmps, SUM(REPLACE(amount,',','')) AS totalSum FROM scoc_expectation WHERE vote='$vote' AND payrolldate='$period'");
	    
	    if($get->num_rows() > 0)
	    {
	        return $get->row_array();
	    }
	    else
	    {
	        return false;
	    }
	}
	
	function get_expectation()
	{
	    $month = $_GET['month']; $year = $_GET['year'];
	    $period = $year."-".$month;
	    $get = $this->db->query("SELECT * FROM scoc_expectation WHERE payrolldate='$period'");
	    
	    if($get->num_rows() > 0)
	    {
	        return $get->result_array();
	    }
	    else
	    {
	        return false;
	    }
	}
	
	function get_schedules()
	{
	    $query = $this->db->query("SELECT s.vote, count(s.id) AS NoOfEmps, SUM(s.amount) AS TotalSum, s.payrolldate, s.recon_status, s.status, d.description FROM `scoc_schedules` s LEFT JOIN scoc_departments d ON s.vote=d.code GROUP BY vote, payrolldate, recon_status");
	    
	    if($query->num_rows() > 0)
	    {
	        return $query->result_array();
	    }
	    else
	    {
	        return false;
	    }
	}
	
	function get_popup_reports($vote, $period)
	{
	    $query = $this->db->query("SELECT s.empno, s.vote, s.payrolldate, s.amount, s.recon_status, d.description FROM `scoc_schedules` s LEFT JOIN scoc_departments d ON s.vote=d.code WHERE s.vote='$vote' AND s.payrolldate='$period'");
	    
	    if($query->num_rows() > 0)
	    {
	        return $query->result_array();
	    }
	    else
	    {
	        return false;
	    }
	}
	
	function get_popup_exp_reports($vote, $period)
	{
	    $query = $this->db->query("SELECT s.empno, s.vote, s.payrolldate, s.amount, d.description FROM `scoc_expectation` s LEFT JOIN scoc_departments d ON s.vote=d.code WHERE s.vote='$vote' AND s.payrolldate='$period'");
	    
	    if($query->num_rows() > 0)
	    {
	        return $query->result_array();
	    }
	    else
	    {
	        return false;
	    }
	}
	
	
	function saveexpectation($data){
	    $this->db->insert_batch('scoc_expectation', $data);
		return 1;
	}
	
	function savebreakdown($data){
	$this->db->insert_batch('scoc_breakdown', $data);
		return 1;    
	}
	
	function saveschedules($data){
	$this->db->insert_batch('scoc_schedules', $data);
		return 1;    
	}
	
	
	function do_reconciliation($formdata)
	{
	    $exp = $formdata['exp']; $paydate = $formdata['paydate']; $vote = $formdata['vote'];
	    
	    $getexp = $this->db->query("SELECT * FROM scoc_schedules WHERE vote='$vote' AND payrolldate='$paydate' AND status='1'");
	    
	    if($getexp->num_rows() > 0)
	    {
	        //do recon
	        $expectations = $getexp->result_array();
	        
	       // $bArr = array();
	        
	        foreach($expectations as $expect)
	        {
	            //get breakdown total
	            $paydate2 = date('Y-m', strtotime($paydate));
	            $getTotal = $this->db->query("SELECT scoc_breakdown.* FROM scoc_breakdown WHERE empno='".$expect['empno']."' AND payrolldate='$paydate2' AND status='1'");
	            
	            $totExp = $getTotal->result_array();
	            
	            $breakTot = array_sum(array_column($totExp, 'amount'));
	            
	           // echo "<pre>"; print_r($totExp); echo "</pre>"; exit;
	            
	           // $breakTot = $totExp[0]['totalAmt'];
	            
	            //total equals expected
	           if($breakTot == $expect['amount'])
	           {
	               //update month as processed
	               $updateMon = $this->db->query("UPDATE scoc_schedules SET status='2' WHERE vote='$vote' AND payrolldate='$paydate'");
	               
	               $pDate = date('Y-m-d', strtotime($paydate));
	               foreach($totExp as $totEx)
	               {
    	               //insert payment 
    	               $insert = $this->db->query("INSERT INTO scoc_payments(empno, dedcode, vote, amount, payrolldate) VALUES ('".$totEx['empno']."','".$totEx['dedcode']."', '$vote', '".$totEx['amount']."', '$pDate')");
	               
	                   //updated reconciled
	                   $reconUpd = $this->db->query("UPDATE scoc_schedules SET recon_status='1' WHERE id='".$expect['id']."'");
	               }
	           }
	           else if($breakTot != $expect['amount'])
	           {
	               //update month as processed
	               $updateMon = $this->db->query("UPDATE scoc_schedules SET status='2' WHERE vote='$vote' AND payrolldate='$paydate'");
	               
	               //get ratios etc
	               $pDate = date('Y-m-d', strtotime($paydate));
	               foreach($totExp as $totEx)
	               {
    	               #ratio
    	               $payt = round((($totEx['amount']/$breakTot)*$expect['amount']), 3);
    	               
    	               //insert payment
    	               $insert2 = $this->db->query("INSERT INTO scoc_payments(empno, dedcode, vote, amount, payrolldate) VALUES ('".$totEx['empno']."','".$totEx['dedcode']."', '$vote', '".$payt."', '$pDate')");
    	               
    	               //updated reconciled
	                   $reconUpd = $this->db->query("UPDATE scoc_schedules SET recon_status='1' WHERE id='".$expect['id']."'");
	               }
	           }
	            
	        }
	        
	       
	       return true;
	    }
	    else
	    {
	        return false;
	    }
	}

}

?>