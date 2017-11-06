<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
    <link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/style1.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <?php require_once("template/nav.php"); ?>

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
                            <img src="../assets/images/bannertext_02.jpg" alt="Los Angeles" style="width:100%;">
                            <div class="carousel-caption">
                              <h3>Los Angeles</h3>
                              <p>LA is always so much fun!</p>
                            </div>
                          </div>

                          <div class="item">
                            <img src="../assets/images/bannertext_02.jpg" alt="Chicago" style="width:100%;">
                            <div class="carousel-caption">
                              <h3>Chicago</h3>
                              <p>Thank you, Chicago!</p>
                            </div>
                          </div>

                          <div class="item">
                            <img src="../assets/images/bannertext_02.jpg" alt="New York" style="width:100%;">
                            <div class="carousel-caption">
                              <h3>New York</h3>
                              <p>We love the Big Apple!</p>
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
                    <div class="container-fluid">
                      <div class="row">
                   			 <h3 class="col-sm-12"></h3>
                      </div>
                    </div>
                  </div>
                </div>



                    <div id="services" class="container-fluid">
                      <div class="text-center">
                        <h2>國外旅遊</h2>
                      </div>
                      <div class="row slideanim">
                        <div class="col-sm-4 col-xs-12">
                          <div class="panel panel-default text-center">
                            <div class="panel-heading">
                              <h1>日本行程</h1>
                            </div>
                            <img src="../img2_04.jpg" width="100%" height="198" alt=""/>
                            <div class="panel-footer">

                              <button class="btn btn-lg"> <a href="productcategory.php?id=4">前往查看</a></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                          <div class="panel panel-default text-center">
                            <div class="panel-heading">
                              <h1>歐洲行程</h1>
                            </div>
                            <div class="panel-footer">
                              <h3>$29</h3>
                              <h4>per month</h4>
                              <button class="btn btn-lg">Sign Up</button>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                          <div class="panel panel-default text-center">
                            <div class="panel-heading">
                              <h1>中國行程</h1>
                            </div>
                            <div class="panel-body">
                              <p><strong>100</strong> Lorem</p>
                              <p><strong>50</strong> Ipsum</p>
                              <p><strong>25</strong> Dolor</p>
                              <p><strong>10</strong> Sit</p>
                              <p><strong>Endless</strong> Amet</p>
                            </div>
                            <div class="panel-footer">
                              <h3>$49</h3>
                              <h4>per month</h4>
                              <button class="btn btn-lg"> <a href="productlist.php?id=6">前往查看</a></button>
                            </div>
                          </div>
                        </div>


                      </div>
                    </div>



                      <div class="container-fluid" id="footer">
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
