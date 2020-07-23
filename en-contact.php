<?php
if($_REQUEST["submit"]=="submit")
{
$fname=$_POST[fname];
$mail=$_POST[mail];
$phone=$_POST[phone];
$btime=$_POST[btime];
$city=$_POST[city];
$country=$_POST[country];
$purpose=$_POST[purpose];
$howdid=$_POST[howdid];
$subject=$_POST[subject];
$message=$_POST[message];
//email to admin
			$fullMessage = '<html><body>';
			$fullMessage = $fullMessage."<br/><br/>";
			$fullMessage = $fullMessage."$name sent a message using enquiry";
			$fullMessage = $fullMessage."<br/><br/>";
			$fullMessage = $fullMessage."<table align=left border=1>";
$fullMessage = $fullMessage."<tr ><td width=200px>Your Name:</td> <td width=200px>".$fname."</td></tr>";
$fullMessage = $fullMessage."<tr><td>Email Address:</td> <td>".$mail."</td></tr>";
$fullMessage = $fullMessage."<tr><td>Phone no:</td> <td>".$phone."</td></tr>";
$fullMessage = $fullMessage."<tr><td>Best Time to Call:</td> <td>".$btime."</td></tr>";	
$fullMessage = $fullMessage."<tr ><td width=200px>City:</td> <td width=200px>".$city."</td></tr>";
$fullMessage = $fullMessage."<tr ><td width=200px>Country:</td> <td width=200px>".$country."</td></tr>";
$fullMessage = $fullMessage."<tr ><td width=200px>Purpose of visit :</td> <td width=200px>".$purpose."</td></tr>";
$fullMessage = $fullMessage."<tr ><td width=200px>How did you hear about Us :</td> <td width=200px>".$howdid."</td></tr>";
$fullMessage = $fullMessage."<tr ><td width=200px>Subject :</td> <td width=200px>".$subject."</td></tr>";
$fullMessage = $fullMessage."<tr ><td width=200px>Message :</td> <td width=200px>".$message."</td></tr>";			
			$fullMessage = $fullMessage.'</table></body></html>';
			
	$admin="jogo2025@gmail.com";
			$to=$admin;
			$from=$mail;
			$subject="Online enquiry form, from: $user " ;
		$header  = "From: $from <$from>\n" .
				    "MIME-Version: 1.0\n" .
				    "Content-type: text/html; charset=iso-8859-1";
        
		mail($to,$subject,$fullMessage,$header);
		
		$from1=$admin;
			$to1=$mail;
			$subject1="Thanks for contact us " ;
		$fullMessage1 = '<html><body><br> Thank you for contacting us.<br>We will contact you shortly.';
		$fullMessage1 = $fullMessage1.'</body></html>';
		
				$header1  = "From: $from1 <$from1>\n" .
				    "MIME-Version: 1.0\n" .
				    "Content-type: text/html; charset=iso-8859-1";
		
		mail($to1,$subject1,$fullMessage1,$header1);
	
		
			echo '<br/><div style="color:#FF0000;margin-left:40px">';
			echo "Thanks for contacting us! We will revert you shortly...<br>You may call on +00 0000000000, 0000000000, +00 0000000000 [WhatsApp] in case you want to speak to us";
		//	echo $mail."//".$name;
			echo "</div><br/>";





    $name="";
    $address="";
    $city="";
    $phone="";
    $mail="";
    $package="";
    $days="";
    $person="";
    $room="";		
    $comments="";
	}


?>
