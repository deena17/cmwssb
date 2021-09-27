<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="https://new-connection.chennaimetrowater.in/images/favicon.ico" type="image/x-icon">
		<title>CMWSSB</title>

		<link href="static/bootstrap.css" rel="stylesheet">
		<link href="static/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link href="static/sticky-footer-navbar.css" rel="stylesheet">
	<style>
		.main-login {
			background-color: #f8f8f8;
			/* shadows and rounded borders */
			-moz-border-radius: 2px;
			-webkit-border-radius: 2px;
			border-radius: 2px;
			-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		}

		.main-center {
			margin-top: 5px;
			margin: 0 auto;
			max-width: 500px;
			padding: 20px 20px;
		}

		.modal {
			text-align: center;
			padding: 0 !important;
		}

		.modal:before {
			content: '';
			display: inline-block;
			height: 100%;
			vertical-align: middle;
			margin-right: -4px;
		}

		.modal-dialog {
			display: inline-block;
			text-align: left;
			vertical-align: middle;
		}
		.modal-header {
			padding: 9px 15px;
			border-bottom: 1px solid #eee;
			background-color: #31708f;
			-webkit-border-top-left-radius: 5px;
			-webkit-border-top-right-radius: 5px;
			-moz-border-radius-topleft: 5px;
			-moz-border-radius-topright: 5px;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
		}
		.modal-body {
			padding: 0px;
		}

		a.tooltipnm {
			outline: none;
		}
		a.tooltipnm strong {
			line-height: 3px;
		}
		a.tooltipnm:hover {
			text-decoration: none;
		}
		a.tooltipnm span {
			z-index: 10;
			display: none;
			padding: 14px 20px;
			margin-top: -270px;
			margin-left: -15px;
			width: 30px;
			line-height: 16px;
			border: 0px;
		}
		a.tooltipnm:hover span {
			display: inline;
			position: absolute;
			border: 0px;
		}
		.tooltipt {
			position: relative;
			display: inline-block;
			border-bottom: 0px dotted black;
		}

		.tooltipt .tooltiptext {
			visibility: hidden;
			width: 218px;
			background-color: #337ab7;
			color: #fff;
			text-align: center;
			border-radius: 6px;
			padding: 5px 0;
			font-size : 12px;
			/* Position the tooltip */
			position: absolute;
			z-index: 1;
			bottom: 100%;
			left: 50%;
			margin-left: -60px;
		}

		.tooltipt:hover .tooltiptext {
			visibility: visible;
		}

	</style></head>
	
	<body>
	<div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                    <ul class="list-unstyled">
                   		<li>
							<a title="Facebook" href="https://www.facebook.com/CMWSSB/" target="_blank" class="btn btn-default">
								<span class="social-icon"><i class="fab fa-facebook-f"></i></span>
							</a>
							<a title="Twitter" href="https://twitter.com/CHN_Metro_Water?s=09" target="_blank" class="btn btn-default">
								<span class="social-icon"><i class="fab fa-twitter"></i></span>
							</a>
							<a title="Instagram" href="https://instagram.com/chennaimetrowater?utm_medium=copy_link" target="_blank" class="btn btn-default">
								<span class="social-icon"><i class="fab fa-instagram"></i></span>
							</a>
						</li>
             		</ul>
					
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top:7px">
                <div id="date" class="mt-1 text-dark" style="font-weight:bold;float:left"></div>
				<span style="margin-left:20px"><strong><a href="screen_reader.php">Screen Reader Access</a></strong></span> 
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-5 col-md-5 text-center text-md-right">
                    <div class="resize-icons" style="">
                        <button type="button" class="btn btn-default border-right rounded-0" id="decreaseFont">
                            <i class="fa fa-font"></i>-
                        </button>
                        <button type="button" class="btn btn-default border-right rounded-0" id="defaultFont">
                            <i class="fa fa-font"></i>
                        </button>
                        <button type="button" class="btn btn-default border-right rounded-0" id="increaseFont">
                            <i class="fa fa-font"></i>+
                        </button>
                        <button type="button" class="btn btn-default border-right rounded-0" id="normalMode">
                            <i class="fa fa-adjust"></i>
                        </button>
                        <button type="button" class="btn btn-default border-right rounded-0" id="highContrast">
                            <i class="fa fa-adjust" style="color:#ffb600"></i>
                        </button>
                    </div>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
		<nav class="navbar navbar-default" style="background-color:#337ab7;">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#"><img src="static/logo.png"></a>
				</div>
				<div class="topsearch" style="width:300px;margin-left:50px;float:left">
					<form class="form-inline">
						<gcse:search></gcse:search>
					</form>
				</div>
				<div class="collapse navbar-collapse" style="margin:0px 0px 0px -52px!important" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav" style="font-size: 22px; color: #fff;">
						Online Application for
						<br>
						New Water/Sewer Connection
					</ul>
				</div>
			</div>
		</nav>

		<div class="nav" id="main-navigation">
			<input type="checkbox" id="nav-check">
			<div class="nav-header">
				<div class="nav-title">
				
				</div>
			</div>
			<div class="nav-btn">
				<label for="nav-check">
				<span></span>
				<span></span>
				<span></span>
				</label>
			</div>
			<div class="nav-links">
				<a href="index.php">Home</a>
				<a href="about_us.php">About Us</a>
				<a href="who_is_who.php">Who's Who</a>
				<a href="citizen_charter.php">Citizen's Charter</a>
				<a href="help.php">Help</a>
				<a href="faq.php">FAQ</a>
				<a href="contact_us.php">Contact Us</a>
				<a href="useful_links.php">Useful Links</a>
				<a href="downloads.php">Downloads</a>
				<a href="sitemap.php">Sitemap</a>
			</div>
	    </div>