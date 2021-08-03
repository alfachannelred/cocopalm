<?
$ip = $REMOTE_ADDR
?>
<html>
<head>
<title>COCOPALM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
<link href="form.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#0033CC" leftmargin="0" topmargin="10" marginwidth="0" marginheight="10" link="#FF6600" vlink="#FF6600" alink="#FFCC00">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" class="regfon">
  <tr align="left" valign="middle"> 
    <td class="zerk"> <font color="#FFFFFF" class="head1">Preview 
      Form</font></td>
  </tr>
  <tr> 
    <td align="center" valign="top"><form name="page1" method="post" action="mail.php" onSubmit="MM_validateForm('UserName','','R','UserEmail','','R');return document.MM_returnValue">
        <table width="98%" border="0" cellpadding="4" align="center" cellspacing="5">
          <tr align="left" valign="top" class="regfon">
            <td colspan="2" class="text">This is a preview of the information that will be sent. If you have used your real e-mail address you will receive a confirmation message. <br>
                <b>Please check and edit your message if required.</b></td>
          </tr>
          <tr bgcolor="#E9E9E9" class="text">
            <td valign="middle" align="right" width="13%" class="framz">Name:</td>
            <td valign="middle" align="left" width="87%" class="framz"><?php echo $UserName ?></td>
          </tr>
          <tr bgcolor="#E9E9E9" class="text">
            <td valign="middle" align="right" width="13%" class="framz">E-mail:</td>
            <td valign="middle" align="left" width="87%" class="framz"><?php echo $UserEmail ?> </td>
          </tr>
          <tr bgcolor="#E9E9E9" class="text">
            <td valign="middle" align="right" width="13%" class="framz">Phone:</td>
            <td valign="middle" align="left" width="87%" class="framz"><?php echo $UserPhone ?></td>
          </tr>
          <tr bgcolor="#E9E9E9" class="text">
            <td valign="middle" align="right" width="13%"><span class="framz">Country:</span></td>
            <td valign="middle" align="left" width="87%" class="framz"><?php echo $UserCountry ?></td>
          </tr>
          <tr bgcolor="#E9E9E9" class="text">
            <td valign="top" align="right" width="13%" class="framz">Message:</td>
            <td valign="middle" align="left" width="87%" class="framz"><?php echo $UserComments ?> </td>
          </tr>
          <tr class="text">
            <td valign="middle" align="left" width="13%">
              <input type="hidden" name="UserName" value="<?php echo $UserName ?>">
              <input type="hidden" name="UserEmail" value="<?php echo $UserEmail ?>">
              <input type="hidden" name="UserPhone" value="<?php echo $UserPhone ?>">
              <input type="hidden" name="UserCountry" value="<?php echo $UserCountry ?>">
              <input type="hidden" name="UserComments" value="<?php echo $UserComments ?>">
            </td>
            <td valign="middle" align="left" width="87%" class="framz">
              <input type="submit" name="Back" value="&lt;Edit" class="text" onClick="MM_goToURL('parent','javascript:history.back(1)');return document.MM_returnValue">
              <input type="submit" name="Submit" value="Submit&gt;" class="text"></td>
          </tr>
        </table>
        <font size="1" color="#999999">        </font>
    </form>
      <p><font size="1" color="#999999"><?php echo $ip ?></font></p>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
