@extends('layout')

@section('title', 'Контакты')

@section('main_content')
    <div class="offset"></div>
    <div class="white-wrapper">
        <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2231.418914761404!2d50.446987516264194!3d55.99409608061857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415f23a39f86eebb%3A0x3daaab89949747d2!2z0JfQsNCy0L7QtNGB0LrQsNGPINGD0LsuLCAxOSwg0JHQvtCz0LDRgtGL0LUg0KHQsNCx0YssINCg0LXRgdC_LiDQotCw0YLQsNGA0YHRgtCw0L0sIDQyMjA2MA!5e0!3m2!1sru!2sru!4v1649748443098!5m2!1sru!2sru" width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- /.map-wrapper -->
    </div>

    <div class="light-wrapper">
        <div class="container inner">
            <div class="thin">
                <div class="section-title text-center">
                    <h3>Связаться</h3>
                    <p class="lead">Не стесняйтесь писать нам</p>
                </div>
                <ul class="contact-info text-center">
                    <li><i class="icon-location"></i>422060, респ. Татарстан, пгт. Богатые Сабы, ул. Заводская, д. 19</li>
                    <li><i class="icon-phone"></i>+ 421 903 703 265</li>
                    <li><i class="icon-mail"></i><a href="sales@branko-nitra.eu">sales@branko-nitra.eu</a> </li>
                </ul>
                <div class="divide50"></div>
                <div class="form-container">
                    <form action="contact/send" method="post" class="vanilla vanilla-form" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <label>
                                        <input type="text" name="name" placeholder="Ваше имя" required="required">
                                        <i class="icon-user"></i></label>
                                </div>
                                <!--/.form-field -->
                            </div>
                            <!--/column -->
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <label>
                                        <input type="email" name="email" placeholder="Электронная почта" required="required">
                                        <i class="icon-mail-alt"></i></label>
                                </div>
                                <!--/.form-field -->
                            </div>
                            <!--/column -->
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <label>
                                        <input type="tel" name="tel" placeholder="Телефон">
                                        <i class="icon-phone"></i></label>
                                </div>
                                <!--/.form-field -->
                            </div>
                            <!--/column -->
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <label class="custom-select">
                                        <select name="subject" required="required">
                                            <option value="">Выберите тему</option>
                                            <option value="Сотрудничество">Сотрудничество</option>
                                            <option value="Поддержка">Поддержка</option>
                                        </select>
                                        <i class="icon-ok"></i><span><!-- fake select handler --></span> </label>
                                </div>
                                <!--/.form-field -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                        <textarea name="message" placeholder="Напишите Ваше сообщение сюда..."></textarea>

                        <input type="submit" class="btn" value="Отправить" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
                        <footer class="notification-box"></footer>

                    </form>
                    <!--/.vanilla-form -->

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <!--/.form-container -->


            </div>
            <!-- /.container -->
        </div>
        <!-- /.light-wrapper -->
@endsection
