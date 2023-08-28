<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <title>{{\App\Models\Setting::getSettingFront()->title}}</title>
</head>
<body>
<div class="load">
    <div class="load3-outer">
        <div class="load3-inner"></div>
    </div>
</div>
<header>
    <div class="nav">
        <div class="list-item">
            <ul class="list-ul">
                <li class="item-active"><a href="/#home">{{__('message.home')}}</a></li>
                <li><a href="/#about-app">{{__('message.about.word')}}</a></li>
                <li><a href="/#features">{{__('message.features')}}</a></li>
                <li><a href="/#contact">{{__('message.contact-form')}}</a></li>
                <li><a href="/useapp">{{__('message.useapp')}}</a></li>
                <li><a href="/privacy">{{__('message.privacy')}}</a></li>
                <li><a href="/contact">{{__('message.contact')}}</a></li>
            </ul>
            <div class="menu">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="icon">
            <div class="icon-lang">
                <span><a href="#">AR /</a></span>
                <span><a href="#">EN</a></span>
            </div>
            <div class="icon-img">
                <img src="../{{\App\Models\Setting::getSettingFront()->logo}}" alt="logo">
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="content-app">
        <div class="head">
            {!! \App\Models\Setting::getSettingFront()->howuse !!}
        </div>
        <div class="body">
            @foreach($datas as $data)
            <div>
                <div class="img videos">
                    <img src="{{$data->logo}}" alt="logo" link="{{$data->link}}">
                </div>
                <div class="des">
                    <div class="tit">
                        <p style="color:#000;font-size:20px;font-weight: bold;">{{$data->title}}</p>
                    </div>
                    <div class="desc">
                        <p style="color: #696871;font-size:17px;">{{$data->desc}}</p>
                    </div>
                </div>
                <div class="popup">
                    <div style="display:none;"  class="close">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <div class="ifr" style="display: none;">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<footer>
    <div class="copyright">
        <p><span>&copy;</span> {{__('message.copy.right')}}  </p>
        <p>{{__('message.khadamaty')}} 2022</p>
    </div>
    <div class="recr">
        <a href="/work">{{__('message.tawzeph')}}</a>
    </div>
    <div class="social">
        <a href="{{\App\Models\Setting::getSettingFront()->facebook_link}}"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="{{\App\Models\Setting::getSettingFront()->twiter_link}}"><i class="fa-brands fa-twitter"></i></a>
        <a href="{{\App\Models\Setting::getSettingFront()->youtube_link}}"><i class="fa-brands fa-youtube"></i></a>
    </div>
</footer>


<script src="{{asset('front/js/script.js')}}"></script>
</body>
</html>
