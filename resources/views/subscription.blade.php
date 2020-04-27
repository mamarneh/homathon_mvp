@extends('layouts.app')

@section('content')
<div class="homepage">
    <div class="header mw-100" style="position: relative;">
        <div class="chatbot mw-100">
            <div class="navbar-container">
                <nav class="navbar navbar-expand-md navbar-light sticky-top">
                    <div class="logo">
                        <a href="/">
                            <img src="/public/img/logo.png" alt="حاكيني" height="40">
                        </a>
                    </div>
                    <div class="navbar mr-auto" id="navbarNav">
                        <ul class="navbar-nav text-center order-3">
                            <li class="nav-item ml-md-30 ">
                                <!--title="Dismissible popover"-->
                                <a tabindex="0" id="loginButton" class="loginButton nav-link p-10 p-md-0 py-md-9" data-html="true" role="button" data-toggle="popover" data-trigger="focus"
                                data-placement="bottom"
                                data-content='
                                <div class="loginContaier" style="width: 400px">
                                </div>
                                '>
                                <img src="/public/img/user_w.png" alt="حاكيني" class="pl-10">
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="container mw-100 aos-init aos-animate text-center" data-aos="fade-up">
                <div class="col-12 text-center innerTitle mb-40">اختر الاشتراك الذي يناسبك</div>
                <form method="POST" class="row" action="{{ url('submitSubscriptions') }}" >
                    @csrf
                    <div class="row col-12 col-md-6 m-auto">
                        <div class="col-12 col-md-6">
                            <div class="subscription col-12 text-right">
                                <div class="form-check m-5 rad">
                                    <label class="title form-check-label rad" for="subscription1">
                                        <input class="form-check-input required" required type="radio" name="subscription" id="subscription1" value="normal">
                                        <i></i>
                                        <span></span>
                                        اشتراك عادي
                                    </label>
                                </div>
                                <ul>
                                    <li class="option">
                                        تحدث مع تشاتبوت (chatbot) حاكيني الذكي للحصول على تمارين المساعدة الذاتية
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12  col-md-6">
                            <div class="subscription col-12 text-right">
                                <div class="form-check m-5 rad">
                                    <label class="title form-check-label rad" for="subscription2">
                                        <input class="form-check-input required" required type="radio" name="subscription" id="subscription2" value="normal">
                                        <i></i>
                                        <span></span>
                                        اشتراك ذهبي
                                    </label>
                                </div>
                                <ul>
                                    <li class="option">
                                        تحدث مع اخصائي نفسي بشكل مباشر متى تريد
                                    </li>
                                    <li class="option">
                                        تماريين المساعدة الذاتية مع chatbot حاكيني الذكي
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <div class="text-center col-12 col-md-7 ml-auto mr-auto mb-20">
                        <button type="submit" class="btn btn-primary white" style="min-width: 130px" onclick=""> المتابعة </button>
                    </div>
                </form>
            </div>

            <div class="" style="position: absolute;left: 0;bottom: 0;">
                <div class="mt-10 col-10 text-center">
                    <h1 class="white tachkili">صحة نفسية أفضل</h1>
                    <h4 class="white">صحة نفسية متاحة تلبي احتياجك في كل مكان وزمان!</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer mw-100">
        <div class="row text-right" id="startnow">
            <div class="col-12 mt-30 mb-30 text-center" id="social">
                <div class="m-auto col-10 col-md-6 emergency p-10">
                    إذا كنت في حالة تقتضي المساعدة الفورية وهناك خطورة على حياتك،<br> يرجى الاتصال مباشرة برقم الطوارئ الخاص بمنطقتك!
                </div>
            </div>
            <div class="col-12 social">
                <div class="m-auto col-12 col-md-6">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <a href="http://instaram.com" target="_blank" class="col-2">
                                <img src="/public/img/insta.png" alt="حاكيني" height="40">
                            </a>
                            <a href="http://youtube.com" target="_blank" class="col-2">
                                <img src="/public/img/youtube.png" alt="حاكيني" height="40">
                            </a>
                            <a href="http://facebook.com" target="_blank" class="col-2">
                                <img src="/public/img/facebook.png" alt="حاكيني" height="40">
                            </a>
                            <a href="http://twitter.com" target="_blank" class="col-2">
                                <img src="/public/img/twitter.png" alt="حاكيني" height="40">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-12 mt-10 mb-10 text-center">
                <div class="m-auto col-6 copyrights p-10">
                    جميع الحقوق محفوظة - حاكيني 2020
                </div>
            </div>
        </div>
    </div>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });

        function checkData() {
            if ($('#captcha:checkbox:checked').length > 0) {
                $('#captchaError').html('')
                return true;
            } else {
                $('#captchaError').html('الرجاء اختيار هذا الحقل');
            }
        }

        function checkSelection() {
            if ($('#serviceType1:checked').length > 0) {
                $('#serviceType1Area').show();
                $('#serviceType2Area').hide();
            } else {
                $('#serviceType1Area').hide();
            }
            if ($('#serviceType2:checked').length > 0) {
                $('#serviceType2Area').show();
                $('#serviceType1Area').hide();
            } else {
                $('#serviceType2Area').hide();
            }
        }

        function showRelatedArea(option) {
            $('.innerServiceArea').hide()
            $('.innerServiceArea' + option).show()
        }
        $(document).ready(function() {
            $('.innerServiceArea').hide()
            $('.innerServiceArea' + $("input[name=selfService]").val()).show()
            //checkSelection()

            $('[data-toggle="popover"]').popover({
                trigger: 'manual'
            })
            $('#loginButton').on('click', function () {
                $('#loginButton').popover('toggle')
                setTimeout(function () {
                    addLoginForm()
                }, 10)
            })
        })
        function addLoginForm() {
            $('.loginContaier').html($('.loginForm').html())
        }
    </script>
</div>
<div class="loginForm d-none">
    <div class="container mw-100">
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">
                <img src="/public/img/user.png" alt="حاكيني" width="60">
            </label>

            <div class="col-md-8 pt-20">
                <div class="name">{{ Auth::user()->name }}</div>
                <div class="email">{{ Auth::user()->email }}</div>
            </div>
        </div>
        <hr>
        <div class="container mw-100 logout">
                <a href="{{ route('logout') }}" class="logout">
                    <img src="/public/img/logout.png" alt="حاكيني" class="pl-10" height="20">
                تسجيل الخروج
                </a>
        </div>
        
    </div>
</div>
@endsection
