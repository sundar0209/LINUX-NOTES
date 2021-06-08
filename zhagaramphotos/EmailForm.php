<?php
			$name  = $_POST['name'];
			$email     = $_POST['email'];
			$phone     = $_POST['phone'];
			$topic     = $_POST['message'];
			
			$to = "photos@zhagaram.in";

			$fromemail = $email;	 
			$subject = 'Zhagaram Photos| Enquiry Form';
			$curdate = date('d-m-Y');


			$message = '<div style="width:548px;margin:0px auto;background-color:#FFFFFF;border:0px solid #000;" class="container">
		<div style="width:500px;margin:24px 24px;overflow:auto;background-color:#f1f1f1;border-radius:5px;-moz-border-radius:5px;-ms-border-radius:5px;-o-border-radius:5px;-webkit-border-radius:5px;" class="wrapper">
		<div style="float:left;margin:20px 0px 10px 20px;" class=""><img src="https://reachmeout.me/zhagaramphotos/images/zhagaramsphotos.png" height="70" alt="" /></div>
		<div style="float:right;margin:50px 20px 0px 0px;" class=""><span style="font-family:Arial, Helvetica, sans-serif;font-size:13px;color:#484848;font-weight:bold;" class="emailtemp_datetxt">Date:</span>         <span style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#484848;font-weight:bold;margin-left:5px;" class="emailtemp_date">'.$curdate.'</span></div>
		
		
		<div style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#282828;font-weight:normal;margin-left:5px;clear:both;margin:0px 0px 28px 20px;" class="emailtemp_respect_descri">You have received a contact request from the following person:</div>
		
		<div style="width:460px;overflow:auto;border-top:1px solid #878787;border-left:1px solid #878787;border-right:1px solid #878787;margin-left:20px;" class="emailtemp_field"><span style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;font-weight: bold;color: #5c5c5c;padding: 13px 11px;width: 90px;float:left;" class="emailtemp_field1">Name</span>
		
		<span style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;font-weight: normal;color: #6a6a6a;padding: 13px 11px;border-left:1px solid #878787;width: 320px;line-height:20px;text-align:justify;float:left;" class="emailtemp_value1">'.$name.'</span></div>
		
		<div style="width:460px;overflow:auto;border-top:1px solid #878787;border-left:1px solid #878787;border-right:1px solid #878787;margin-left:20px;" class="emailtemp_field"><span style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;font-weight: bold;color: #5c5c5c;padding: 13px 11px;width: 90px;float:left;" class="emailtemp_field1">Email</span>         
		
		<span style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;font-weight: normal;color: #6a6a6a;padding: 13px 11px;border-left:1px solid #878787;width: 320px;line-height:20px;text-align:justify;float:left;" class="emailtemp_value1">'.$email.'</span></div>
        
        
        <div style="width:460px;overflow:auto;border-top:1px solid #878787;border-left:1px solid #878787;border-right:1px solid #878787;margin-left:20px;" class="emailtemp_field"><span style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;font-weight: bold;color: #5c5c5c;padding: 13px 11px;width: 90px;float:left;" class="emailtemp_field1">Phone</span>         
		
		<span style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;font-weight: normal;color: #6a6a6a;padding: 13px 11px;border-left:1px solid #878787;width: 320px;line-height:20px;text-align:justify;float:left;" class="emailtemp_value1">'.$phone.'</span></div>
		
		<div style="width:460px;overflow:auto;border:1px solid #878787;margin-left:20px;" class="emailtemp_field"><span style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;font-weight: bold;color: #5c5c5c;padding: 15px 11px;width: 90px;float:left;min-height:20px;" class="emailtemp_field1">Message</span>         
		
		<span style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;font-weight: normal;color: #6a6a6a;padding: 15px 11px;border-left:1px solid #878787;width: 325px;line-height:15px;text-align:justify;float:left;min-height:20px;" class
		="emailtemp_value1">'.$topic.'</span></div>
		
		
		<div style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#3d3d3d;font-weight:normal;line-height:20px;clear:both;margin:25px 0px 42px 20px;" class="emailtemp_respect_descri1">Thank You,<br />
		Zhagaram Photos</div>
		<div style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#3d3d3d;font-weight:normal;clear:both;margin:0px 0px 48px 0px;text-align:center;" class="emailtemp_respect_copyright">&copy; 2021 Zhagaram Photos All rights reserved </div>
		</div>
		</div>';
	
	
	
	
		$headers = "From:". $fromemail."\r\n" .
	'X-Mailer: PHP/' . phpversion() . "\r\n" .
	"MIME-Version: 1.0\r\n" .
	"Content-Type: text/html; charset=utf-8\r\n" .
	"Content-Transfer-Encoding: 8bit\r\n\r\n";
	if(mail($to, $subject, $message, $headers))
	{ echo 1; }
	else { echo 0; }
	//$succ_msg =  "<br/><br/>Thank you, your email has been saved into our database.";
	//echo '<div class="succ_message">Form has been submitted successfully</div>';
	