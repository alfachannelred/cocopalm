<?
//////////////////////////////////////////////////////////////////////////////////
// PhPreview Form by Thomas i.T. © copyright 2003
//Please leave the copyright info in tact!
//Designed by Paul Thomas

/////////////////////////////////////////////////////////////////////////////////
// - set variables!
$SiteName = "http://www.cocopalm.in";
$SiteEmail = "mail@cocopalm.in";
$ThankYouMessage = "Thank you for your message";
$SiteUserName = "George Varghese- COCOPALM";
// -  Done!
//See php mail process at the bottom of this page
//You will need to set this up the way you like.
/////////////////////////////////////////////////////////////////////////////////
$ip = $REMOTE_ADDR
?>

<html>
<head>
<title><?php echo $UserName ?> Here is your confirmation</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
-->
</style>
<link href="form.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#0033CC" leftmargin="0" topmargin="10" marginwidth="0" marginheight="10" link="#FF6600" vlink="#FF6600" alink="#FFCC00">
<table width="100%" border="0" cellspacing="4" cellpadding="0">
  <tr>
    <td valign="middle" align="center" height="197" class="framz">
      <p class="head1">Thank you for sending us your message.</p>
      <p class="head1">An e-mail has been sent to:<br>
        <?php echo $UserName ?> </p>
      <p class="head1">Using your e-mail address: <?php echo $UserEmail ?> </p>      
      <span class="head1">
      <!-- change this URL to the page you want your visitors to go back to -->
      </span>
    <p> <span class="head1"><a href="javascript:window.close();">Close window</a> </span></p></td>
  </tr>
  <tr> </tr>
</table>
<p>
  <!--THIS IS WHERE YOU EDIT THE VISITOR REPLY MESSAGE-->
  <?
$UserMessage .= "Dear $UserTitle $UserName,\n";
$UserMessage .= "You have received this because you submitted reply form from $SiteName \n";
$UserMessage .= "Here's the e-mail address that you used - $UserEmail.\n\n";
$UserMessage .= "Best regards,\n $SiteUserName\n Web: $SiteName \n E-mail: $SiteEmail\n\n";
$UserMessage .= "\n";
$UserMessage.= "\n\n";
$UserMessage.= "\n\n";
mail("$UserEmail", "$ThankYouMessage", $UserMessage, "From: $SiteEmail");

//THIS IS WHERE YOU EDIT THE ADMIN MESSAGE

$AdminMessage = "$UserName, Submitted the following Information:\n\n";
$AdminMessage .= "Full Name: $UserName\n";
$AdminMessage .= "E-mail: $UserEmail\n";
$AdminMessage .= "Phone: $UserPhone\n";
$AdminMessage .= "Country: $UserCountry\n";
//$AdminMessage .= "Referred By: $UserRefer\n";
$AdminMessage .= "Comments: $UserComments\n";
$AdminMessage .= "\n";
$AdminMessage .= "$HTTP_USER_AGENT - $ip\n";
mail("$SiteEmail", "$SiteName - Contact Submission", $AdminMessage, "From: $UserEmail");
?>
</p>
</body>
</html>
