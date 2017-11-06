<?php
require_once("../template/login_check.php");
require_once("../../connection/database1.php");
$sql= "INSERT INTO customer_order
				(memberID,orderNO,orderDate,totalPrice,shipping,name,phone,mobile,email,address,createdDate) VALUES (
				:memberID,
				:orderNO,
				:orderDate,
				:totalPrice,
				:shipping,
				:name,
				:phone,
				:mobile,
				:email,
				:address,
				:createdDate)";
	$sth = $db ->prepare($sql);
	$sth ->bindParam(":memberID", $_POST['memberID'], PDO::PARAM_INT);
	$sth ->bindParam("orderNO", $_POST['orderNO'], PDO::PARAM_STR);
	$sth ->bindParam(":orderDate", $_POST['orderDate'], PDO::PARAM_STR);
	$sth ->bindParam(":totalPrice", $_POST['totalPrice'], PDO::PARAM_INT);
	$sth ->bindParam(":shipping", $_POST['shipping'], PDO::PARAM_INT);
	$sth ->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
	$sth ->bindParam(":phone", $_POST['phone'], PDO::PARAM_STR);
	$sth ->bindParam(":mobile", $_POST['mobile'], PDO::PARAM_STR);
	$sth ->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
	$sth ->bindParam(":address", $_POST['address'], PDO::PARAM_STR);
	$sth ->bindParam(":createdDate", $_POST['createdDate'], PDO::PARAM_STR);
	$sth -> execute();
	$sth2 = $db->query("SELECT * FROM customer_order WHERE memberID=".$_POST["memberID"]." ORDER BY createdDate DESC");
	$last_order = $sth2->fetch(PDO::FETCH_ASSOC);

for ($i=0; $i < count($_SESSION['Cart']); $i++) {
	$sql= "INSERT INTO order_details
					(customer_orderID,productID,picture,name,price,Quantity,createdDate) VALUES (
					:customer_orderID,
					:productID,
					:picture,
					:name,
					:price,
					:Quantity,
					:createdDate)";
		$sth = $db ->prepare($sql);
		$sth ->bindParam(":customer_orderID", $last_order['customer_orderID'], PDO::PARAM_INT);
		$sth ->bindParam("productID", $_SESSION['Cart'][$i]['productID'], PDO::PARAM_INT);
		$sth ->bindParam(":picture", $_SESSION['Cart'][$i]['picture'], PDO::PARAM_STR);
		$sth ->bindParam(":name",  $_SESSION['Cart'][$i]['name'], PDO::PARAM_STR);
		$sth ->bindParam(":price",  $_SESSION['Cart'][$i]['price'], PDO::PARAM_INT);
		$sth ->bindParam(":Quantity",  $_SESSION['Cart'][$i]['Quantity'], PDO::PARAM_INT);
		$sth ->bindParam(":createdDate", $_POST['createdDate'], PDO::PARAM_STR);
		$sth -> execute();
}

//unset($SESSION['Cart']);
//寄信會員(管理者)

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
						<table id="order-tables">
            	<thead>
            		<tr>
            			<th width="15%">商品圖片</th>
            			<th width="30%">商品名稱</th>
									<th width="10%" class="price">單價</th>
            			<th width="10%" class="quantity">數量</th>
            			<th width="10%" class="subtotal">小計</th>
            		</tr>
            	</thead>
              <tbody>
								<?php foreach ($order_details as $row){  ?>
                <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
									<td data-title="商品圖片">
											<a href=""><img src="../../uploads/products/<?php echo $row['picture']; ?>" alt="" width="200" height="150"></a>
									</td>
									<td class="cart_description" data-title="商品名稱">
											<h4><a href="product_content.php?productID=<?php echo $row['productID']; ?>"><?php echo $row['name'] ?></a></h4>
									</td>
                  <td data-title="單價"><?php echo $row['price']; ?></td>
                  <td data-title="數量"><?php echo $row['quantity']; ?></td>
									<td data-title="小計">$NT <?php echo $row['price']*$row['quantity']; ?></td>
                </tr>
							<?php } ?>

              </tbody>
            </table>
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
