<?php

$EmailFrom = $_REQUEST['email']; 
$EmailTo = "man.alaniz@gmail.com,"."alanism@uabc.edu.mx"; // Your email address here
$Subject = "Formulario Contacto Ci2tijuana.org";
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= "\n";
$Body .= "\n";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
 header("Location: http://ci2tijuana.org/contact.html");
  // echo "Succes";
}
else{
  echo "Error";
}
?>