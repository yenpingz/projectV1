<?php
session_start();
require_once('../connection/database.php');
$sth = $db->query("SELECT * FROM product WHERE productCategoryID=".$_GET['id']);/* LIMIT ".$start_from.",". $limit*/
$product = $sth->fetchAll(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>日本旅遊-TRAVELFUN</title>
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
                            <img src="../uploads/products/<?php echo $product[0]['picture'];?>" alt="Los Angeles" style="width:100%;">
                            <div class="carousel-caption">
                              <h3><?php echo $product[0]['name']; ?></h3>
                              <p>LA is always so much fun!</p>
                            </div>
                          </div>

                          <div class="item">
                            <img src="../uploads/products/<?php echo $product[1]['picture'];?>" alt="Chicago" style="width:100%;">
                            <div class="carousel-caption">
                              <h3><?php echo $product[1]['name']; ?></h3>
                              <p>Thank you, Chicago!</p>
                            </div>
                          </div>

                          <div class="item">
                            <img src="../uploads/products/<?php echo $product[2]['picture'];?>" alt="New York" style="width:100%;">
                            <div class="carousel-caption">
                              <h3><?php echo $product[2]['name']; ?></h3>
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
                        <h2><?php if($_GET['id']==4){echo "日本";} if($_GET['id']==5){echo "中國";} if($_GET['id']==3){echo "台灣";}  ?>地區</h2>
                        <h4><?php if($_GET['id']==4){echo "日本";} if($_GET['id']==5){echo "中國";} if($_GET['id']==3){echo "國內";} ?>優質旅行</h4>
                      </div>
                      <div class="row slideanim">
                        <?php foreach ($product as $row) {  ?>
                        <div class="col-sm-4 col-xs-12">
                          <div class="panel panel-default text-center">
                            <div class="panel-heading">
                              <h1><?php echo $row['name']; ?></h1>
                            </div>
                            <img src="../uploads/products/<?php echo $row['picture']; ?>" width="100%"  alt=""/>
                            <div class="panel-body">
                              <?php echo mb_substr($row['description'],0,100,"utf-8")."..."; ?>
                            </div>
                            <div class="panel-footer">
                              <h3>NT$<?php echo $row['price']; ?></h3>

                              <button class="btn btn-lg"><a href="product.php?id=<?php echo $row['productID']; ?>&id2=<?php echo $row['productCategoryID']; ?>">查看內容</a></button>
                            </div>
                          </div>
                        </div>
                      <?php } ?>


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
