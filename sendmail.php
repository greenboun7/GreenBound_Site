<?php

// $name = $studentmobile = $fathername = $parentmobile = $dob = $email = $studied = $marks = $institute = $tnau = $gender = "";
// // 'name=' + name + '&studentmobile=' + studentmobile + '&fathername=' + fathername + '&parentmobile=' + parentmobile + '&dob=' + dob + '&email=' + email + '&studied=' + studied + '&marks=' + marks + '&institute=' + institute + '&tnau=' + tnau + '&gender=' + gender;
	

$message=
'
<html>
<body>
    <div style="text-align:center; background:none repeat scroll 0 0 #EDEDED;border:18px solid #D6D6D6;font-family: verdana; min-height: 300px; width: 550px; font-size: 12px; font-size: 12px;line-height: 2; text-align: justify; padding: 14px;">
        <div style="color: #700404; font-family: icon; font-size: 28px; font-weight: bold;text-align: center;">
            <img src="http://cloudinsoft.com/greenbound/assets/img/logo.png"  style="width:220px;height:100px;"/></div>
        <div>
		<h2 style="text-align:center">Enquiry</h2>
            Full Name:	'.$_POST['name'].'<br />
Mobile number:	'.$_POST['email'].'<br />
Father name:	'.$_POST['phone'].'<br />
Parent mobile:	'.$_POST['service'].'<br />
Dob:	'.$_POST['country'].'<br />
Gender:	'.$_POST['message'].'<br />

        </div>
    </div>
</body>
</html>

'; 
   date_default_timezone_set('Etc/UTC');
require_once 'mail/PHPMailerAutoload.php';	  
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP(); 	// Sets up a SMTP connection 
 // $mail->SMTPDebug = 1; 
	$mail->Debugoutput = 'html';
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
 //   $mail->Encoding = '7bit';
    $mail->IsHTML(true);    
    // Authentication  
    $mail->Username   = "cloudindev@gmail.com"; // Your full Gmail address
    $mail->Password   = "Cloudin@#$"; // Your Gmail password
      
    // Compose
    $mail->SetFrom('cloudindev@gmail.com');
    //$mail->AddReplyTo($_POST['email'], $_POST['fullname']);
    $mail->Subject = "Enquiry";      // Subject (which isn't required)  
   $mail->MsgHTML($message);
 //$mail->Body = "hello";
    // Send To  
    $mail->AddAddress($_POST["email"]); // Where to send it - Recipient
	// $mail->AddAddress("contact@pushkaram.in"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!  
	    // echo $htmlbody;
	 unset($mail);
	 if($result){   
		  $return_arr[] = array("id" => "1");
		// Encoding array in JSON format
		echo json_encode($return_arr);
									
		} 
		else {
			$return_arr[] = array("id" => "0");
		// Encoding array in JSON format
		echo json_encode($return_arr);
			 echo json_encode(array('success' => 0));
			echo "Issue found in mail send. Please try again.";
		}	


?>
