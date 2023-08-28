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
                <li class="item-active"><a data-href="#home">{{__('message.home')}}</a></li>
                <li><a data-href="#about-app">{{__('message.about.word')}}</a></li>
                <li><a data-href="#features">{{__('message.features')}}</a></li>
                <li><a data-href="#contact">{{__('message.contact-form')}}</a></li>
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
        <div class="home" id="home">
            <div class="content">
                <div class="logo">
                    <img src="{{asset(\App\Models\Home::getHomeFront()->logo)}}" alt="logo">
                </div>
                <div class="body">
                    <div class="title">
                        {!! \App\Models\Home::getHomeFront()->title !!}
                    </div>
                    <div class="body-txt">
                        {!! \App\Models\Home::getHomeFront()->desc !!}
                    </div>
                    <div class="dow-link">
                        <a href="#app" style="background-color: {{\App\Models\Home::getHomeFront()->button_color}}">{{\App\Models\Home::getHomeFront()->button}}</a>
                        <div class="links">
                            <a href="{{\App\Models\Setting::getSettingFront()->google_link}}"><i class="fa-brands fa-google-play"></i></a>
                            <a href="{{\App\Models\Setting::getSettingFront()->apple_link}}"><i class="fa-brands fa-apple"></i></a>
                        </div>
                    </div>
                    <div class="link-show">
                        <a data-href="#use-app">{{__('message.link-word')}}</a>
                        <span><i class="fa-solid fa-caret-left"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-app" id="about-app">
            <div class="content">
                <div class="des">
                    <div class="title">
                        <p style="color: var(--color);font-size: 45px;font-weight: bolder;">{{__('message.about.word')}}</p>
                    </div>
                    <div class="body">
                        {!! \App\Models\Info::getInfoFront()->desc !!}
                    </div>
                </div>
                <div class="logo">
                    <img src="{{asset(\App\Models\Info::getInfoFront()->logo)}}" alt="logo">
                </div>
            </div>
        </div>
        <div class="features" id="features">
            <div class="content">
                <div class="title">
                    <h1 style="font-size: 40px;font-weight: bold;color: var(--color);">{{__('message.features')}}</h1>
                </div>
                <div class="boxs">
                    @foreach($datas as $data)
                        <div class="box">
                            <span>
                                <img src="{{asset($data->image)}}">
                            </span>
                            <p class="tit">{{$data->name}}</p>
                            <p class="desc">{{$data->desc}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="use-app" id="use-app">
            <div class="content">
                <div class="videos">
                    <img src="../front/image/videoimg.png" alt="img" link="{{\App\Models\HowUse::getHowUseFront()->video}}">
                </div>
                <div class="body">
                    <div class="title">
                        <span style="font-size:35px;color: var(--color);font-weight: bold;">{{__('message.useapp')}}</span>
                    </div>
                    <div class="body-text">
                        <span>{{\App\Models\HowUse::getHowUseFront()->desc}}</span>
                    </div>
                </div>
                <div class="popup">
                    <div class="popup">
                        <div style="display:none;"  class="close">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <div class="ifr" style="display: none;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app" id="app">
            <div class="boxs">
                <div class="svgboxs">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 180.785 180.785">
                        <g id="Group_2930" data-name="Group 2930" transform="translate(-685.138 401.091) rotate(-45)" opacity="0.2">
                          <g id="Group_2922" data-name="Group 2922" transform="translate(763.363 205.568)">
                            <circle id="Ellipse_63" data-name="Ellipse 63" cx="4.717" cy="4.717" r="4.717" fill="#c18f3a"/>
                            <circle id="Ellipse_64" data-name="Ellipse 64" cx="4.717" cy="4.717" r="4.717" transform="translate(16.914 16.914)" fill="#c18f3a"/>
                            <circle id="Ellipse_65" data-name="Ellipse 65" cx="4.717" cy="4.717" r="4.717" transform="translate(33.829 33.829)" fill="#c18f3a"/>
                            <circle id="Ellipse_66" data-name="Ellipse 66" cx="4.717" cy="4.717" r="4.717" transform="translate(50.743 50.743)" fill="#c18f3a"/>
                            <circle id="Ellipse_67" data-name="Ellipse 67" cx="4.717" cy="4.717" r="4.717" transform="translate(67.657 67.657)" fill="#c18f3a"/>
                            <circle id="Ellipse_68" data-name="Ellipse 68" cx="4.717" cy="4.717" r="4.717" transform="translate(84.572 84.572)" fill="#c18f3a"/>
                            <circle id="Ellipse_69" data-name="Ellipse 69" cx="4.717" cy="4.717" r="4.717" transform="translate(101.486 101.486)" fill="#c18f3a"/>
                            <circle id="Ellipse_70" data-name="Ellipse 70" cx="4.717" cy="4.717" r="4.717" transform="translate(118.4 118.4)" fill="#c18f3a"/>
                          </g>
                          <g id="Group_2923" data-name="Group 2923" transform="translate(746.449 222.482)">
                            <circle id="Ellipse_71" data-name="Ellipse 71" cx="4.717" cy="4.717" r="4.717" fill="#c18f3a"/>
                            <circle id="Ellipse_72" data-name="Ellipse 72" cx="4.717" cy="4.717" r="4.717" transform="translate(16.914 16.914)" fill="#c18f3a"/>
                            <circle id="Ellipse_73" data-name="Ellipse 73" cx="4.717" cy="4.717" r="4.717" transform="translate(33.828 33.829)" fill="#c18f3a"/>
                            <circle id="Ellipse_74" data-name="Ellipse 74" cx="4.717" cy="4.717" r="4.717" transform="translate(50.743 50.743)" fill="#c18f3a"/>
                            <circle id="Ellipse_75" data-name="Ellipse 75" cx="4.717" cy="4.717" r="4.717" transform="translate(67.657 67.657)" fill="#c18f3a"/>
                            <circle id="Ellipse_76" data-name="Ellipse 76" cx="4.717" cy="4.717" r="4.717" transform="translate(84.572 84.572)" fill="#c18f3a"/>
                            <circle id="Ellipse_77" data-name="Ellipse 77" cx="4.717" cy="4.717" r="4.717" transform="translate(101.486 101.486)" fill="#c18f3a"/>
                            <path id="Path_1131" data-name="Path 1131" d="M732.37,262.454a4.716,4.716,0,1,1,0-6.67A4.714,4.714,0,0,1,732.37,262.454Z" transform="translate(-605.918 -136.001)" fill="#c18f3a"/>
                          </g>
                          <g id="Group_2924" data-name="Group 2924" transform="translate(729.535 239.397)">
                            <circle id="Ellipse_78" data-name="Ellipse 78" cx="4.717" cy="4.717" r="4.717" fill="#c18f3a"/>
                            <circle id="Ellipse_79" data-name="Ellipse 79" cx="4.717" cy="4.717" r="4.717" transform="translate(16.915 16.914)" fill="#c18f3a"/>
                            <circle id="Ellipse_80" data-name="Ellipse 80" cx="4.717" cy="4.717" r="4.717" transform="translate(33.829 33.828)" fill="#c18f3a"/>
                            <circle id="Ellipse_81" data-name="Ellipse 81" cx="4.717" cy="4.717" r="4.717" transform="translate(50.743 50.743)" fill="#c18f3a"/>
                            <circle id="Ellipse_82" data-name="Ellipse 82" cx="4.717" cy="4.717" r="4.717" transform="translate(67.657 67.657)" fill="#c18f3a"/>
                            <circle id="Ellipse_83" data-name="Ellipse 83" cx="4.717" cy="4.717" r="4.717" transform="translate(84.572 84.572)" fill="#c18f3a"/>
                            <path id="Path_1132" data-name="Path 1132" d="M720.161,262.454a4.716,4.716,0,1,1,0-6.67A4.715,4.715,0,0,1,720.161,262.454Z" transform="translate(-610.624 -152.916)" fill="#c18f3a"/>
                            <circle id="Ellipse_84" data-name="Ellipse 84" cx="4.717" cy="4.717" r="4.717" transform="translate(118.4 118.4)" fill="#c18f3a"/>
                          </g>
                          <g id="Group_2925" data-name="Group 2925" transform="translate(712.62 256.311)">
                            <circle id="Ellipse_85" data-name="Ellipse 85" cx="4.717" cy="4.717" r="4.717" fill="#c18f3a"/>
                            <circle id="Ellipse_86" data-name="Ellipse 86" cx="4.717" cy="4.717" r="4.717" transform="translate(16.914 16.914)" fill="#c18f3a"/>
                            <circle id="Ellipse_87" data-name="Ellipse 87" cx="4.717" cy="4.717" r="4.717" transform="translate(33.829 33.829)" fill="#c18f3a"/>
                            <circle id="Ellipse_88" data-name="Ellipse 88" cx="4.717" cy="4.717" r="4.717" transform="translate(50.743 50.743)" fill="#c18f3a"/>
                            <circle id="Ellipse_89" data-name="Ellipse 89" cx="4.717" cy="4.717" r="4.717" transform="translate(67.657 67.657)" fill="#c18f3a"/>
                            <path id="Path_1133" data-name="Path 1133" d="M707.953,262.454a4.716,4.716,0,1,1,0-6.67A4.715,4.715,0,0,1,707.953,262.454Z" transform="translate(-615.329 -169.83)" fill="#c18f3a"/>
                            <circle id="Ellipse_90" data-name="Ellipse 90" cx="4.717" cy="4.717" r="4.717" transform="translate(101.486 101.486)" fill="#c18f3a"/>
                            <circle id="Ellipse_91" data-name="Ellipse 91" cx="4.717" cy="4.717" r="4.717" transform="translate(118.4 118.4)" fill="#c18f3a"/>
                          </g>
                          <g id="Group_2926" data-name="Group 2926" transform="translate(695.706 273.225)">
                            <circle id="Ellipse_92" data-name="Ellipse 92" cx="4.717" cy="4.717" r="4.717" fill="#c18f3a"/>
                            <circle id="Ellipse_93" data-name="Ellipse 93" cx="4.717" cy="4.717" r="4.717" transform="translate(16.915 16.914)" fill="#c18f3a"/>
                            <circle id="Ellipse_94" data-name="Ellipse 94" cx="4.717" cy="4.717" r="4.717" transform="translate(33.829 33.829)" fill="#c18f3a"/>
                            <circle id="Ellipse_95" data-name="Ellipse 95" cx="4.717" cy="4.717" r="4.717" transform="translate(50.743 50.743)" fill="#c18f3a"/>
                            <path id="Path_1134" data-name="Path 1134" d="M695.744,262.454a4.716,4.716,0,1,1,0-6.67A4.715,4.715,0,0,1,695.744,262.454Z" transform="translate(-620.036 -186.744)" fill="#c18f3a"/>
                            <circle id="Ellipse_96" data-name="Ellipse 96" cx="4.717" cy="4.717" r="4.717" transform="translate(84.572 84.572)" fill="#c18f3a"/>
                            <circle id="Ellipse_97" data-name="Ellipse 97" cx="4.717" cy="4.717" r="4.717" transform="translate(101.486 101.486)" fill="#c18f3a"/>
                            <path id="Path_1135" data-name="Path 1135" d="M714.057,280.767a4.717,4.717,0,1,1,0-6.672A4.72,4.72,0,0,1,714.057,280.767Z" transform="translate(-587.605 -154.314)" fill="#c18f3a"/>
                          </g>
                          <g id="Group_2927" data-name="Group 2927" transform="translate(678.792 290.14)">
                            <circle id="Ellipse_98" data-name="Ellipse 98" cx="4.717" cy="4.717" r="4.717" fill="#c18f3a"/>
                            <circle id="Ellipse_99" data-name="Ellipse 99" cx="4.717" cy="4.717" r="4.717" transform="translate(16.914 16.914)" fill="#c18f3a"/>
                            <circle id="Ellipse_100" data-name="Ellipse 100" cx="4.717" cy="4.717" r="4.717" transform="translate(33.829 33.829)" fill="#c18f3a"/>
                            <path id="Path_1136" data-name="Path 1136" d="M683.536,262.454a4.716,4.716,0,1,1,0-6.67A4.715,4.715,0,0,1,683.536,262.454Z" transform="translate(-624.741 -203.659)" fill="#c18f3a"/>
                            <circle id="Ellipse_101" data-name="Ellipse 101" cx="4.717" cy="4.717" r="4.717" transform="translate(67.657 67.657)" fill="#c18f3a"/>
                            <circle id="Ellipse_102" data-name="Ellipse 102" cx="4.717" cy="4.717" r="4.717" transform="translate(84.572 84.572)" fill="#c18f3a"/>
                            <path id="Path_1137" data-name="Path 1137" d="M701.849,280.767a4.718,4.718,0,1,1,0-6.672A4.723,4.723,0,0,1,701.849,280.767Z" transform="translate(-592.311 -171.228)" fill="#c18f3a"/>
                            <circle id="Ellipse_103" data-name="Ellipse 103" cx="4.717" cy="4.717" r="4.717" transform="translate(118.4 118.4)" fill="#c18f3a"/>
                          </g>
                          <g id="Group_2928" data-name="Group 2928" transform="translate(661.877 307.054)">
                            <circle id="Ellipse_104" data-name="Ellipse 104" cx="4.717" cy="4.717" r="4.717" fill="#c18f3a"/>
                            <circle id="Ellipse_105" data-name="Ellipse 105" cx="4.717" cy="4.717" r="4.717" transform="translate(16.914 16.915)" fill="#c18f3a"/>
                            <path id="Path_1138" data-name="Path 1138" d="M671.327,262.454a4.716,4.716,0,1,1,0-6.67A4.715,4.715,0,0,1,671.327,262.454Z" transform="translate(-629.448 -220.573)" fill="#c18f3a"/>
                            <circle id="Ellipse_106" data-name="Ellipse 106" cx="4.717" cy="4.717" r="4.717" transform="translate(50.743 50.743)" fill="#c18f3a"/>
                            <circle id="Ellipse_107" data-name="Ellipse 107" cx="4.717" cy="4.717" r="4.717" transform="translate(67.657 67.657)" fill="#c18f3a"/>
                            <path id="Path_1139" data-name="Path 1139" d="M689.64,280.767a4.717,4.717,0,1,1,0-6.672A4.72,4.72,0,0,1,689.64,280.767Z" transform="translate(-597.017 -188.143)" fill="#c18f3a"/>
                            <circle id="Ellipse_108" data-name="Ellipse 108" cx="4.717" cy="4.717" r="4.717" transform="translate(101.486 101.486)" fill="#c18f3a"/>
                            <path id="Path_1140" data-name="Path 1140" d="M701.849,292.975a4.717,4.717,0,1,1,0-6.67A4.718,4.718,0,0,1,701.849,292.975Z" transform="translate(-575.396 -166.523)" fill="#c18f3a"/>
                          </g>
                          <g id="Group_2929" data-name="Group 2929" transform="translate(644.963 323.968)">
                            <circle id="Ellipse_109" data-name="Ellipse 109" cx="4.717" cy="4.717" r="4.717" fill="#c18f3a"/>
                            <path id="Path_1141" data-name="Path 1141" d="M659.119,262.454a4.716,4.716,0,1,1,0-6.67A4.715,4.715,0,0,1,659.119,262.454Z" transform="translate(-634.153 -237.487)" fill="#c18f3a"/>
                            <circle id="Ellipse_110" data-name="Ellipse 110" cx="4.717" cy="4.717" r="4.717" transform="translate(33.829 33.828)" fill="#c18f3a"/>
                            <circle id="Ellipse_111" data-name="Ellipse 111" cx="4.717" cy="4.717" r="4.717" transform="translate(50.743 50.743)" fill="#c18f3a"/>
                            <path id="Path_1142" data-name="Path 1142" d="M677.432,280.767a4.718,4.718,0,1,1,0-6.672A4.723,4.723,0,0,1,677.432,280.767Z" transform="translate(-601.722 -205.057)" fill="#c18f3a"/>
                            <circle id="Ellipse_112" data-name="Ellipse 112" cx="4.717" cy="4.717" r="4.717" transform="translate(84.572 84.571)" fill="#c18f3a"/>
                            <path id="Path_1143" data-name="Path 1143" d="M689.64,292.975a4.716,4.716,0,1,1,0-6.67A4.715,4.715,0,0,1,689.64,292.975Z" transform="translate(-580.102 -183.437)" fill="#c18f3a"/>
                            <circle id="Ellipse_113" data-name="Ellipse 113" cx="4.717" cy="4.717" r="4.717" transform="translate(118.4 118.4)" fill="#c18f3a"/>
                          </g>
                        </g>
                    </svg>
                </div>
                <div class="one">
                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 241 241">
                        <circle id="Ellipse_117" data-name="Ellipse 117" cx="120.5" cy="120.5" r="120.5" fill="#c18f3a" opacity="0.05"/>
                    </svg>
                </div>
                <div class="two">
                    <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" viewBox="0 0 442 442">
                        <circle id="Ellipse_116" data-name="Ellipse 116" cx="221" cy="221" r="221" fill="#c18f3a" opacity="0.05"/>
                    </svg>
                </div>
                <div class="content">
                    <div>
                        <h1>
                            {{__('message.downloud-app')}}
                        </h1>
                    </div>
                    <div>
                        <p>
                            {{__('message.app-available')}}
                        </p>
                    </div>
                    <div class="links">
                        <a href="{{\App\Models\Setting::getSettingFront()->google_link}}">
                            <i class="fa-brands fa-google-play"></i>
                            <span>
                                {{__('message.google')}}
                            </span>
                        </a>
                        <a href="{{\App\Models\Setting::getSettingFront()->apple_link}}">
                            <i class="fa-brands fa-apple"></i>
                            <span>
                                {{__('message.apple')}}
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact" id="contact">
            <div class="forms">
                <form action="{{URL('/contact-form-one')}}" method="post">
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
