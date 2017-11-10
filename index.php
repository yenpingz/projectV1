<?php
session_start();
require_once('connection/database.php');
$sth = $db->query("SELECT * FROM news ");/* LIMIT ".$start_from.",". $limit*/
$all_news = $sth->fetchAll(PDO::FETCH_ASSOC);

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="TRAVELFUN2-logo.png">
    <title>TRAVELFUNS</title>
    <!-- Bootstrap -->
	<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/style1.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
  </head>
  <body id="myPage" class="bg1" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
          <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a href="#myPage"><img src="assets/images/travel2.png" width="80" height="50" alt=""/></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right" style="margin-left:10px;">
              <!--<li><a href="frontend/member/logout.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
              <?php if(!isset($_SESSION['account'])){ ?>
                <li><a href="frontend/member/member_apply.php"><span class="glyphicon glyphicon-log-in"></span>加入會員</a></li>
                <li><a href="frontend/member/member_login2.php"><span class="glyphicon glyphicon-log-in"></span>會員登入</a></li>
              <?php }else{ ?>
                <li><a href="frontend/member/my_cart.php"><span class="glyphicon glyphicon-log-in"></span>會員專區</a></li>

                <li><a href="frontend/member/member_login2.php"><span class="glyphicon glyphicon-log-in"></span>會員登出</a></li>
                <li><a href="frontend/member/my_cart  .php"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></a></li>
              <?php } ?>

            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#news">最新優惠</a></li>
            <li><a href="frontend/categorylist.php#services">國外旅遊</a></li>
            <li><a href="frontend/productcategory.php?id=3#portfolio">國內旅遊</a></li>
            <li><a href="#pricing">自由行</a></li>
            <li><a href="#contact">聯絡專區</a></li>
            </ul>

          </div>
          </div>
    </nav>

                <div class="container-fluid">
                  <div class="row">
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
                            <img src="assets/images/cal/product-img_03.jpg" alt="Los Angeles" style="width:100%;">
                            <div class="carousel-caption fadeInDown">
                              <h3>歐洲湖畔</h3>
                              <p>度假小屋，湖畔的寧靜!</p>
                            </div>
                          </div>

                          <div class="item">
                            <img src="assets/images/cal/product-img_13.jpg" alt="Chicago" style="width:100%;">
                            <div class="carousel-caption">
                              <h3>水上江南</h3>
                              <p>小橋，流水，人家!</p>
                            </div>
                          </div>

                          <div class="item">
                            <img src="assets/images/cal/product-img_19.jpg" alt="New York" style="width:100%;">
                            <div class="carousel-caption">
                              <h3>日本九州</h3>
                              <p>深夜極景，閒情逸致!</p>
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
                  </div>
                </div>

                    <div id="news" class="container">
                      <div class="text-center newstitle">
                        <h2 >TRAVELFUN</h2>
                        <h4>創新行程，最低優惠，優質旅遊。</h4>
                      </div>
                      <div class="row">
                        <?php foreach ($all_news as $row) {?>
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                            <img src="assets/images/product/<?php echo $row['picture']; ?>" alt="...">
                            <div class="caption">
                              <h3 class="text-center" style="padding-bottom:10px; border-bottom:1px solid black;"><?php echo $row['title']; ?></h3>
                              <p class="text-center"><?php echo $row['content']; ?></p>
                              <p class="text-center"><a href="frontend/product.php?id=<?php echo $row['productID']; ?>&id2=<?php echo $row['productCategoryID']; ?>&id3=0" class="btn btn-lg" role="button">前往查看</a></p>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                      </div>
                    </div>


					<div id="contact" class="container-fluid">
                      <h2 class="text-center"><span class="fa fa-building" style="margin-right:20px;"></span>聯絡專區</h2>
                      <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                          <p>聯繫我們，我們將在24小時內回覆您。</p>
                          <p><span class="glyphicon glyphicon-map-marker"></span> 桃園市中壢區</p>
                          <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
                          <p><span class="glyphicon glyphicon-envelope"></span> myemail@gmail.com</p>
                        </div>
                        <div class="col-sm-5 slideanim">
                          <div class="row">
                            <div class="col-sm-6 form-group">
                              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                            </div>
                            <div class="col-sm-6 form-group">
                              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                            </div>
                          </div>
                          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                          <div class="row">
                            <div class="col-sm-12 form-group">
                              <button class="btn btn-default pull-right" type="submit">Send</button>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-2"></div>
                      </div>
                      <div class="row footer-margin-top" >
                          <div class="col-sm-2"></div>
                           <div class="col-sm-6">
                              <h1>TRAVELFUNS</h1>
                              <p contenteditable="true">版權所有 © 2017 &nbsp; St XXXXXX All Right Reserved.</p>
                            </div>
                      </div>
                    </div>
                      <div id="footer">
                      </div>

  </body>
</html>
