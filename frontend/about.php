<?php
require_once("../connection/database.php");
$sth = $db->query("SELECT * FROM page WHERE pageID=".$_GET["id"]);
$about = $sth->fetch(PDO::FETCH_ASSOC);

 ?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/validator.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/animate.css" rel="stylesheet" type="text/css">

  </head>
<body>
<div id="navbar1" class="bounceInDown">
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="0">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">TRAVELFUNS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">公司經營理念</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">國外旅遊<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="foreign.php">日本</a></li>
            <li><a href="#2">大陸</a></li>
            <li><a href="#3">東南亞</a></li>
            <li><a href="#4">歐洲</a></li>
          </ul>
        </li>
        <li><a href="domestic.php">國內旅遊</a></li>
        <li><a href="#5">聯絡方式</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#6"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="frontend/member_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="jumbotron text-center bg-test">
  <h1 class="bounceInDown"><?php echo $about['title']; ?></h1>
</div>

  <div class="container" style="clear: both;">
    <div class="row">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-8">
        <img src="test.jpg" style="height:225px; weight:150px;" alt="">
        <span class="about-text"><?php echo $about['content'];?><span>
      </div>
      <div class="col-sm-2">
      </div>
    </div>
  </div>






    <footer class="section section-primary" id="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>TRAVELFUNS</h1>
            <p contenteditable="true">版權所有 © 2017 &nbsp; St WHISKYBAR All Right Reserved.</p>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>
