<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/privacy.css')}}">
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
    <div class="anim">
        <svg xmlns="http://www.w3.org/2000/svg" width="564.83" height="480.088" viewBox="0 0 564.83 480.088">
            <g id="Group_8394" data-name="Group 8394" transform="matrix(0.966, -0.259, 0.259, 0.966, 224.851, 251.129)">
                <path id="Path_2791" data-name="Path 2791" d="M-1529.762,3917.5s52.993-132.322,188-108.367c2.524,0,244.777,50.191,208.186-152.856,1.262-1.141,39.114-42.206,39.114-42.206" transform="translate(1358.611 -3771.919)" fill="none" stroke="#c18f3a" stroke-width="3" opacity="0.35"/>
                <path id="Path_2793" data-name="Path 2793" d="M-1529.762,3917.5s52.993-132.322,188-108.367c2.524,0,244.777,50.191,208.186-152.856,1.262-1.141,39.114-42.206,39.114-42.206" transform="translate(1391.822 -3718.361)" fill="none" stroke="#c18f3a" stroke-width="3" opacity="0.35"/>
                <path id="Path_2792" data-name="Path 2792" d="M-1529.762,3917.5s52.993-132.322,188-108.367c2.524,0,244.777,50.191,208.186-152.856,1.262-1.141,39.114-42.206,39.114-42.206" transform="translate(1349.635 -3804.379)" fill="none" stroke="#c18f3a" stroke-width="3" opacity="0.35"/>
                <path id="Path_2794" data-name="Path 2794" d="M-1529.762,3917.5s52.993-132.322,188-108.367c2.524,0,244.777,50.191,208.186-152.856,1.262-1.141,39.114-42.206,39.114-42.206" transform="translate(1382.846 -3750.821)" fill="none" stroke="#c18f3a" stroke-width="3" opacity="0.35"/>
            </g>
        </svg>
    </div>
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
    <div class="content">
        {!! \App\Models\About::getDataFront()->data !!}
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
