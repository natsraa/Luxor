<!-- <!DOCTYPE html> -->
<html>

<head>
	<title>LuxorFabric</title>
	<link rel="icon" type="image/png" href="../images/logo.png" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/sweetalert2.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<!-- <script type="text/javascript" src="../js/jquery.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/angular.min.js"></script>
	<script type="text/javascript" src="../js/app.js"></script>
	<script type="text/javascript" src="../js/sweetalert2.min.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js'></script>
	<script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
</head>

<body>
	<div id="wrapper">
		<section class="Story">
		<div class="container">
       
		<?php include "menustore.php" ?>
		<div class="col-sm-9 col-md-9" ng-app="ListProduct" ng-controller="UserListProduct" ng-init="displayListProduct()">
		<h1>ข้อมูลสินค้า</h1>
		<table id="example" class="table table-hover table-condensed" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>id</th>
					<th>name product</th>
					<th>Qty</th>
					<th>price</th>
					<th>edit</th>
					<th>delete</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><a href="PageinsertProduct.php" class="btn btn-success btn-block">Insert Product <i class="fa fa-angle-right"></i></a></td>
				</tr>
			</tfoot>
			<tbody>
            	<tr ng-repeat="x in listproduct">
					<td>{{x.id}}</td>
               		<td>{{x.nameproduct}}</td>
                	<td>{{x.qty}}</td>
					<td>{{x.priceproduct}}</td>
					<td><a href="EditPageProduct.php?idproduct={{x.id}}" class="btn btn-info">แก้ไข</a></td>
					<td><button ng-click="deleteData(x.id)" class="btn btn-danger">ลบข้อมูล</button></td>
				</tr>
			</tbody>
			
			
		</table>
</div>
		</div>
</section>

	</div>
	<!-- wrapper -->

</body>

</html>