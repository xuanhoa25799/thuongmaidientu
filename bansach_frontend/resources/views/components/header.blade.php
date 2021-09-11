<div class="container" id="header">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="#">
            <img src="/BanSach/images/logo-sach-da-lat.png" width="75" height="75" alt="">
        </a>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <form class="form-inline my-1 mx-auto ">
                <input class="form-control form-control-lg mr-sm-2 " type="search" name="" placeholder="Tìm kiếm">
                <button class="btn btn-lg btn-outline-success my-2 my-sm-0 " type="submit"><i class="fa fa-search"></i></button>
            </form>
            <ul class="navbar-nav ml-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tất cả sách</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Thể loại</a>
                    <ul class="dropdown-menu">
                        @foreach($Theloais as $Theloai)
                                @if(!$Theloai->TheLoaiChildren->count())
                                    <li><a tabindex="-1" href="{{route('theloai.sach',['slug'=> $Theloai->slug, 'id'=>$Theloai->id]) }}">{{$Theloai->tentheloai}}</a></li>
                                @else
                                <li class="dropdown-submenu"><a class="test" href="">{{$Theloai->tentheloai}}</a>
                                    <ul class="dropdown-menu">
                                     @foreach($Theloai->TheLoaiChildren as $Theloaichild)
                                        <li><a tabindex="-1" href="{{route('theloai.sach',['slug'=> $Theloaichild->slug, 'id'=>$Theloaichild->id]) }}">{{$Theloaichild->tentheloai}}</a></li>
                                        @endforeach
                                     </ul>
                                </li>
                                @endif
                        @endforeach
                    </ul>
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
