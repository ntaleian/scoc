<?php

//import.php

header('Content-type: text/html; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");

set_time_limit(0);

ob_implicit_flush(1);

session_start();

if(isset($_SESSION['csv_file_name']))
{
$connect = new PDO("mysql:host=localhost; dbname=certsoft_emergency", "certsoft_admin", "ADmin4321");

 $file_data = fopen('file/' . $_SESSION['csv_file_name'], 'r');

 fgetcsv($file_data);

 while($row = fgetcsv($file_data))
 {
  $data = array(
    'empno' => $row[0],
    'vote'   => $row[1],
    'amount'   => $row[2],
    'payrolldate'   => $_POST['year'].'-'.$_POST['month'],
    'status'   => 1,
    'uploadedby'   => $_SESSION['scoc_user']['id']
				     
  );

  $query = "
  INSERT INTO scoc_expectation (empno, vote, amount, payrolldate, status, uploadedby) 
     VALUES ('".$row[0]."','".$row[1]."','".$row[2]."','".$_POST['year'].'-'.$_POST['month']."','1', '".$_SESSION['scoc_user']['id']."')
  ";

  $statement = $connect->prepare($query);

  $statement->execute($data);

  sleep(1);

  if(ob_get_level() > 0)
  {
   ob_end_flush();
  }
 }

 unset($_SESSION['csv_file_name']);
}

?>