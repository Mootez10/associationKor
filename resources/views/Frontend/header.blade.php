<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

    

    <link rel="icon" href="assets/images/favicon2.png" sizes="32x32" type="image/png">
    <title>عمر بن الخطاب</title>

    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/fancybox.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.circliful.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/rtl.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="assets/css/colors/color3.css" /><!-- Color -->
</head>
<body>
    <main>
        <div class="pageloader-wrap">
            <div class="loader">
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__ball"></div>
            </div>
        </div><!-- Pageloader Wrap -->
        <header class="style2">
            <div class="container">
                @if(!empty($set_header))
                <div class="logo"><a href="/" title="Logo"><img src="assets/images/resources/{{ $set_header->logo }}" alt="logo.png"></a></div>
   
                @endif
               
                <nav>
                    <div>
                        <a class="srch-btn" href="#" title=""><i class="fa fa-search"></i></a>
                        <a class="thm-btn brd-rd5" href="/contact" title=""> يريد الزيارة   ؟ </a>
                        <ul>
                            <li><a href="/" title="">{{ $set_header->field1 }}</a></li>
                            <li class="menu-item-has-children"><a href="#" title="">{{ $set_header->field2 }}</a>
								<ul>
									<li><a href="/team" title="">برنامج الماهر</a></li>
									<li><a href="/team2" title="">برنامج الأرقم</a></li>
									<li><a href="/team3" title="">برنامج شمائل</a></li>
                                    <li><a href="/team4" title="">املاءات رجالية</a></li>
                                    <li><a href="/team5" title="">املاءات نسائية</a></li>
								</ul>
							</li>
                            <li><a href="/event" title="">{{ $set_header->field3 }}</a></li>
                            <li><a href="/about" title="">{{ $set_header->field4 }}</a></li>
                            <li><a href="/contact" title="">{{ $set_header->field5 }}</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            
        </header><!-- Header -->
        <div class="rspn-hdr">
            <div class="rspn-mdbr">
                {{-- <ul class="rspn-scil">
                    <li><a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>                   
                </ul> --}}
                {{-- <form class="rspn-srch">
                    <input type="text" />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form> --}}
            </div>
            <div class="lg-mn">
                <div class="logo"><a href="/" title="Logo"><img src="assets/images/resources/logoresp.png" alt="logoresp.png"></a></div>
                {{-- <div class="rspn-cnt">
                    <span><i class="fa fa-envelope thm-clr"></i><a href="#" title="">info@jamia.com</a></span>
                    <span><i class="fa fa-phone thm-clr"></i>+(00) 123-345-11</span>
                </div> --}}
                <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
            </div>
            <div class="rsnp-mnu">
                <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                <ul>
                    <li><a href="/" title="">الصفحة الرئيسية</a></li>
                    <li class="menu-item-has-children"><a href="#" title="">المدرسين</a>
                        <ul>
                            <li><a href="/team" title="">برنامج الماهر</a></li>
                            <li><a href="/team2" title="">برنامج الأرقم</a></li>
                            <li><a href="/team3" title="">برنامج شمائل</a></li>
                            <li><a href="/team4" title="">إملاءت رجالية</a></li>
                            <li><a href="/team5" title="">إملاءت نسائية</a></li>
                        </ul>
                    </li>
                    <li><a href="/event" title="">أحداث</a></li>
                    <li><a href="/about" title="">معلومات عنا</a></li>
                    <li><a href="/contact" title="">اتصل بنا</a></li>
                </ul>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->
        <div class="header-search">
            <span class="srch-cls-btn brd-rd5"><i class="fa fa-times"></i></span>
            <form>
                <input type="text" placeholder="Search here...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- Header Search -->
        <div class="contact-form-model-wrap text-center">
            <span class="model-close"><i class="fa fa-times"></i></span>
            <div class="contact-form-inner">
                <div class="sec-title text-center">
                    <div class="sec-title-inner">
                        <span>لديك سؤال</span>
                        <h3>إرسال رسالة</h3>
                    </div>
                </div>
                <div class="contact-form text-center">
                    <form action="{{ route('contact-messages.store') }}" method="POST">
                        @csrf
                        <div class="row mrg20">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input type="text" name="name" placeholder="الاسم">
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input type="text" name="phone" placeholder="الهاتف">
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input type="email" name="email" placeholder="البريد الالكتروني">
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input type="text" name="subject" placeholder="الموضوع">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <textarea name="message" placeholder="إكتب هنا"></textarea>
                                <button class="thm-btn brd-rd40" type="submit">أرسل</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div><!-- Contact Form Model Wrap -->
		<section class ="owl-curve-green">
            <div class="gap no-gap">
                <img class="botm-shp shp-img" src="assets/images/resources/{{ $config_home->banner }}" alt="shp2-1.png">
                <div class="featured-area-wrap text-center">
                    <a class="contact-btn" href="#" title=""><i class="flaticon-comment"></i>اتصل بنا</a>
                    <div class="featured-area2 owl-carousel">
                        <div class="featured-item style2" style="background-image: url(assets/images/resources/slide2-1.jpg);">
                            <div class="featured-cap">
                                <img src="assets/images/resources/bsml-txt.png" alt="bsml-txt.png">
                                <h1><img src="assets/images/resources/logo2.png" alt="logo2.png"></h1>
                                <span>{{ $config_home->nameSourra }}</span>
                            </div>
                        </div>
                        <div class="featured-item style2" style="background-image: url(assets/images/resources/slide2-2.jpg);">
                            <div class="featured-cap">
                                <img src="assets/images/resources/bsml-txt2.png" alt="bsml-txt2.png">
                                <!--<h1><img src="assets/images/resources/{{ $config_home->banner2 }}" alt="logo3.png"></h1>!-->
                                <h1><img src="assets/images/resources/logo3.png" alt="logo3.png"></h1>
                                <span>سورة القمر الأية 17</span>
                            </div>
                        </div>
                        <div class="featured-item style2" style="background-image: url(assets/images/resources/slide2-3.jpg);">
                            <div class="featured-cap">
                                <img src="assets/images/resources/bsml-txt.png" alt="bsml-txt.png">
                                <h1><img src="assets/images/resources/logo4.png" alt="logo4.png"></h1>
                                <span>سورة الحشر الأية 21</span>
                            </div>
                        </div>
                        <div class="featured-item style2" style="background-image: url(assets/images/resources/slide2-4.jpg);">
                            <div class="featured-cap">
                                <img src="assets/images/resources/bsml-txt2.png" alt="bsml-txt2.png">
                                <h1><img src="assets/images/resources/logo5.png" alt="logo5.png"></h1>
                                <span>سورة الأعراف الأية 204</span>
                            </div>
                        </div>
                    </div>
                </div><!-- Featured Area Wrap -->
            </div>
        </section>