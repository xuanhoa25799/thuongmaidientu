<!DOCTYPE html>
<html>
<head>
	<title>Thông tin sách</title>
		<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<div class="container" id="content">
	<div class="row">
	<div class="image col-4">

			<img class="mx-2" height="400px" width="320px" src="images/conan-35.jpg">
			<button class="btn btn-outline-primary">Thêm vào giỏ hàng</button>
			<button class="btn btn-outline-success w-50">Mua ngay</button>
	</div>
	<div class="info col-6 mx-4">
		<h2 class="my-4">Thám tử lừng danh conan tập 35</h2>
		<p class="h5">Nhà cung cấp: Nhà xuất bản Kim Đồng</p>
		<p class="h5">Tác giả: Aoyama Gosho</p>
		<p class="price">20.000đ</p>
		<div class="row mt-auto mb-4">
		<p class="col-3 h4">Số lượng</p>
		<input type="number" value="1" name="">
		</div>
		<p class="h3 text-primary mb-4">Ưu đãi liên quan</p>
		<p>Giảm ngay 20K, đơn hàng từ 40K, thanh toán qua Ví ZaloPay</p>
		<p>Nhập mã "VNPAYFA50": Giảm 50% - Nhập mã tại App Banking</p>


	</div>
	</div>
</div>
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