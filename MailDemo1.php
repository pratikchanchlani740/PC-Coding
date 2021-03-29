<?php
 if(isset($_GET['email']))
 {
	 $email=$_GET['email'];
	 echo $email;
	
 }
 
      
      require 'Database.php';
      $query="select * from inform";
      $query_run=mysqli_query($connection,$query);
      $check_servi1=mysqli_num_rows($query_run) > 0;
      
     $search_result=$query_run;
    //   $search_result=null;
     // print_r($search_result); 
    //   echo "Search" . $search_result . "Result";
     
      if($check_servi1)
      {
            while($row = mysqli_fetch_array($search_result))
            {
               //echo $row['email'];

$to_email = "$email";
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From: pratikchanchlani740@gmail.com";
			}
	  }
	  
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>