<?php

$EmailFrom = $_REQUEST['email'];
$EmailTo = "man.alaniz@gmail.com"; // Your email address here XD
$Subject = "Contact form";
$Name = Trim(stripslashes($_POST['name']));
$Email = Trim(stripslashes($_POST['email']));
$Message = Trim(stripslashes($_POST['message']));

// validation
// $validationOK=true;
// if (!$validationOK) {
//   echo "Error";
//   exit;
// }

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= "\n";
$Body .= "\n";
$Body .= $Message;
$Body .= "\n";
// send email


// redirect to success page
if ($success){


 header("Location: http://byronwd.com/contact.html");
  // echo "Succes";
}
else{

  echo "Error";
}
?>
