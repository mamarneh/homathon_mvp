@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="homepage">
    <div class="container header mw-100" style="position: relative;">
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

        <div class="container mw-100 " data-aos="fade-up">
            <form method="POST" class="row"  action="{{ url('saveSurveyData') }}" >
                @csrf
                <div class="mr-md-50 col-12 col-md-8 text-right">
                    <!--<img src="/public/img/our_services.png" alt="حاكيني" height="50">-->
                    <div class="mt-40">
                        <h5>قم بالإجابة عن الأسئلة التالية لتساعدنا بتحديد الخدمة الأنسب لك</h5>
                    </div>
                    <!--<div class="form-check m-5 rad">
                        <label class="form-check-label rad" for="serviceType1">
                            <input class="form-check-input" onclick="checkSelection()" required type="radio" name="serviceType" id="serviceType1" value="option1">
                            <i></i>
                            <span></span>
                            دعنا نجد لك الأخصائي الملائم لك
                        </label>
                    </div>-->
                    <div style="" id="serviceType1Area">
                        <!--<span class="grey hint">ستظهر لديك بعض الأسئلة أجب عليها لكي تساعدنا في ايجاد الأخصائي المناسب لك</span>-->
                        <div class="question">
                            <div id="carouselExampleIndicators" class="slider col-12 mr-auto ml-auto row carousel fadeIn">
                                
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <label for="study"> المستوى الأكاديمي  </label>
                                        <select name="study" required class="form-control" id="study" onchange="increaseQuestion(this.value)" placeholder="">
                                            <option value="" disabled selected>إختر</option>
                                            <option value="1">المرحلة المدرسية</option>
                                            <option value="2">دبلوم</option>
                                            <option value="2">بكالوريوس جامعي</option>
                                            <option value="2">دراسات عليا</option>
                                        </select>
                                    </div>
                                    <div class="carousel-item">
                                        <label for="career"> المهنة  </label>
                                        <input type="text" onchange="increaseQuestion(this.value)" required name="career" class="form-control" id="career">
                                    </div>
                                    <div class="carousel-item">
                                        <label for="quick_solution_off"> هل تبحث عن حل مستعجل؟  </label>
                                        <div class="switch" id="quick_solution">
                                            <input type="radio" required onchange="increaseQuestion(this.value)" class="switch-input" name="quick_solution" value="off" id="quick_solution_off">
                                            <label for="quick_solution_off" class="switch-label switch-label-off">لا</label>
                                            <input type="radio" required  onchange="increaseQuestion(this.value)"class="switch-input" name="quick_solution" value="on" id="quick_solution_on">
                                            <label for="quick_solution_on" class="switch-label switch-label-on">نعم</label>
                                            <span class="switch-selection"></span>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <label for="question4_off"> هل لديك اضطرابات جسدية أو صحية؟  </label>
                                        <div class="switch" id="question4">
                                            <input type="radio" required onchange="increaseQuestion(this.value)" class="switch-input" name="question4" value="off" id="question4_off">
                                            <label for="question4_off" class="switch-label switch-label-off">لا</label>
                                            <input type="radio" required onchange="increaseQuestion(this.value)" class="switch-input" name="question4" value="on" id="question4_on">
                                            <label for="question4_on" class="switch-label switch-label-on">نعم</label>
                                            <span class="switch-selection"></span>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <label for="question5_off"> هل تتعاطى الأدوية؟  </label>
                                        <div class="switch" id="question5">
                                            <input type="radio" required onchange="increaseQuestion(this.value)" class="switch-input" name="question5" value="off" id="question5_off">
                                            <label for="question5_off" class="switch-label switch-label-off">لا</label>
                                            <input type="radio" required onchange="increaseQuestion(this.value)" class="switch-input" name="question5" value="on" id="question5_on">
                                            <label for="question5_on" class="switch-label switch-label-on">نعم</label>
                                            <span class="switch-selection"></span>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <label for="question6_off"> هل حصلت على خدمات الصحة النفسية في السابق؟  </label>
                                        <div class="switch" id="question6">
                                            <input type="radio" required onchange="increaseQuestion(this.value)" class="switch-input" name="question6" value="off" id="question6_off">
                                            <label for="question6_off" class="switch-label switch-label-off">لا</label>
                                            <input type="radio" required onchange="increaseQuestion(this.value)" class="switch-input" name="question6" value="on" id="question6_on">
                                            <label for="question6_on" class="switch-label switch-label-on">نعم</label>
                                            <span class="switch-selection"></span>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <label for="question7_off"> هل تستخدم الكحول أو المخدرات؟  </label>
                                        <div class="switch" id="question7">
                                            <input type="radio" required onchange="increaseQuestion(this.value)" class="switch-input" name="question7" value="off" id="question7_off">
                                            <label for="question7_off" class="switch-label switch-label-off">لا</label>
                                            <input type="radio" required onchange="increaseQuestion(this.value)" class="switch-input" name="question7" value="on" id="question7_on">
                                            <label for="question7_on" class="switch-label switch-label-on">نعم</label>
                                            <span class="switch-selection"></span>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <label for="question8_off">هل عانيتَ او تعاني من أعراض صدمة سابقا أو حاليا؟  </label>
                                        <div class="switch" id="question8">
                                            <input type="radio" required onchange="increaseQuestion(this.value)" class="switch-input" name="question8" value="off" id="question8_off" >
                                            <label for="question8_off" class="switch-label switch-label-off">لا</label>
                                            <input type="radio" required onchange="increaseQuestion(this.value)" class="switch-input" name="question8" value="on" id="question8_on">
                                            <label for="question8_on" class="switch-label switch-label-on">نعم</label>
                                            <span class="switch-selection"></span>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <label for="question9_off"> هل عانيتَ او تعاني من ظروف ضاغطة سابقا أو حاليا؟  </label>
                                        <div class="switch" id="question9">
                                            <input type="radio" required onchange="increaseQuestion(this.value)" class="switch-input" name="question9" value="off" id="question9_off">
                                            <label for="question9_off" class="switch-label switch-label-off">لا</label>
                                            <input type="radio" required onchange="increaseQuestion(this.value)" class="switch-input" name="question9" value="on" id="question9_on">
                                            <label for="question9_on" class="switch-label switch-label-on">نعم</label>
                                            <span class="switch-selection"></span>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <label for="question10"> صف شكواك الرئيسية بجملة واحدة  </label>
                                        <input type="text" onchange="increaseQuestion(this.value)" required name="question10" class="form-control" id="question10">
                                    </div>
                                    <div class="carousel-item ">
                                        <label for="serviceType2Area">ما هي حالتك النفسية اليوم؟</label>
                                        <div style="" class="serviceArea2" id="serviceType2Area">
                                            <label class="selfService" for="selfService1">
                                                <input class="d-none" id="selfService1" onchange="showRelatedArea('1')" type="radio" checked name="selfService" value="1">
                                                <span>القلق</span>
                                            </label>
                                            <label class="selfService" for="selfService2" onclick="showRelatedArea('2')">
                                                <input class="d-none" id="selfService2" onchange="showRelatedArea('2')" type="radio" name="selfService" value="2">
                                                <span>اضطرابات نفسية</span>
                                            </label>
                                            <label class="selfService" for="selfService3" onclick="showRelatedArea('3')">
                                                <input class="d-none" id="selfService3"  type="radio" name="selfService" value="3">
                                                <span>الإدمان</span>
                                            </label>
                                            <label class="selfService" for="selfService4" onclick="showRelatedArea('4')">
                                                <input class="d-none" id="selfService4"  type="radio" name="selfService" value="4">
                                                <span>علاقات أسرية</span>
                                            </label>
                                            <div class="container mw-100">
                                                <div class="innerServiceArea innerServiceArea1">
                                                    <label class="innerSelfService" for="innerSelfService1">
                                                    <input class="d-none" id="innerSelfService1"  type="radio" checked name="innerSelfService" value="1">
                                                    <span>قلق عام</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService2">
                                                    <input class="d-none" id="innerSelfService2"  type="radio" name="innerSelfService" value="1">
                                                    <span>الهلع</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService3">
                                                    <input class="d-none" id="innerSelfService3"  type="radio" name="innerSelfService" value="1">
                                                    <span>الرهاب (ايبوفلا)</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService4">
                                                    <input class="d-none" id="innerSelfService4"  type="radio" name="innerSelfService" value="1">
                                                    <span>القلق الاجتماعي</span>
                                                </label>
                                                </div>
                                                <div class="innerServiceArea innerServiceArea2">
                                                    <label class="innerSelfService" for="innerSelfService21">
                                                    <input class="d-none" id="innerSelfService21"  type="radio" checked name="innerSelfService2" value="1">
                                                    <span>الاكتئاب</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService22">
                                                    <input class="d-none" id="innerSelfService22"  type="radio" name="innerSelfService2" value="1">
                                                    <span>اضطرابات الأكل</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService23">
                                                    <input class="d-none" id="innerSelfService23"  type="radio" name="innerSelfService2" value="1">
                                                    <span>الفصام (السكيزوفرينيا)</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService24">
                                                    <input class="d-none" id="innerSelfService24"  type="radio" name="innerSelfService2" value="1">
                                                    <span>الوسواس القهري</span>
                                                </label>
                                                    <label class="innerSelfService" for="innerSelfService25">
                                                    <input class="d-none" id="innerSelfService25"  type="radio" name="innerSelfService2" value="1">
                                                    <span>اضظرابات ما بعد الصدمة</span>
                                                </label>
                                                    <label class="innerSelfService" for="innerSelfService26">
                                                    <input class="d-none" id="innerSelfService26"  type="radio" name="innerSelfService2" value="1">
                                                    <span>الاضطرابات التحولية</span>
                                                </label>
                                                </div>
                                                <div class="innerServiceArea innerServiceArea3">
                                                    <label class="innerSelfService" for="innerSelfService31">
                                                    <input class="d-none" id="innerSelfService31"  type="radio" checked name="innerSelfService3" value="1">
                                                    <span>إدمان على الكحول و المخدرات</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService32">
                                                    <input class="d-none" id="innerSelfService32"  type="radio" name="innerSelfService3" value="1">
                                                    <span>ادمان العلاقات الجنسية</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService33">
                                                    <input class="d-none" id="innerSelfService33"  type="radio" name="innerSelfService3" value="1">
                                                    <span>إدمان وسائل التواصل الإجتماعي</span>
                                                </label>
                                                </div>
                                                <div class="innerServiceArea innerServiceArea4">
                                                    <label class="innerSelfService" for="innerSelfService41">
                                                    <input class="d-none" id="innerSelfService41"  type="radio" checked name="innerSelfService4" value="1">
                                                    <span>علاقات زوجية</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService42">
                                                    <input class="d-none" id="innerSelfService42"  type="radio" name="innerSelfService4" value="1">
                                                    <span>علاقات جنسية</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService43">
                                                    <input class="d-none" id="innerSelfService43"  type="radio" name="innerSelfService4" value="1">
                                                    <span>أطفال</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService44">
                                                    <input class="d-none" id="innerSelfService44"  type="radio" name="innerSelfService4" value="1">
                                                    <span>مراهقين</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService45">
                                                    <input class="d-none" id="innerSelfService45"  type="radio" name="innerSelfService5" value="1">
                                                    <span>الوالدية</span>
                                                </label>
                                                </div>
                                            </div>
                                            <label class="selfService" for="selfService5" onclick="showRelatedArea('5')">
                                                <input class="d-none" id="selfService5"  type="radio" name="selfService" value="5">
                                                <span>النوع الاجتماعي</span>
                                            </label>
                                            <label class="selfService" for="selfService6" onclick="showRelatedArea('6')">
                                                <input class="d-none" id="selfService6"  type="radio" name="selfService" value="6">
                                                <span>علاقات عاطفية</span>
                                            </label>
                                            <label class="selfService" for="selfService7" onclick="showRelatedArea('7')">
                                                <input class="d-none" id="selfService7"  type="radio" name="selfService" value="7">
                                                <span>مشاكل دراسية و مشاكل العمل</span>
                                            </label>
                                            <div class="container mw-100">
                                                <div class="innerServiceArea innerServiceArea5">
                                                    <label class="innerSelfService" for="innerSelfService51">
                                                    <input class="d-none" id="innerSelfService51"  type="radio" checked name="innerSelfService5" value="1">
                                                    <span>إضطراب الهوية الجنسية</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService52">
                                                    <input class="d-none" id="innerSelfService52"  type="radio" name="innerSelfService5" value="2">
                                                    <span>رفض مجتمعي بناء على النوع</span>
                                                </label>
                                                </div>
                                                <div class="innerServiceArea innerServiceArea6">
                                                    <label class="innerSelfService" for="innerSelfService61">
                                                    <input class="d-none" id="innerSelfService61"  type="radio" checked name="innerSelfService6" value="1">
                                                    <span>ألم الانفصال</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService62">
                                                    <input class="d-none" id="innerSelfService62"  type="radio" name="innerSelfService6" value="2">
                                                    <span>بناء علاقة صحية</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService63">
                                                    <input class="d-none" id="innerSelfService63"  type="radio" name="innerSelfService6" value="3">
                                                    <span>التخلص من علاقة سامة</span>
                                                </label>
                                                </div>
                                                <div class="innerServiceArea innerServiceArea7">
                                                    <label class="innerSelfService" for="innerSelfService71">
                                                    <input class="d-none" id="innerSelfService71"  type="radio" checked name="innerSelfService7" value="1">
                                                    <span>صعوبات أكاديمية</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService72">
                                                    <input class="d-none" id="innerSelfService72"  type="radio" name="innerSelfService7" value="2">
                                                    <span>صعوبات الاندماج مع المحيط</span>
                                                </label>
                                                    <span class="spacer"></span>
                                                    <label class="innerSelfService" for="innerSelfService73">
                                                    <input class="d-none" id="innerSelfService73"  type="radio" name="innerSelfService7" value="3">
                                                    <span>صعوبات التعامل مع المدراء</span>
                                                </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <ol class="carousel-indicators m-auto mb-5 p-20">
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Prev</span>
                                    </a>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!--<div class="form-check m-5 rad">
                        <label class="form-check-label rad" for="serviceType2">
                        <input class="form-check-input" onclick="checkSelection()" required type="radio" name="serviceType" id="serviceType2" value="option2">
                        <i></i>
                        <span></span>
                        لست جاهزا للتحدث مع أخصائي؟ سجل لخدمة المساعدة الذاتية
                    </label>
                    </div>-->
                    
                </div>
                <div class="mr-md-50 col-12 col-md-8 text-center mt-20" style="max-width:650px;">
                    <button type="submit" class="btn btn-primary white" onclick=""> تأكيد التسجيل </button>
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
    <div class="container footer mw-100">
        <div class="row text-right" id="startnow" >
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

            $('.carousel').carousel({
                interval: false
            })
            
        })

        function increaseQuestion() {
            $('.carousel').carousel('next')
        }
        function addLoginForm() {
            $('.loginContaier').html($('.loginForm').html())
        }
        
      $('form input').keydown(function (e) {
    if (e.keyCode == 13) {

        e.preventDefault();
        return false;
    }
});

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
