<?php
	session_start();
	unset($_SESSION['account']);
	unset($_SESSION['memberID']);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="../../assets/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="../../assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../assets/css/animate.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../assets/css/style1.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <?php require_once("../template/nav2.php"); ?>
    <div class="container-fluid" id="member_banner">
        <div class="row">
          <img src="../../assets/images/cal/product-img_03.jpg" alt="">
        </div>
    </div>
    <div id="mebmer_title">
      <h3>會員專區<h3>
    </div>
    <div class="container" id="Membertable">
      <div class="row">
          <div class="row" id="MemberForm">
						<h2>登出</h2>
						<p>
							您已成功登出!
						</p>
          </div>
        </div>
      </div>
    </div>

    <div id="footer" class="container-fluid">
      <div class="row">
      <div class="col-sm-2"></div>
           <div class="col-sm-6">
              <h1>TRAVELFUNS</h1>
              <p contenteditable="true">版權所有 © 2017 &nbsp; St WHISKYBAR All Right Reserved.</p>
            </div>
      </div>
    </div>

  </body>
</html>
