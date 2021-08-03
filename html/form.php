<?
// Configuration Settings
$SendFrom =    "Submission from the Website<Do_Not_Reply@cocopalm.in>"; //the mail id of the person who is sending mail
$SendTo =      "mail@cocopalm.in"; //to which mail id the mail to be sent
$SubjectLine = "Enquiry From Website "; // subject head
$ThanksURL =   "thankyou.htm";  //the page to be shown afetr sending mail
// common code for all the form without knowing the form fields
foreach ($_POST as $Field=>$Value)
   $MsgBody .= "$Field: $Value\n";
$MsgBody .= "\n" . @gethostbyaddr($_SERVER["REMOTE_ADDR"]) . "\n" .
   $_SERVER["HTTP_USER_AGENT"];
$MsgBody = htmlspecialchars($MsgBody, ENT_NOQUOTES);  //make content safe
// Send E-Mail and Direct Browser to Thank You Page
mail($SendTo, $SubjectLine, $MsgBody, "From: $SendFrom");
header("Location: $ThanksURL");
?>