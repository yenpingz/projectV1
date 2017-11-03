<?php
require_once('connection/database.php');
$sth = $db->query("SELECT * FROM news ");/* LIMIT ".$start_from.",". $limit*/
$all_news = $sth->fetchAll(PDO::FETCH_ASSOC);

 ?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/validator.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
    <script>
      $(function(){
      	$('#newslist .cover').hover(
          function(){
            //滑入
            $(this).find('img').animate({opacity: 0.5},100);
          },
          function(){
            //滑出
            $(this).find('img').animate({opacity: 1},100);
          }
        )

      });
      </script>

  </head>
<body class="body">
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
        <li><a href="index.php#indexabout">公司簡介</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">國外旅遊<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="frontend/productcategory.php?id=4">日本</a></li>
            <li><a href="frontend/productcategory.php?id=6">中國</a></li>
            <li><a href="#3">東南亞</a></li>
            <li><a href="#4">歐洲</a></li>
          </ul>
        </li>
        <li><a href="frontend/productcategory.php?id=3">國內旅遊</a></li>
        <li><a href="#5">聯絡方式</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="frontend/member/logout.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="frontend/member/member_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="indexCarousel">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="assets/images/holiday-737497_1920.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h1>沙灘</h1>
          <p>冬季避冬聖地!</p>
        </div>
      </div>

      <div class="item">
        <img src="assets/images/4.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h1>海島假期</h1>
          <p>冬季避冬聖地!</p>
        </div>
      </div>

      <div class="item">
        <img src="assets/images/holiday-2103171_1920.jpg" alt="New york" style="width:100%;">
        <div class="carousel-caption">
          <h1>長灘島-五天四夜</h1>
          <p>海島風情，浮淺遊樂!</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<div class="jumbotron text-center">
  <h1 class="bounceInDown">精選行程</h1>
  <p>享受!</p>
</div>

  <div class="container">
    <div class="row" id="newslist">
      <?php foreach ($all_news as $row) {?>
      <div class="col-sm-4 cover">
        <a href="frontend/product.php?id=<?php echo $row['productID']; ?>"><img src="test.jpg" style="height:225px; weight:150px;" alt="" class="img-thumbnail"></a>
        <h3><?php echo $row['title']; ?></h3>
        <?php echo $row['content']; ?>
        <button type="button" class="btn btn-info" style="margin-left:38%;">前往頁面</button>
      </div>
      <?php }?>
    </div>
  </div>

  <a id="indexabout"></a>
  <div class="about-color">
    <hr>
      <h3>公司簡介</h3>
    <hr>
  </div>
  <div class="container">
      <div class="row">
        <div class="col-sm-6 cover"><img src="assets/images/com.jpg" style="width:100%" alt=""></div>
        <div class="col-sm-6 cover">
          <ul>
            <li><h3>公司名稱:</h3></li>
            <li><h3>資本額:</h3></li>
            <li><h3>地址:</h3></li>
            <li><h3>電話:</h3></li>
          </ul>
        </div>
      </div>
  </div>

  <a id="indexcontact"></a>
  <div class="container" >
    <div class="row">
              <hr>
              <h3>聯絡方式</h3>
              <hr>
              <div class="container" >

                  <form class="form-horizontal" action="/action_page.php">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Email:</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Password:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                      </div>
                    </div>
                  </form>
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
