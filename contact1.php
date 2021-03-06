<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript" src="stepcarousel.js">

/***********************************************
* Step Carousel Viewer script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* Please keep this notice intact
***********************************************/

</script>


<script type="text/javascript">

stepcarousel.setup({
	galleryid: 'mygallery', //id of carousel DIV
	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'panel', //class of panel DIVs each holding content
	autostep: {enable:false, moveby:1, pause:3000},
	panelbehavior: {speed:500, wraparound:true, wrapbehavior:'slide', persist:true},
	defaultbuttons: {enable: true, moveby: 1, leftnav: ['img/works/Left.png', -5, 80], rightnav: ['img/works/Right.png', -20, 80]},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['inline'] //content setting ['inline'] or ['ajax', 'path_to_external_file']
})

</script>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Cahoot</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="css/animate.min.css" type="text/css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/creative.css" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top">
        <div class="mynav">
            <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--                <div id="socialcontainer">
                                           
                                <a class="w-inline-block social-button" href="https://twitter.com/thecahoot" target="_blank">
                                    <img src="img/icon/Twitter.png" width="15" alt="5339413e23c3307b270003d2_twitter.png">
                                </a>
                                  <a class="w-inline-block social-button" href="https://www.facebook.com/thecahoot" target="_blank">
                                  <img src="img/icon/facebook.png" height="13" alt="5339413e23c3307b270003d2_twitter.png">
                                </a>
                        
                                            </div>-->

                        <a class="navbar-brand page-scroll"> 
                            <div id="logocontainer">
                                
                                                            <a  href="index.html" target="_blank">
                                  <img  class="top-logo" src="img/icon/Logo.png" width="100" alt="533940d9611d657c27000412_logo.png"/>
                                </a>
                               
                                          
                                    </div>
                        </a>
                    </div>


                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">




                        <ul class="nav navbar-nav navbar-right">
                            <li class="socialcontainer">      
                                <a class="w-inline-block social-button" href="https://twitter.com/thecahoot" target="_blank">
                                    <img src="img/icon/Twitter.png" width="15" alt="5339413e23c3307b270003d2_twitter.png">
                                </a>
                            </li>
                            <li class="socialcontainer"> 
                                <a class="w-inline-block social-button" href="https://www.facebook.com/thecahoot" target="_blank">
                                    <img src="img/icon/facebook.png" height="15" alt="5339413e23c3307b270003d2_twitter.png">
                                </a>
                            </li>
                            <li  class="navcolor">
                                <a class="page-scroll navcolor" href="AboutUs.html">About Us</a>
                            </li>
                            <li  class="navcolor">
                                <a class="page-scroll navcolor" href="#services">Blog</a>
                            </li>
<li  class="navcolor">
                                <a class="page-scroll navcolor" href="ContactUs.html">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
        <div class="space"></div>
        
  
<form name="contactform" method="post" action="send_form_email.php">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
 
 </td>
 
</tr>
 
</table>
 
</form>
                    <div class="container text-center footer">
                <div class="menu">
<!--                    <h2>Free Download at App Store!</h2>-->

                    
                    <a href="FAQ.html" class="ending tab">FAQ</a>
                    <a href="TermofService.html" class="ending tab ">Term's of Service</a>
                    <a href="Privacy.html" class="ending tab">Privacy</a>
                  
                    
                </div>
            </div>
        </body>