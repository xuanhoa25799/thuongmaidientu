<!DOCTYPE html>
<html>
<head>
	<title>Thông tin sách</title>
		<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" id="header">
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light justify-content-between">
			<a class="navbar-brand" href="#">
				<img src="images/logo-sach-da-lat.png" width="75" height="75" alt="">
			</a>
		
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<form class="form-inline my-1 mx-auto ">
					<input class="form-control form-control-lg mr-sm-2 " type="search" name="" placeholder="Tìm kiếm">
					<button class="btn btn-lg btn-outline-success my-2 my-sm-0 " type="submit"><i class="fa fa-search"></i></button>
				</form>
    			<ul class="navbar-nav ml-0">
	      			<li class="nav-item">
	       				<a class="nav-link" href="#">Trang chủ</a>
	      			</li>
      				<li class="nav-item">
       					<a class="nav-link" href="#">Tất cả sách</a>
     				</li>
      				<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Thể loại</a>
        				<div class="dropdown-menu">
        					<a class="dropdown-item" href="#">Sách giáo khoa</a>
        					<a class="dropdown-item" href="#">Sách thiếu nhi</a>
        					<a class="dropdown-item" href="#">Sách...</a>
        				</div>
     				</li>
     				<li class="nav-item">
       					<a class="nav-link" href="#">Đăng nhập</a>
     				</li>
     				<li class="nav-item">
       					<a class="nav-link" href="#">Giỏ hàng</a>
     				</li>
    			</ul>
  			</div>
  		</nav>
	</div>
    <section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sách</td>
							<td class="description">Mô tả</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img class="w-100" src="images/conan-35.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Conan thám tử lừng danh tập 35</a></h4>
					
							</td>
							<td class="cart_price">
								<p>20.000 vnđ</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">20.000 vnđ</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<a href=""><img class="w-100" src="images/nha-gia-kim.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Nhà giả kim</a></h4>
						
							</td>
							<td class="cart_price">
								<p>99.000 vnđ</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">99.000 vnđ</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img class="w-100" src="images/harry-potter-va-hon-da-phu-thuy.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Harry Potter và hòn đá phù thuỷ</h4>
							
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
			
				<p>Chọn nếu bạn có mã giảm giá hay tích điểm</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Sử dụng mã giảm giá</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Sử dụng phiếu quá tặng</label>
							</li>
						
						</ul>
						<a class="btn btn-default check_out" href="">Tiếp theo</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
                            <li>Tổng thanh toán đơn hàng <span>350.000 vnđ</span></li>
                            <li>Giảm giá <span>50.000 vnđ</span></li>
                            <li>Tổng tiền <span>300.000 vnđ</span></li>
							
						</ul>
							<a class="btn btn-default update" href="">Thanh toán</a>
						
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
<div class="container-fluid bg-dark text-light" id="footer">
	<div class="row py-5">
		<div class="col-md-6 px-5">
			<h3>Liên hệ</h3>
			<div class="contact-item">
				<i class="d-inline fa fa-map-marker"></i>
				<p class="d-inline ml-4">1 Phù Đổng Thiên Vương P2, Thành phố Đà Lạt</p>
			</div>
			<div class="contact-item">
				<i class="d-inline fa fa-phone"></i>
				<p class="d-inline ml-4">+1 555 123456</p>
			</div>
			<div class="contact-item">
				<i class="d-inline fa fa-envelope"></i>
				<p class="d-inline ml-4">sachdalat@gmail.com</p>
			</div>
		</div>
		<div class=" col-md-6 px-4 ">
			<h3>Về chúng tôi</h3>
			<span>Website sách đà lạt là nơi cung cấp sách cho bạn đọc<span>
			<div class="social_media py-2">
				<i class="fa fa-facebook-square fa-3x"></i>
				<i class="fa fa-youtube-square fa-3x"></i>
				<i class="fa fa-twitter-square fa-3x"></i>
				<i class="fa fa-github-square fa-3x"></i>
			</div>
		</div>
	</div>
</div>
</body>
</html>