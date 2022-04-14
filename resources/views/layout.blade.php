<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{mix ('css/app.css')}}" rel="stylesheet">
    <!-- подключить plugins, пофиксить в нём пути -->
    <link href="{{mix ('css/plugins.css')}}" rel="stylesheet">
    <link href="{{mix ('css/style.css')}}" rel="stylesheet">
    <link href="{{mix ('css/color.css')}}" rel="stylesheet">
    <link href="{{mix ('css/icons.css')}}" rel="stylesheet">
</head>
<body>

<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

<div class="body-wrapper">

<nav class="navbar navbar-default default {{ Request::is('contact') ? 'solid' : '' }}">
        <div class="container">
            <div class="navbar-header">
                <div class="basic-wrapper"> <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a>
                    <div class="navbar-brand">
                        <a href="">
                            <img class="logo-light" src="storage/images/branko.png"  alt="BRANKO" height="50"/>
                            <img class="logo-dark" src="storage/images/branko-dark.png"  alt="BRANKO" height="50"/>
                        </a>
                    </div>
                    <!-- /.navbar-brand -->
                </div>
                <!-- /.basic-wrapper -->
            </div>
            <!-- /.navbar-header -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="current">
                        <a href="">О нас</a>
                    </li>
                    <li class="">
                        <a href="incubation">Инкубирование</a>
                    </li>
                    <li class="">
                        <a href="contact">Контакты</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->

@yield('main_content')

<footer class="inverse-wrapper">
<div class="container inner">
    <div class="row">
        <div class="col-sm-6">
            <div class="widget">
                <img src="storage/images/branko.svg" alt="BRANKO" height="50">
                <div class="divide20"></div>
                <p>Более 45 лет занимаемся специальным сектором сельского хозяйства, разведением индейки, распространением инкубационных яиц индейки и суточных индюшат.</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="widget">
                <h3 class="section-title widget-title">Связаться</h3>
                <p>ООО «Бранко Рус»</p>
                <div class="contact-info">
                    <i class="icon-location"></i>422060, респ. Татарстан, пгт. Богатые Сабы, ул. Заводская, д. 19
                    <br>
                    <i class="icon-phone"></i>+ 421 903 703 265
                    <br>
                    <i class="icon-mail"></i>
                    <a href="mailto:sales@branko-nitra.eu">sales@branko-nitra.eu</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <p class="copyright pull-left">
        © ООО «Бранко Рус», 2021. Coded by <a href="http://it-pskov.ru/">IT Nova</a>.
    </p>
    <ul class="footer-menu pull-right">
        <li><a href="https://brankorus.ru">О нас</a></li>
        <li><a href="https://brankorus.ru/pages/incubation">Инкубирование</a></li>
        <li><a href="https://brankorus.ru/contact">Контакты</a></li>
        <li><a href="https://brankorus.ru/login">Войти</a></li>
    </ul>
</div>
</footer>

</div>

<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ mix('js/plugins.js') }}"></script>
<script src="{{ mix('js/jquery.themepunch.tools.min.js') }}"></script>


</body>
</html>
