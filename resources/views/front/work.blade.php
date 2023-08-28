<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/nav.css')}}">
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
                <span><a href="">AR /</a></span>
                <span><a href="">EN</a></span>
            </div>
            <div class="icon-img">
                <img src="../{{\App\Models\Setting::getSettingFront()->logo}}" alt="logo">
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="contact">
        <div class="contact" id="contact">
            <div class="forms">
                <form action="{{URL('/contact-form-two')}}" method="post">
                    <div class="row">
                        <label for="email">{{__('message.contact.email')}}</label>
                        <input type="email" name="email" id="email" placeholder="john@abc.com">
                    </div>
                    <div class="row nowrap">
                        <div>
                            <label for="first">{{__('message.contact.first-name')}}</label>
                            <input type="text" name="f" id="first" placeholder="Ahmed">
                        </div>
                        <div>
                            <label for="last">{{__('message.contact.second-name')}}</label>
                            <input type="text" name="s" id="last" placeholder="salem">
                        </div>
                    </div>
                    <div class="row">
                        <label for="message">{{__('message.contact.message')}}</label>
                        <textarea name="message" id="message" placeholder="Thanks"></textarea>
                    </div>
                    <div class="row">
                        <button type="submit">{{__('message.contact.send')}}</button>
                    </div>
                </form>
                <div class="animt">
                    <svg xmlns="http://www.w3.org/2000/svg" width="196.938" height="117.314" viewBox="0 0 196.938 117.314">
                        <path id="Path_2789" data-name="Path 2789" d="M81.445,253.333s13.2,27.9,33.888,27.9,26.546-42.852,56.007-42.852,33.817,40.129,47.426,40.129,14.7-25.534,55.527-25.534" transform="matrix(0.921, -0.391, 0.391, 0.921, -166.635, -111.057)" fill="none" stroke="#c18f3a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.829"/>
                    </svg>
                </div>
            </div>
            <div class="column">
                <div class="title">
                    <p style="color: var(--color);font-size: 45px;font-weight: bolder;">{{__('message.contact-form')}}</p>
                </div>
                <div class="body">
                    {!! \App\Models\Setting::getSettingFront()->desc !!}
                </div>
                <div class="emails">
                    <a href="mailto:{{\App\Models\Setting::getSettingFront()->email}}">{{\App\Models\Setting::getSettingFront()->email}}</a>
                    <a href="tele:+966{{\App\Models\Setting::getSettingFront()->phone}}">{{\App\Models\Setting::getSettingFront()->phone}}</a>
                </div>
            </div>
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
