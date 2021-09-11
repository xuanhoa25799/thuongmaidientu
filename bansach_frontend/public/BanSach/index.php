<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ | Sách Đà Lạt</title>
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
		<div id="slide" class="carousel slide" data-ride="carousel">
  			<div class="carousel-inner">
    			<div class="carousel-item active">
     				 <img class="d-block w-100" height="400px" src="images/slide-dac-nhan-tam.jpg" alt="First slide">
    			</div>
   				 <div class="carousel-item">
      				<img class="d-block w-100" height="400px" src="images/slide-sach-giao-khoa.jpg" alt="Second slide">
   				 </div>
    			<div class="carousel-item">
      				<img class="d-block w-100" height="400px" src="images/slide-sherlock-holmes.jpg" alt="Third slide">
    			</div>
 			 </div>
  			<a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
 			 </a>
  			<a class="carousel-control-next" href="#slide" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>
		<div id="BestSeller" class="my-5">
			<h3 class="d-inline">Sách bán chạy</h3>
			<a class="d-inline btn btn-outline-primary float-right" href="#">Xem thêm</a>
			<hr>
			<div class="row">
				<div class="col-3-5 border border-secondary">
					<img height="400px" width="310px" src="images/conan-35.jpg">
					<p class="h6">Thám tử lừng danh Conan tập 35</p>
					<p class="h6">Giá: 20.000đ</p>
					<a class="btn btn-outline-info my-1 w-100" href="#">Thông tin sách</a>
					<a class="btn btn-outline-success w-100" href="#">Thêm vào giỏ hàng</a>
				</div>
				<div class="col-3-5 border border-secondary mx-auto">
					<img height="400px" width="310px" src="images/dac-nhan-tam.jpg">
					<p class="h6">Đắc nhân tâm</p>
					<p class="h6">Giá: 79.000đ</p>
					<a class="btn btn-outline-info my-1 w-100" href="#">Thông tin sách</a>
					<a class="btn btn-outline-success w-100" href="#">Thêm vào giỏ hàng</a>
				</div>
				<div class="col-3-5 border border-secondary">
					<img height="400px" width="310px" src="images/nha-gia-kim.jpg">
					<p class="h6">Nhà Giả Kim</p>
					<p class="h6">Giá: 99.000đ</p>
					<a class="btn btn-outline-info my-1 w-100" href="#">Thông tin sách</a>
					<a class="btn btn-outline-success w-100" href="#">Thêm vào giỏ hàng</a>
				</div>
			</div>
			<div class="row">
				<div class="col-3-5 border border-secondary">
					<img height="400px" width="310px" src="images/harry-potter-va-hon-da-phu-thuy.jpg">
					<p class="h6">Harry Porter và hòn đá phù thủy</p>
					<p class="h6">Giá: 120.000đ</p>
					<a class="btn btn-outline-info my-1 w-100" href="#">Thông tin sách</a>
					<a class="btn btn-outline-success w-100" href="#">Thêm vào giỏ hàng</a>
				</div>
				<div class="col-3-5 border border-secondary mx-auto">
					<img height="400px" width="310px" src="images/alice-o-xu-so-than-tien.jpg">
					<p class="h6">Alice ở xứ sở thần tiên</p>
					<p class="h6">Giá: 20.000đ</p>
					<a class="btn btn-outline-info my-1 w-100" href="#">Thông tin sách</a>
					<a class="btn btn-outline-success w-100" href="#">Thêm vào giỏ hàng</a>
				</div>
				<div class="col-3-5 border border-secondary">
					<img height="400px" width="310px" src="images/su-tu-phu-thuy-va-cai-tu-ao.jpg">
					<p class="h6">Sư tử, Phù thủy và cái Tủ áo</p>
					<p class="h6">Giá: 20.000đ</p>
					<a class="btn btn-outline-info my-1 w-100" href="#">Thông tin sách</a>
					<a class="btn btn-outline-success w-100" href="#">Thêm vào giỏ hàng</a>
				</div>
			</div>
		</div>
		<div id="New">
			<h3 class="d-inline">Sách mới nhất</h3>
			<a class="d-inline btn btn-outline-primary float-right" href="#">Xem thêm</a>
			<hr>
			<div class="row">
				<div class="col-3-5 border border-secondary">
					<img height="400px" width="310px" src="images/conan-35.jpg">
					<p class="h6">Thám tử lừng danh Conan tập 35</p>
					<p class="h6">Giá: 20.000đ</p>
					<a class="btn btn-outline-info my-1 w-100" href="#">Thông tin sách</a>
					<a class="btn btn-outline-success w-100" href="#">Thêm vào giỏ hàng</a>
				</div>
				<div class="col-3-5 border border-secondary mx-auto">
					<img height="400px" width="310px" src="images/dac-nhan-tam.jpg">
					<p class="h6">Đắc nhân tâm</p>
					<p class="h6">Giá: 79.000đ</p>
					<a class="btn btn-outline-info my-1 w-100" href="#">Thông tin sách</a>
					<a class="btn btn-outline-success w-100" href="#">Thêm vào giỏ hàng</a>
				</div>
				<div class="col-3-5 border border-secondary">
					<img height="400px" width="310px" src="images/nha-gia-kim.jpg">
					<p class="h6">Nhà Giả Kim</p>
					<p class="h6">Giá: 99.000đ</p>
					<a class="btn btn-outline-info my-1 w-100" href="#">Thông tin sách</a>
					<a class="btn btn-outline-success w-100" href="#">Thêm vào giỏ hàng</a>
				</div>
			</div>
			<div class="col-9">
			<div class="row">
				<div class="col-3-5 border border-secondary">
					<img height="400px" width="310px" src="images/harry-potter-va-hon-da-phu-thuy.jpg">
					<p class="h6">Harry Porter và hòn đá phù thủy</p>
					<p class="h6">Giá: 120.000đ</p>
					<a class="btn btn-outline-info my-1 w-100" href="#">Thông tin sách</a>
					<a class="btn btn-outline-success w-100" href="#">Thêm vào giỏ hàng</a>
				</div>
				<div class="col-3-5 border border-secondary mx-auto">
					<img height="400px" width="310px" src="images/alice-o-xu-so-than-tien.jpg">
					<p class="h6">Alice ở xứ sở thần tiên</p>
					<p class="h6">Giá: 20.000đ</p>
					<a class="btn btn-outline-info my-1 w-100" href="#">Thông tin sách</a>
					<a class="btn btn-outline-success w-100" href="#">Thêm vào giỏ hàng</a>
				</div>
				<div class="col-3-5 border border-secondary">
					<img height="400px" width="310px" src="images/su-tu-phu-thuy-va-cai-tu-ao.jpg">
					<p class="h6">Sư tử, Phù thủy và cái Tủ áo</p>
					<p class="h6">Giá: 20.000đ</p>
					<a class="btn btn-outline-info my-1 w-100" href="#">Thông tin sách</a>
					<a class="btn btn-outline-success w-100" href="#">Thêm vào giỏ hàng</a>
				</div>
			</div>
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