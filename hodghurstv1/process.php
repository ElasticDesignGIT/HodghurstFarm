<?php
include("global.inc.php");
$errors=0;
$error="The following errors occured while processing your form input.<ul>";
pt_register('POST','Name');
pt_register('POST','Email');
pt_register('POST','Telephone');
pt_register('POST','Interestofenquiry');
pt_register('POST','Otherinformation');
$Otherinformation=preg_replace("/(\015\012)|(\015)|(\012)/","&nbsp;<br />", $Otherinformation);if($Name=="" || $Email=="" || $Telephone=="" || $Interestofenquiry=="" ){
$errors=1;
$error.="<li>You did not enter one or more of the required fields. Please go back and try again.";
}
if(!eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$",$Email)){
$error.="<li>Invalid email address entered";
$errors=1;
}
if($errors==1) echo $error;
else{
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="Name: ".$Name."
Email: ".$Email."
Telephone: ".$Telephone."
Interest of enquiry: ".$Interestofenquiry."
Other information: ".$Otherinformation."
";
$message = stripslashes($message);
mail("info@celebrationsinfocus.com","Celebrations In Focus - New Client Message",$message,"From: phpFormGenerator");

header("Refresh: 0;url=http://www.celebrationsinfocus.com/contact/");
?><?php 
}
?>