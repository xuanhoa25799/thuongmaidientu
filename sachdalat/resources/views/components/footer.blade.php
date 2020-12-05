<div class="container-fluid bg-dark text-light" id="footer">
    <div class="row py-5">
        <div class="col-md-6 px-5">
            <h3>Liên hệ</h3>
            <div class="contact-item">
                <i class="d-inline fa fa-map-marker"></i>
                <p class="d-inline ml-4">{{getValuebyKey('diachi')}}</p>
            </div>
            <div class="contact-item">
                <i class="d-inline fa fa-phone"></i>
                <p class="d-inline ml-4">{{getValuebyKey('phone_contact')}}</p>
            </div>
            <div class="contact-item">
                <i class="d-inline fa fa-envelope"></i>
                <p class="d-inline ml-4">{{getValuebyKey('email')}}.</p>
            </div>
        </div>
        <div class=" col-md-6 px-4 ">
            <h3>Về chúng tôi</h3>
            <span>Website sách đà lạt là nơi cung cấp sách cho bạn đọc</span>
            <div class="social_media py-2">
                <a href="{{getValuebyKey('facebook_link')}}"><i class="fa fa-facebook-square fa-3x"></i></a>
                <a href="{{getValuebyKey('youtube_link')}}"><i class="fa fa-youtube-square fa-3x"></i></a>
                <a href=""><i class="fa fa-twitter-square fa-3x"></i></a>
                <a href=""><i class="fa fa-github-square fa-3x"></i></a>
            </div>
        </div>
    </div>
</div>
