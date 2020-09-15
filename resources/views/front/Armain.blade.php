<!doctype html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/owlcarousel/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/ar_main.css?v=2">
    <link rel="stylesheet" href="css/media_queries.css">

    <title>The National Program For Behavioral Reward Fazaa</title>


    <style>

    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="100">
    <div class="social_icons">
        <ul>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/fazaarewards" target="_blank"><i class="fa fa-twitter"
                        aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/fazaanationalrewards/" target="_blank"><i class="fa fa-instagram"
                        aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <nav class="navbar fixed-top">
        <a class="navbar-brand" href="#home"><img class="img-fluid" src="img/logo.png"
                alt="The National Program For Behavioral Reward Fazaa"></a>
        <div class="menu-drawer navbar-collapse" id="mainNav">
            <ul class="mr-auto">
                <li><a class="nav-link js-scroll-trigger eng_font" href="/">EN</a></li>
                <li><a href="#home" class="nav-link js-scroll-trigger">الصفحة الرئيسية</a></li>
                <li><a href="#about" class="nav-link js-scroll-trigger">عن البرنامج</a></li>
                <li><a href="#rewards" class="nav-link js-scroll-trigger">مكافآتي</a></li>
                <li><a href="#initiatives" class="nav-link js-scroll-trigger">المبادرات</a></li>
                <li><a href="#partners" class="nav-link js-scroll-trigger">شركاؤنا</a></li>
                <li><a href="#media" class="nav-link js-scroll-trigger">المركز الإعلامي</a></li>
                <li><a href="#faq" class="nav-link js-scroll-trigger">الأسئلة الشائعة</a></li>
                <li><a href="#contactUs" class="nav-link js-scroll-trigger">تواصل معنا</a></li>

            </ul>
        </div>
        <a class="toggle-menu" href="#">
            <i></i>
            <i></i>
            <i></i>
        </a>


    </nav>
    <!-- SLIDER -->
    <main class="container-fluid slider" id="home">
        <section class="contentText">
            <p class="quote">نحن كقادة مهمتنا هي تحقيق الصالح العام وإسعاد الناس، ولا يمكن إنجاز هذه المهمة من دون
                مشاركة الناس، لذلك نعطي الأولوية للتنمية البشرية، وهي محور رئيسي في رؤيتنا</p>
            <p class="name mt-3 text-left font-weight-bold">
                صاحب السمو الشيخ محمد بن راشد آل مكتوم </p>
        </section>
    </main>
    <!--about -->
    <section class="page-section" id="about">
        <div class="container">
            <h1>عن البرنامج</h1>
            <div class="row">
                @if(isset($about))
                    @foreach($about as $row)
                    @if($row->lang == "ar")
                <div class="col-md-12 scrollPanel">

                    <div class="row mb-3">
                        <p>{{$row->title}} <br /> <br /> {!! $row->description !!}</p>

                    </div>



                    <div class="row mb-3">
                        <ul class="d-md-flex d-sm-none icons justify-content-end" dir="rtl">
                            <li><img class="img-fluid" src="img/about_01.jpg" alt="Healthy Life">
                                <h5>الحياة الصحية</h5>
                            </li>

                        </ul>
                    </div>


                    <div class="row mb-3">
                        <p>تركّز جميع هذه المحاور على إبراز دور الإمارات الريادي في مجال التنمية السلوكية والمساهمة في
                            تحقيق أهداف ”رؤية الإمارات ٢٠٢١</p>
                    </div>


                </div>

                @endif
                    @endforeach
                    @endif
            </div>

        </div>
    </section>
    <!--REWARDS-->
    <section class="page-section" id="rewards">
        <div class="container">
            <h1>مكافآتي</h1>
            <div class="row">
                <div class="col-md-12 scrollPanel">
                    <div class="row" dir="rtl">

                        @if(isset($rows))
                        @foreach($rows as $row)
                        @if($row->lang == "ar")
                        <p class="ques">{{$row->title}}</p>

                        <p class="ans">{!! $row->description !!}</p>
                        @endif
                        @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--INITIATIVES-->
    <section class="page-section" id="initiatives" dir="rtl">

        <div class="container">
            <h1>المبادرات</h1>
            <div class="owl-carousel owl-theme" id="carousel_1">

                @if(isset($init))
                @foreach($init as $row)
                @if($row->lang == "ar")

                <!--Tab1-->
                <div class="outerCover">
                    <div class="outerWrap">
                        <div class="imageBox">
                            <a data-fancybox data-options='{"src": "#{{$row->id}}", "touch": false, "smallBtn" : false}'
                                href="javascript:;">
                                <div class="info">
                                    <p>
                                        {!! substr(strip_tags($row->description), 0, 450) !!}
                                    </p>
                                    <span>تعرف أكثر</span>
                                </div>
                            </a>
                            <img src="{{$row->image}}" class="img-fluid" alt="" /></div>
                        <!-- Modal -->
                        <div style="display:none;" id="{{$row->id}}" class="text-right">
                            <h2 class="text-right">{{$row->title}}</h2>
                            <p>
                                {!! $row->description !!}
                            </p>

                        </div>
                    </div>
                    <h5>{{$row->title}}</h5>
                </div>
                @endif
                @endforeach
                @endif
            </div>


        </div>

    </section>

    <!--PARTNERS-->
    <section class="page-section clearfix" id="partners" dir="rtl">
        <div class="container">
            <h1>شركاؤنا</h1>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        @if(isset($partner))
                        @foreach($partner as $rows)
                        @if($row->lang == "ar")

                        <div class="row">
                            <div class="col-md-4"><img class="d-block w-100" src="{{$row->image}}" alt="Central-Bank">
                            </div>
                        </div>
                        {{-- <div class="row">
                        <div class="col-md-4"><img class="d-block w-100" src="img/dept_logos/Dept-Economy.jpg" alt="Dept-Economy"></div>
                    </div> --}}
                        @endif
                        @endforeach
                        @endif

                    </div>
                    <div class="carousel-item">
                        @if(isset($partners))
                        @foreach($partners as $rows)
                        @if($row->lang == "ar")

                        <div class="row">
                            <div class="col-md-4"><img class="d-block w-100" src="{{$row->image}}" alt="Dept-Finance">
                            </div>
                        </div>
                        {{-- <div class="row">
                        <div class="col-md-4"><img class="d-block w-100" src="img/dept_logos/Dept-National-Pgm.jpg" alt="Dept-Economy"></div>
                    </div> --}}

                        @endif
                        @endforeach
                        @endif
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </section>
    <!--MEDIA-->
    <section class="page-section" id="media">
        <div class="container">
            <h1>المركز الإعلامي</h1>

            <div class="owl-carousel owl-theme" id="carousel_2" style="direction: rtl;">


                @if(isset($data))
                @foreach($data as $row)
                @if($row->lang == "ar")
                <div class="news_img">
                    <a data-id="{{$row->id}}" href="javascript:;" class="newslink openFancyBox">
                        <img src="{{$row->image}}" class="img-fluid" alt="" style="height: 405px;max-width: 270px;">
                        <h4>{{$row->title}}</h4>
                    </a>
                    <!-- Modal 1 -->
                    <div style="display:none;" id="news{{$row->id}}">
                        <h2 class="text-right">{{$row->title}} </h2>
                        <img src="{{$row->image}}" alt="media" class="img-fluid float-right  ml-3 mb-3"
                            style="height: 405px;max-width: 270px;">
                        <p> {!! $row->description !!}</p>
                    </div class="modalBox">
                </div>
                @endif
                @endforeach
                @endif

            </div>
        </div>


    </section>
    <!--FAQ-->
    <section class="page-section" id="faq" dir="rtl">
        <div class="container">
            <h1>الأسئلة الشائعة</h1>
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <!-- Accordion -->
                    <div id="accordionExample" class="accordion shadow">


                        @if(isset($faq))
                        @foreach($faq as $rows)
                        @if($row->lang == "ar")

                        <!-- Accordion item 1 -->
                        <div class="card">
                            <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                                <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                        class="d-block position-relative text-dark collapsible-link py-2">{{$rows->title}}</a>
                                </h6>
                            </div>
                            <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample"
                                class="collapse show">
                                <div class="card-body">
                                    <p class="font-weight-light m-0">{!! $rows->description !!}</p>
                                </div>
                            </div>
                        </div>

                        @endif
                        @endforeach
                        @endif



                    </div>
                </div>
            </div>


        </div>

    </section>
    <!--CONTACT-->
    <section class="page-section" id="contactUs">

        <div class="container" dir="rtl">
            <h1>تواصل معنا</h1>

            @if(isset($contact))
            @foreach($contact as $row)
            @if($row->lang == "ar")

            <div class="form-group row">
                <div for="name" class="col-4 col-form-label">:الهاتف</div>
                <div class="col-8">
                    <p>{{$row->phone}}</p>
                </div>
            </div>
            <div class="form-group row">
                <div for="contact" class="col-4 col-form-label">البريد الإلكتروني:</div>
                <div class="col-8">
                    <p><a href="mailto:abc@xyz.com">{{$row->email}}</a></p>
                </div>
            </div>
            <div class="form-group row">
                <div for="text1" class="col-lg-4 col-sm-12 col-form-label">الموقع</div>
                <div class="col-lg-8 col-sm-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.8247265767745!2d55.25575961500849!3d25.141615883922046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f69486dea94a5%3A0x6c5b0686629f9617!2sFazaa%20Dubai!5e0!3m2!1sen!2sin!4v1598028921495!5m2!1sen!2sin"
                        width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-4 col-form-label">للدعم التقني، هاتف:

                </div>
                <div class="col-8">
                    <p>{{$row->techsupport}}</p>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <p>لمزيد من الدعم</p>
                </div>
            </div>

            @endif
            @endforeach
            @endif



            <h2 class="text-uppercase font-weight-bold pt-5 pb-5">نرحب دائمًا بتلقي اقتراحاتكم و ملاحظاتكم</h2>
            <form mathod="get" action="/contact-query" id="contactForm1">
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">لإسم</label>
                    <div class="col-8">
                        <input id="name" name="name" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contact" class="col-4 col-form-label">رقم التواصل</label>
                    <div class="col-8">
                        <input id="contact" name="mobile" id="mobile" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">البريد الإلكتروني:

                    </label>
                    <div class="col-8">
                        <input id="text1" name="email" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="textarea" class="col-4 col-form-label">الموضوع</label>
                    <div class="col-8">
                        <textarea id="textarea" name="subject" cols="40" rows="5" class="form-control"
                            required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <button name="submit" type="submit" class="float-left send_btn">إرسال</button>
                    </div>
                </div>
            </form>


            <div class="row mt-5">
                <div class="col-md-12">
                    <a href="https://apps.apple.com/ae/app/fazaa/id1049790992" target="_blank"> <img
                            src="img/app_store.jpg" alt=""></a>
                    <a href="https://play.google.com/store/apps/details?id=ae.fazaa&hl=en_IN"><img
                            src="img/android_store.jpg" alt=""></a>
                </div>
            </div>

            <p class="mt-5 text-center">حمل تطبيق ”مكافآت فزعه“
            </p>


            <p class="mt-5 text-center"> البرنامج الوطني للمكافآت السلوكية فزعه &copy; 2020</p>
        </div>

        <div id="successMessage" style="display:none;">
            <style>
                .thank-you-pop {
                    position: fixed;
                    top: 50%;
                    left: 0;
                    right: 0;
                    background: #555555;
                    z-index: 999;
                    width: 40%;
                    margin-left: auto;
                    margin-right: auto;
                    transform: translateY(-30%);
                    padding: 4px 20px;
                    font-size: 17px;
                    box-shadow: 0 0 15px -6px #000;
                }

                .thank-you-pop p {
                    color: white;
                    text-shadow: 1px 1px 2px #444;
                }
            </style>
            <div class="thank-you-pop">
                <!--<img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">-->
                <!--<h1 style="text-align: center;">شكرا!</h1>-->
                <p>تم استلام طلبك وسنتصل بك قريبًا</p>
            </div>
        </div>



    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- 1. Add latest jQuery and fancybox files -->



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>






    <script src="js/scripts.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $(window).on('load', function(){
            $('#carousel_1').owlCarousel({
                margin:10,
                nav: true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true,
                        navText : ["&rsaquo;","&lsaquo;"],
                        dots:true
                    },
                    600:{
                        items:3,
                        nav:true,
                        navText : ["&rsaquo;","&lsaquo;"],
                        dots:true
                    },
                    1000:{
                        items:4,
                        nav:true,
                        navText : ["&rsaquo;","&lsaquo;"],
                        dots:true,
                        loop:false
                    }
                }
            });

            $('#carousel_2').owlCarousel({
                rtl:true,
                margin:10,
                nav: true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true,
                        navText : ["&rsaquo;","&lsaquo;"],
                        dots:true
                    },
                    600:{
                        items:3,
                        nav:true,
                        navText : ["&rsaquo;","&lsaquo;"],
                        dots:true
                    },
                    1000:{
                        items:4,
                        nav:true,
                        navText : ["&rsaquo;","&lsaquo;"],
                        dots:true,
                        loop:false
                    }
                }
            });

        });

        $('.openFancyBox').on('click', function() {
            var id = $(this).data("id")
            $.fancybox.open( $('#news'+id), {
                touch: false,
                infobar: false

            });
        });


        $('#successMessage').hide();
        var frm = $('#contactForm1');

        frm.submit(function (e) {

            e.preventDefault();

            $.ajax({
                type: frm.attr('method'),
                url: frm.attr('action'),
                data: frm.serialize(),
                success: function (data) {
                    //$('.modal').modal();
                    $('#successMessage').fadeIn();

                    setTimeout(function(){ $('#successMessage').fadeOut(); }, 2000);

                    // alert(data);
                },
                error: function (data) {
                    console.log('An error occurred.');
                    console.log(data);
                },
            });
        });
        window.addEventListener("scroll", (event) => {
            var scroll = this.scrollY;
            console.log(scroll);
        });


    });

    </script>
</body>

</html>
