<?php include("../includes/page_header.php");?>
<body>
<div class="main">
  <div class="header">
    <div class="block_header">
      <div class="logo"><a href="../index.php"><img src="../images/logo.gif" alt="logo" border="0" height="119" width="219"></a></div>
      <?php include("../includes/page_nav.php");?>
      <div class="clr"></div>
    </div>
  </div>
  <div class="sub_text">
    <div class="sub_text_resize"> <a href="what_we_do.php?page=3" <?php if($page==3){echo "class=\"active\"";}?>><img src="../images/more_information.gif" alt="picture" border="0" height="42" width="156"></a>

    </div>
  </div>
  <div class="search_blog">
    <div class="search_blog_resize">
      <div class="search">
        <form id="form1" name="form1" method="post" action="">
          <label><span>
            <input name="q" class="keywords" id="textfield" maxlength="50" value="Search..." type="text">
            </span>
            <input name="b" src="about_files/search.gif" class="button" type="image">
          </label>
        </form>
      </div>
      <h2>
      Get in touch and lets the pros handle it<br>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="body">
    <div class="body_resize">
      <div class="clr"></div>
      <div class="right">
        <div class="right2">
        Amee Arcade | Ground Floor | Westlands 
PO Box 39833 - 00623, Nairobi, Kenya<br/><br/><br/><br/>
info@rainbowkenya.com<br/>
	 +254 572513201<br/>
	 +254 20 3750424<br/>
	 0711661770
        </div>
        <div class="right2">
          <h2>sample our works</h2>
          <a href="http://www.facebook.com/rainbow.printographics" target="_blank"><img src="../images/twitter.png"/></a><br/>
           <a href="#" target="_blank"><img src="../images/facebook.png"/></a>
        
        </div>
      </div>
      <div class="left">
        <h3>contact us</h3>
        <form name="phpformmailer" action="contact_process.php" align="center" method="post">
          <div align="center">
            <center>
              <table bgcolor="#F2F2F2" width="600" cellspacing="6">
                <tr>
                  <td width="100%"><strong></strong></td>
                </tr>
                <tr align="left" valign="top">
                  <td width="162"><small>Your name:</small></td>
                  <td width="100%"><font face="Arial">
                    <input name="name" class="inputc" size="50">
                    <input type="hidden" name="block_spam_bots" value="1">
                    </font></td>
                </tr>
                <tr align="left" valign="top">
                  <td width="162"><font color="#000080" size="1">*</font><small> Your email
                    address:</small></td>
                  <td width="556"><font face="Arial">
                    <input class="inputc" size="50"
      name="email">
                    </font></td>
                </tr>
                <tr align="left" valign="top">
                  <td width="100%"><font color="#000080" size="1">*</font><small> Confirm email
                    address:</small></td>
                  <td width="100%"><font face="Arial">
                    <input class="inputc" size="50"
      name="email2">
                    </font></td>
                </tr>
                <tr align="left" valign="top">
                  <td width="162"><font color="#000080" size="1">*</font><small> Subject:</small></td>
                  <td width="100%"><font face="Arial">
                    <input class="inputc" size="60" name="thesubject">
                    </font></td>
                </tr>
                <tr align="left" valign="top">
                  <td width="162">&nbsp;
                    <p><font color="#000080" size="1">*</font><small> Your
                      request or query:</small></td>
                  <td width="100%"><textarea style="FONT-SIZE: 10pt" name="themessage" rows="7" cols="60"></textarea>
                    <a href="http://thedemosite.co.uk/phpformmailer/"  title="phpFormMailer - easy to use and setup PHP form mailer"> </a></td>
                </tr>
                <tr>
                  <td width="162"></td>
                  <td width="556"><p>
                      <input type="button" class="button"
      value="Send" name="B1" ONCLICK="javascript:validateForm()">
                      <small> <small>You must fill in
                      the fields marked with a *</p></td>
                </tr>
              </table>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>

            </center>
          </div>
        </form>
        <script language="JavaScript"><!--
function validateForm() 
{
 var okSoFar=true
 with (document.phpformmailer)
 {
  var foundAt = email.value.indexOf("@",0)
  if (foundAt < 1 && okSoFar)
  {
    okSoFar = false
    alert ("Please enter a valid email address.")
    email.focus()
  }
  var e1 = email.value
  var e2 = email2.value
  if (!(e1==e2) && okSoFar)
  {
    okSoFar = false
    alert ("Email addresses you entered do not match.  Please re-enter.")
    email.focus()
  }
  if (thesubject.value=="" && okSoFar)
  {
    okSoFar=false
    alert("Please enter the subject.")
    thesubject.focus()
  }
  if (themessage.value=="" && okSoFar)
  {
    okSoFar=false
    alert("Please enter the details for your enquiry.")
    themessage.focus()
  }
  if (okSoFar==true)  
  {
   block_spam_bots.value=4*3;//spam bots currently can not read JavaScript, if could then they'd fail the maths!
   submit();                  // do check for updatea often at:  www.TheDemoSite.co.uk 
  } 
 }
}
// --></script> 
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <?php include("../includes/footer.php");?>