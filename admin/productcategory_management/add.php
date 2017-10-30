<?php
require_once("../../connection/database.php");
if (isset($_POST["MM_insert"]) && $_POST["MM_insert"] == "INSERT") {
  $sql= "INSERT INTO productcategory
          (area,
          createdDate) VALUES (
          :area,
          :createdDate)";
    $sth = $db ->prepare($sql);
    $sth ->bindParam(":area", $_POST['area'], PDO::PARAM_STR);
    $sth ->bindParam(":createdDate", $_POST['createdDate'], PDO::PARAM_STR);
    $sth -> execute();

  header('Location: list.php');
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>後台管理系統-TRAVELFUNS</title>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/adminstyle.css" rel="stylesheet" type="text/css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="../js/jquery-1.11.2.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="../js/bootstrap.js"></script>
    <script src="../js/validator.min.js"></script>

  </head>
  <body>
    <div class="navbar navbar-default navbar-static-top" id="nav">
      <div class="container">
        <div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=	"#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <img src="images/whisky-logo.png" width="50" height="36" alt="" style="float:left; margin-top:10px;"/>
          <a class="navbar-brand" href="#">TRAVELFUNS</a>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
          <ul class="nav navbar-nav navbar-left">
            <li ><a href="#">頁面管理</a></li>
            <li ><a href="#">最新消息管理</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">訂單管理<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#1">日本</a></li>
                <li><a href="#2">大陸</a></li>
                <li><a href="#3">東南亞</a></li>
                <li><a href="#4">歐洲</a></li>
              </ul>
            </li>
            <li><a href="#4">產品管理</a></li>
            <li><a href="#5">會員管理</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#6"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="frontend/member_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </div>



   <div class="section">
    <div class="container" id="area-contant">
    	 <div class="row">
          <div class="col-lg-12"><h1><strong>地區分類管理-新增</strong></h1></div>
          </div>
        <div class="row">
          <div class="col-md-12">
            <ul class="breadcrumb">
              <li>
                <a href="list.php">主控台</a>
              </li>
              <li>
                <a href="add.php" class="active">新增地區分類</a>
              </li>
            </ul>
          </div>
        </div>
      <div class="row">
        <div class="col-md-12">
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form class="form-horizontal" role="form" data-toggle="validator" action="add.php" method="post">
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="area" class="control-label">地區</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="area" name="area" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2 text-right">
                  <input type="hidden" name="MM_insert" value="INSERT">
                  <input type="hidden" name="createdDate" value="<?php echo date('Y-m-d H-i-s'); ?>">
                  <button type="submit" class="btn btn-primary">送出</button>
                </div>
              </div>
            </form>
        </div>
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
