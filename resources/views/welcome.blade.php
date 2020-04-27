@extends('layouts.app')
@section('content')
<div class="navbar-container">
    <nav class="navbar navbar-expand-md navbar-light sticky-top">
        <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="logo">
            <a href="./index.html">
                <img src="/public/img/logo.png" alt="حاكيني" height="40">
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbarNav">
            <ul class="navbar-nav text-center order-1">
                <li class="nav-item ml-md-30">
                    <a class="nav-link p-10 p-md-0 py-md-9" href="#startnow">ابدأ الآن</a>
                </li>
                <li class="nav-item ml-md-30">
                    <a class="nav-link p-10 p-md-0 py-md-9" href="#howitworks">كيف تعمل حاكيني؟</a>
                </li>
                <li class="nav-item ml-md-30">
                    <a class="nav-link p-10 p-md-0 py-md-9" href="#why">لماذا حاكيني؟</a>
                </li>
                <li class="nav-item ml-md-30">
                    <a class="nav-link p-10 p-md-0 py-md-9" href="#social">ثقافة نفسية</a>
                </li>
                @if (Auth::guest())
                @else
                    <li class="nav-item ml-md-30">
                        <a class="nav-link p-10 p-md-0 py-md-9" href="{{ url("home") }}">الصفحة الشخصية</a>
                    </li>
                @endif
            </ul>
            <form action="#" class="ml-20 order-2 mr-auto d-none">
                <div class="search-container search">
                    <img src="/public/img/search.png" class="search search-icon" width="30">
                    <input class="form-control pr-25 search-input" type="text" placeholder="">
                </div>
            </form>
            <ul class="navbar-nav text-center mr-auto order-3">
                <li class="nav-item ml-md-30 ">
                    @if (Auth::guest())
                        <a tabindex="0" id="loginButton" class="loginButton nav-link p-10 p-md-0 py-md-9" data-html="true" role="button" data-toggle="popover" data-trigger="focus"
                            data-placement="bottom"
                            data-content='
                                <div class="loginContaier" style="width: 400px">
                            </div>
                                '>
                                مرحبا! ادخل
                        </a>
                    @else
                        <li><a class="nav-link p-10 p-md-0 py-md-9" href="{{ url("logout") }}">تسجيل الخروج</a></li>
                    @endif
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="container header mw-100">

    <div class="col-12 p-0 align-items-center">
        <div class="float-left mt-15 d-none d-sm-none" data-sr-id="6">
            <form action="#" class="ml-20 float-right">
                <div class="form-group search-container search" data-sr-id="7">
                    <img src="/public/img/search.png" class="search search-icon" width="10">
                    <input class="form-control pr-25" type="text" placeholder="">
                </div>
            </form>
            <a href="./index.htm#" class="float-left lang">
                English
            </a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="row" data-aos="fade-up">
        <div class="col-1"></div>
        <div class="mt-10 mt-md-100 pt-lg-60 col-7 col-lg-5 col-md-8 text-right mr-20 mb-md-100">
            <h1 class="tachkili title">صحة نفسية أفضل</h1>
            <h3 class="innerTitle">صحة نفسية متاحة تلبي احتياجك في كل مكان وزمان!</h3>
            <div class="mt-md-100 mr-20">
                <button class="btn startnow white" onclick="window.location.href = '#startnow'">ابدأ الآن</button>
            </div>
        </div>
    </div>
    <div class="row text-center mt-30" id="howitworks">
        <div class="col-12" data-aos="fade-up">
            <img class="col-8 col-lg-4 col-md-6" src="/public/img/how.png" alt="كيف تعمل حاكيني">
        </div>
        <div class="col-12" data-aos="fade-up">
            <img width="40" class="mt-20 mb-20" src="/public/img/one.png">
            <br>
            <h3 class="col-12 innerTitle">دعنا نحدد ما هي حاجتك</h3>
            <br>
            <img class="col-6 col-lg-3 col-md-4" src="/public/img/step1_icon.png">
            <h5 class="mt-20">قم بتعبئة إستمارة حاكيني الذكية من خلال الإجابة عن بعض الأسئلة</h4>
        </div>
        <div class="col-12 text-center" data-aos="fade-up">
            <img width="40" class="mt-20 mb-20" src="/public/img/two.png">
            <br>
            <h3 class="col-4 innerTitle m-auto">تلقى الخدمة بحسب ما تراه مناسبا لك</h3>
            <br>
            <img class="col-8 col-lg-5 col-md-6 mb-20" src="/public/img/step2_icon.png">
            <h5 class="col-8 col-lg-5 col-md-6 m-auto">اختر ما بين خدمة المساعدة الذاتية، أو التحدث مع أخصائي نفسي على
            </h5>
        </div>
        <div class="col-12 mb-20" data-aos="fade-up">
            <img width="40" class="mt-20 mb-20" src="/public/img/three.png">
            <br>
            <h3 class="col-12 innerTitle">دعنا نحدد ما هي حاجتك</h3>
            <br>
            <img class="col-8 col-lg-3 col-md-4 mb-20" src="/public/img/step3_icon.png">
            <h5 class="col-8 col-lg-3 col-md-4 m-auto">تلقى الخدمة متى تريد و أين تريد</h5>
        </div>

    </div>
    <div class="why row" id="why">
        <div class="col-12 mt-20 mb-20 text-center" data-aos="fade-up">
            <img height="130" class="mb-20" src="/public/img/why_7akini.png">
        </div>
        <div class="row m-auto col-10 col-lg-7 text-center" data-aos="fade-up">
            <div class="col-6 col-md-3 col-lg-3">
                <img height="60" class="mb-20" src="/public/img/why_1.png">
                <h5 class="">الحصول على خدمة مناسبة وعالية الجودة</h5>
            </div>
            <div class="col-6 col-md-3 col-lg-3" data-aos="fade-up">
                <img height="60" class="mb-20" src="/public/img/why_2.png">
                <h5 class="">المحافظة على السرية التامة لمستخدمي حاكيني</h5>
            </div>
            <div class="col-6 col-md-3 col-lg-3" data-aos="fade-up">
                <img height="60" class="mb-20" src="/public/img/why_3.png">
                <h5 class="">تلقى خدمة متى تريد ومن أين تريد</h5>
            </div>
            <div class="col-6 col-md-3 col-lg-3" data-aos="fade-up">
                <img height="60" class="mb-20" src="/public/img/why_4.png">
                <h5 class="">احصل على الخدمة بشكل دوري وثابت</h5>
            </div>
        </div>
        <div class="m-auto col-10 col-sm-8 text-center" data-aos="fade-up">
            <!--<div class="slider mt-20 mb-20 col-12 mr-auto ml-auto row">
                <div class="mb-20 mt-20 col-8 text-center">
                    <span class="">
                        لا تريد التحدث مع اخصائي في الوقت الحالي؟
                        <br>
                        ابدا بالحصول على تمارين ونصائح المساعدة الذاتية دون الحاجة للتكلم مع اخصائي نفسي بشكل مباشر!
                    </span>
                </div>
                <div class="mb-20 mt-20 col-4 text-center">
                    <img height="90" src="/public/img/slider_1.png">
                </div>
            </div>-->
            <div id="carouselExampleIndicators" class="slider mt-20 mb-20 col-12 mr-auto ml-auto row carousel slide" data-ride="carousel">
                <ol class="carousel-indicators mb-5 p-0">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="mb-20 mt-20 col-8 text-center">
                                <span class="">
                                لا تريد التحدث مع اخصائي في الوقت الحالي؟
                                <br>
                                ابدا بالحصول على تمارين ونصائح المساعدة الذاتية دون الحاجة للتكلم مع اخصائي نفسي بشكل مباشر!
                            </span>
                            </div>
                            <div class="mb-20 mt-20 col-4 text-center">
                                <img height="90" src="/public/img/slider_1.png">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="mb-20 mt-20 col-8 text-center">
                                <span class="">
                                لا تريد التحدث مع اخصائي في الوقت الحالي؟
                                <br>
                                ابدا بالحصول على تمارين ونصائح المساعدة الذاتية دون الحاجة للتكلم مع اخصائي نفسي بشكل مباشر!
                            </span>
                            </div>
                            <div class="mb-20 mt-20 col-4 text-center">
                                <img height="90" src="/public/img/slider_1.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row footer text-right" id="startnow">
        <div class="col-12 mt-40">
            <div class="m-auto col-12 col-md-6 contact">
                <div class="col-12 text-center mb-20" data-aos="fade-up">
                    <h3 style="display: inline-block">التسجيل في </h3>
                    <img src="/public/img/logo.png" alt="حاكيني" height="40">
                </div>
                <form method="POST" action="{{ route('register') }}" onsubmit="checkData()" class="row col-12 mb-20" data-aos="fade-up">
                    @csrf
                    <div class="col-12 col-md-6" data-aos="fade-up">
                        <div class="form-group">
                            <label for="name">اسم المستخدم</label>
                            <input name="name" type="text" required class="form-control" id="name" placeholder="">
                            <label for="gender">الجنس</label>
                            <select name="gender" class="form-control" required id="gender" placeholder="">
                                <option value="" disabled selected>إختر</option>
                                <option value="m">ذكر</option>
                                <option value="f">أنثى</option>
                            </select>
                            <label for="country">الدولة</label>
                            <select name="country" class="form-control" required id="country" placeholder="">
                                <option value="" disabled selected>إختر</option>
                                <option value="أفغانستان">أفغانستان</option>
                                <option value="ألبانيا">ألبانيا</option>
                                <option value="الجزائر">الجزائر</option>
                                <option value="أندورا">أندورا</option>
                                <option value="أنغولا">أنغولا</option>
                                <option value="أنتيغوا وباربودا">أنتيغوا وباربودا</option>
                                <option value="الأرجنتين">الأرجنتين</option>
                                <option value="أرمينيا">أرمينيا</option>
                                <option value="أستراليا">أستراليا</option>
                                <option value="النمسا">النمسا</option>
                                <option value="أذربيجان">أذربيجان</option>
                                <option value="البهاما">البهاما</option>
                                <option value="البحرين">البحرين</option>
                                <option value="بنغلاديش">بنغلاديش</option>
                                <option value="باربادوس">باربادوس</option>
                                <option value="بيلاروسيا">بيلاروسيا</option>
                                <option value="بلجيكا">بلجيكا</option>
                                <option value="بليز">بليز</option>
                                <option value="بنين">بنين</option>
                                <option value="بوتان">بوتان</option>
                                <option value="بوليفيا">بوليفيا</option>
                                <option value="البوسنة والهرسك ">البوسنة والهرسك </option>
                                <option value="بوتسوانا">بوتسوانا</option>
                                <option value="البرازيل">البرازيل</option>
                                <option value="بروناي">بروناي</option>
                                <option value="بلغاريا">بلغاريا</option>
                                <option value="بوركينا فاسو ">بوركينا فاسو </option>
                                <option value="بوروندي">بوروندي</option>
                                <option value="كمبوديا">كمبوديا</option>
                                <option value="الكاميرون">الكاميرون</option>
                                <option value="كندا">كندا</option>
                                <option value="الرأس الأخضر">الرأس الأخضر</option>
                                <option value="جمهورية أفريقيا الوسطى ">جمهورية أفريقيا الوسطى </option>
                                <option value="تشاد">تشاد</option>
                                <option value="تشيلي">تشيلي</option>
                                <option value="الصين">الصين</option>
                                <option value="كولومبيا">كولومبيا</option>
                                <option value="جزر القمر">جزر القمر</option>
                                <option value="كوستاريكا">كوستاريكا</option>
                                <option value="ساحل العاج">ساحل العاج</option>
                                <option value="كرواتيا">كرواتيا</option>
                                <option value="كوبا">كوبا</option>
                                <option value="قبرص">قبرص</option>
                                <option value="التشيك">التشيك</option>
                                <option value="جمهورية الكونغو الديمقراطية">جمهورية الكونغو الديمقراطية</option>
                                <option value="الدنمارك">الدنمارك</option>
                                <option value="جيبوتي">جيبوتي</option>
                                <option value="دومينيكا">دومينيكا</option>
                                <option value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>
                                <option value="تيمور الشرقية ">تيمور الشرقية </option>
                                <option value="الإكوادور">الإكوادور</option>
                                <option value="مصر">مصر</option>
                                <option value="السلفادور">السلفادور</option>
                                <option value="غينيا الاستوائية">غينيا الاستوائية</option>
                                <option value="إريتريا">إريتريا</option>
                                <option value="إستونيا">إستونيا</option>
                                <option value="إثيوبيا">إثيوبيا</option>
                                <option value="فيجي">فيجي</option>
                                <option value="فنلندا">فنلندا</option>
                                <option value="فرنسا">فرنسا</option>
                                <option value="الغابون">الغابون</option>
                                <option value="غامبيا">غامبيا</option>
                                <option value="جورجيا">جورجيا</option>
                                <option value="ألمانيا">ألمانيا</option>
                                <option value="غانا">غانا</option>
                                <option value="اليونان">اليونان</option>
                                <option value="جرينادا">جرينادا</option>
                                <option value="غواتيمالا">غواتيمالا</option>
                                <option value="غينيا">غينيا</option>
                                <option value="غينيا بيساو">غينيا بيساو</option>
                                <option value="غويانا">غويانا</option>
                                <option value="هايتي">هايتي</option>
                                <option value="هندوراس">هندوراس</option>
                                <option value="المجر">المجر</option>
                                <option value="آيسلندا">آيسلندا</option>
                                <option value="الهند">الهند</option>
                                <option value="إندونيسيا">إندونيسيا</option>
                                <option value="إيران">إيران</option>
                                <option value="العراق">العراق</option>
                                <option value="جمهورية أيرلندا ">جمهورية أيرلندا </option>
                                <option value="فلسطين">فلسطين</option>
                                <option value="إيطاليا">إيطاليا</option>
                                <option value="جامايكا">جامايكا</option>
                                <option value="اليابان">اليابان</option>
                                <option value="الأردن">الأردن</option>
                                <option value="كازاخستان">كازاخستان</option>
                                <option value="كينيا">كينيا</option>
                                <option value="كيريباتي">كيريباتي</option>
                                <option value="الكويت">الكويت</option>
                                <option value="قرغيزستان">قرغيزستان</option>
                                <option value="لاوس">لاوس</option>
                                <option value="لاوس">لاوس</option>
                                <option value="لاتفيا">لاتفيا</option>
                                <option value="لبنان">لبنان</option>
                                <option value="ليسوتو">ليسوتو</option>
                                <option value="ليبيريا">ليبيريا</option>
                                <option value="ليبيا">ليبيا</option>
                                <option value="ليختنشتاين">ليختنشتاين</option>
                                <option value="ليتوانيا">ليتوانيا</option>
                                <option value="لوكسمبورغ">لوكسمبورغ</option>
                                <option value="مدغشقر">مدغشقر</option>
                                <option value="مالاوي">مالاوي</option>
                                <option value="ماليزيا">ماليزيا</option>
                                <option value="جزر المالديف">جزر المالديف</option>
                                <option value="مالي">مالي</option>
                                <option value="مالطا">مالطا</option>
                                <option value="جزر مارشال">جزر مارشال</option>
                                <option value="موريتانيا">موريتانيا</option>
                                <option value="موريشيوس">موريشيوس</option>
                                <option value="المكسيك">المكسيك</option>
                                <option value="مايكرونيزيا">مايكرونيزيا</option>
                                <option value="مولدوفا">مولدوفا</option>
                                <option value="موناكو">موناكو</option>
                                <option value="منغوليا">منغوليا</option>
                                <option value="الجبل الأسود">الجبل الأسود</option>
                                <option value="المغرب">المغرب</option>
                                <option value="موزمبيق">موزمبيق</option>
                                <option value="بورما">بورما</option>
                                <option value="ناميبيا">ناميبيا</option>
                                <option value="ناورو">ناورو</option>
                                <option value="نيبال">نيبال</option>
                                <option value="هولندا">هولندا</option>
                                <option value="نيوزيلندا">نيوزيلندا</option>
                                <option value="نيكاراجوا">نيكاراجوا</option>
                                <option value="النيجر">النيجر</option>
                                <option value="نيجيريا">نيجيريا</option>
                                <option value="كوريا الشمالية ">كوريا الشمالية </option>
                                <option value="النرويج">النرويج</option>
                                <option value="سلطنة عمان">سلطنة عمان</option>
                                <option value="باكستان">باكستان</option>
                                <option value="بالاو">بالاو</option>
                                <option value="بنما">بنما</option>
                                <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
                                <option value="باراغواي">باراغواي</option>
                                <option value="بيرو">بيرو</option>
                                <option value="الفلبين">الفلبين</option>
                                <option value="بولندا">بولندا</option>
                                <option value="البرتغال">البرتغال</option>
                                <option value="قطر">قطر</option>
                                <option value="جمهورية الكونغو">جمهورية الكونغو</option>
                                <option value="جمهورية مقدونيا">جمهورية مقدونيا</option>
                                <option value="رومانيا">رومانيا</option>
                                <option value="روسيا">روسيا</option>
                                <option value="رواندا">رواندا</option>
                                <option value="سانت كيتس ونيفيس">سانت كيتس ونيفيس</option>
                                <option value="سانت لوسيا">سانت لوسيا</option>
                                <option value="سانت فنسينت والجرينادينز">سانت فنسينت والجرينادينز</option>
                                <option value="ساموا">ساموا</option>
                                <option value="سان مارينو">سان مارينو</option>
                                <option value="ساو تومي وبرينسيب">ساو تومي وبرينسيب</option>
                                <option value="السعودية">السعودية</option>
                                <option value="السنغال">السنغال</option>
                                <option value="صربيا">صربيا</option>
                                <option value="سيشيل">سيشيل</option>
                                <option value="سيراليون">سيراليون</option>
                                <option value="سنغافورة">سنغافورة</option>
                                <option value="سلوفاكيا">سلوفاكيا</option>
                                <option value="سلوفينيا">سلوفينيا</option>
                                <option value="جزر سليمان">جزر سليمان</option>
                                <option value="الصومال">الصومال</option>
                                <option value="جنوب أفريقيا">جنوب أفريقيا</option>
                                <option value="كوريا الجنوبية">كوريا الجنوبية</option>
                                <option value="جنوب السودان">جنوب السودان</option>
                                <option value="إسبانيا">إسبانيا</option>
                                <option value="سريلانكا">سريلانكا</option>
                                <option value="السودان">السودان</option>
                                <option value="سورينام">سورينام</option>
                                <option value="سوازيلاند">سوازيلاند</option>
                                <option value="السويد">السويد</option>
                                <option value="سويسرا">سويسرا</option>
                                <option value="سوريا">سوريا</option>
                                <option value="طاجيكستان">طاجيكستان</option>
                                <option value="تنزانيا">تنزانيا</option>
                                <option value="تايلاند">تايلاند</option>
                                <option value="توغو">توغو</option>
                                <option value="تونجا">تونجا</option>
                                <option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>
                                <option value="تونس">تونس</option>
                                <option value="تركيا">تركيا</option>
                                <option value="تركمانستان">تركمانستان</option>
                                <option value="توفالو">توفالو</option>
                                <option value="أوغندا">أوغندا</option>
                                <option value="أوكرانيا">أوكرانيا</option>
                                <option value="الإمارات العربية المتحدة">الإمارات العربية المتحدة</option>
                                <option value="المملكة المتحدة">المملكة المتحدة</option>
                                <option value="الولايات المتحدة">الولايات المتحدة</option>
                                <option value="أوروغواي">أوروغواي</option>
                                <option value="أوزبكستان">أوزبكستان</option>
                                <option value="فانواتو">فانواتو</option>
                                <option value="فنزويلا">فنزويلا</option>
                                <option value="فيتنام">فيتنام</option>
                                <option value="اليمن">اليمن</option>
                                <option value="زامبيا">زامبيا</option>
                                <option value="زيمبابوي">زيمبابوي</option>
                            </select>
                            <label for="year">سنة الولادة</label>
                            <input type="date" name="dob" class="form-control" required id="year" placeholder="">
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 service" data-aos="fade-up">
                        <label for="email">البريد الالكتروني</label>
                        <input name="email" type="email" required class="form-control" id="email" placeholder="">
                        <label for="password">كلمة المرور</label>
                        <input name="password" type="password" required class="form-control" id="password" placeholder="">
                        <!--<h4 class="btn btn-primary">نوع الخدمة</h4>
                        <div class="form-check m-5 rad">
                            <label class="form-check-label rad" for="serviceType1">
                                <input class="form-check-input required" required type="radio" name="serviceType" id="serviceType1" value="option1">
                                <i></i>
                                <span></span>
                                تمارين ونصائح للمساعدة الذاتية
                            </label>
                        </div>
                        <div class="form-check m-5 rad">
                            <label class="form-check-label rad" for="serviceType2">
                                <input class="form-check-input required" required type="radio" name="serviceType" id="serviceType2" value="option1">
                                <i></i>
                                <span></span>
                                تحدث مع أخصائي نفسي
                            </label>
                        </div>-->
                        <div class="form-check m-5 rad">
                            <label class="form-check-label rad" for="captcha">
                                <input class="form-check-input required" required type="checkbox" name="captcha" id="captcha" value="Y">
                                <i></i>
                                <span></span>
                                أنا لست روبوت
                            </label>
                            <div class="text-danger" id="captchaError"></div>
                        </div>
                        <div class="form-group mt-20">
                            <button type="submit" class="btn startnow">ابدأ الآن</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-8" data-aos="fade-up">
                        <div class="form-group">
                            <a href="http://instaram.com" target="_blank" class="col-2">
                                <img src="/public/img/insta_s.png" alt="حاكيني" height="20">
                            </a>
                            <a href="http://youtube.com" target="_blank" class="col-2">
                                <img src="/public/img/youtube_s.png" alt="حاكيني" height="20">
                            </a>
                            <a href="http://facebook.com" target="_blank" class="col-2">
                                <img src="/public/img/facebook_s.png" alt="حاكيني" height="20">
                            </a>
                            <a href="http://twitter.com" target="_blank" class="col-2">
                                <img src="/public/img/twitter_s.png" alt="حاكيني" height="20">
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 mt-30 mb-30 text-center" data-aos="fade-up" id="social">
            <div class="m-auto col-10 col-md-6 emergency p-10">
                إذا كنت في حالة تقتضي المساعدة الفورية وهناك خطورة على حياتك،<br> يرجى الاتصال مباشرة برقم الطوارئ الخاص بمنطقتك!
            </div>
        </div>
        <div class="col-12 social">
            <div class="m-auto col-12 col-md-6">
                <div class="col-12 text-center">
                    <div class="form-group" data-aos="fade-up">
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

<div class="loginForm d-none">
    <div class="container mw-100">
        <div class="m-auto">
            <div class="text-center">
                <div class="form-group">
                    <div class="innerPopupTitle">ابقى على تواصل معنا</div>
                    <a href="http://instaram.com" target="_blank" class="popoverInner">
                        <img src="/public/img/insta_g.png" alt="حاكيني" height="15">
                    </a>
                    <a href="http://youtube.com" target="_blank" class="popoverInner ">
                        <img src="/public/img/youtube_g.png" alt="حاكيني" height="15">
                    </a>
                    <a href="http://facebook.com" target="_blank" class="popoverInner ">
                        <img src="/public/img/facebook_g.png" alt="حاكيني" height="15">
                    </a>
                    <a href="http://twitter.com" target="_blank" class="popoverInner">
                        <img src="/public/img/twitter_g.png" alt="حاكيني" height="15">
                    </a>
                </div>
            </div>
        </div>
        <hr style="">
    </div>
    <div class="container mw-100">
        <form method="POST" action="{{ route('login') }}" >
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label text-md-right">
                    <img src="/public/img/user_s.png" alt="حاكيني" width="20">
                </label>

                <div class="col-md-10">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('البريد الالكتروني') }}">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-2 col-form-label text-md-right">
                    <img src="/public/img/lock_s.png" alt="حاكيني" width="20">
                </label>

                <div class="col-md-10">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="{{ __('كلمة المرور') }}" autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row d-none">
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link small" href="{{ route('password.request') }}">
                            {{ __('نسيت كلمة المرور') }}
                        </a>
                    @endif
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-default col-md-12 login-button">
                        {{ __('تسجيل الدخول') }}
                    </button>
                </div>
            </div>
        </form>
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
    function addLoginForm() {
            $('.loginContaier').html($('.loginForm').html())
        }

    $(document).ready(function() {
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
</script>

@endsection