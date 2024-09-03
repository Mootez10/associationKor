@include('Frontend.header', ['set_header' => $set_header])
        
        <section>
            <div class="gap">
                <div class="container">
                    <div class="hstry-wrap">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="text-center">
                                    <img src="assets/images/resources/{{ $config_home->logo }}" alt="logo.png">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="hstry-desc">
                                    <h2>تاريخ الجمعية</h2>
                                    <p>{{ $config_home->descAssociation }}</p>
                                    <ul>
                                        <li>قراءت</li>
                                        <li>تحفيظ القران</li>
                                        <li>سيرة نبوية</li>
                                        <li>أحكام التجويد</li>
                                        <li>تنمية بشرية</li>
                                        <li>أحاديث نبوية</li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- History Wrap -->
                </div>
            </div>
        </section>
        <section class = "team-green-block">
            <div class="gap thm-layer opc95">
                <div class="fixed-bg ptrn-bg" style="background-image: url(assets/images/pattern-bg.jpg);"></div>
                <div class="container">
                    <div class="sec-title2 text-center">
                        <div class="sec-title-inner2">
                            <h3>الهيئة المديرة 2023 --> 2026</h3>
                        </div>
                    </div>
                    <div class="team-wrap text-center remove-ext3">
                        <div class="row">
                            @foreach ($administrations as $administration)
                            <div class="col-md-3 col-sm-6 col-lg-3 fadeIn" data-wow-duration=".8s" data-wow-delay=".4s">
                                <div class="team-box2">
                                    <img src="assets/images/resources/{{ $administration->memberPicture }}" alt="mootez.jpg">
                                    <div class="team-info2">
                                        <h4>{{ $administration->memberName }}</h4>
                                        <h5>{{ $administration->memberPost }}</h5>
                                        <p>{{ $administration->memberWork }}</p>
                                        <div class="team-scl">
                                            <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            <a href="https://www.facebook.com/profile.php?id=100004258937574&mibextid=LQQJ4d" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div><!-- Team Wrap -->
                </div>
            </div>
        </section>
        
        <section>
            <div class="gap">
                <div class="container">
                    <div class="sec-title2 text-center">
                        <div class="sec-title-inner2">
                            <h3>{{ $config_home->services }}</h3>
                        </div>
                    </div>
                    <div class="serv-wrap text-center remove-ext3">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="srv-box2">
                                    <i class="flaticon-quran-rehal"></i>
                                    <div class="srv-info2">
                                        <h4>{{ $config_home->service_item_title }}</h4>
                                        <p>تَقوم جمعيتنا بتحفيظ  القرآن الكريم لجميع الفئات العمرية (أطفال ، كهول  و مشايخ) و لكلا الجنسين (رجال و نساء) و ذلك تحت إشراف مدرسين ذو كفاءة و مستوى علمي متميز</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="srv-box2">
                                    <i class="flaticon-heart-1"></i>
                                    <div class="srv-info2">
                                        <h4>أحكام التجويد</h4>
                                        <p>تَقوم الجمعية بتقديم دروس و محاضرات لتطوير مستوى الطلاب منها مثلا دورة في أساسيات التزكية و فقه الصلاة لسيدي علي النوري و غيرها من الدورات و المحاضرات الأخرى</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="srv-box2">
                                    <i class="flaticon-mosque"></i>
                                    <div class="srv-info2">
                                        <h4>سيرة نبوية</h4>
                                        <p>تَقوم الجمعية بتدريس سيرة رسول الله محمد صلى الله عليه وسلم و ذلك بطريقة سلسة و مفهومة تساعد المتعلم على فهم سيرة نبينا (ولادته ، رضاعته ، أزواجه ، غزواته …)</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="srv-box2">
                                    <i class="flaticon-social-care"></i>
                                    <div class="srv-info2">
                                        <h4>دروس و محاضرات</h4>
                                        <p>تَقوم الجمعية بتقديم دروس و محاضرات لتطوير مستوى الطلاب منها مثلا دورة في أساسيات التزكية و فقه الصلاة لسيدي علي النوري و غيرها من الدورات و المحاضرات الأخرى</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Serv Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="gap">
                <div class="container">
                    <div class="event-wrap">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="sec-title text-center">
                                    <div class="sec-title-inner">
                                        <h3><span>الأحداث</span> القادمة</h3>
                                    </div>
                                    <h3>عمر بن الخطاب تنظم أحداث متعددة طوال العام</h3>
                                </div>
                                <div class="remove-ext3">
                                    <div class="row">
                                        @foreach ($set_events as $set_event)
                                        <div class="col-md-4 col-sm-6 col-lg-4">
                                            <div class="event-box2">
                                                <div class="event-thumb">
                                                    <a href="#" title=""><img src="assets/images/resources/{{ $set_event->picture }}" alt="dawra.jpg"></a>
                                                </div>
                                                <div class="event-info">
                                                    <h4><a href="#" title="">{{ $set_event->title }}</a></h4>
                                                    <p>{{ $set_event->description }}</p>
                                                    <ul class="event-mta">
                                                        <li><i class="fa fa-map-marker"></i>{{ $set_event->location }}</li>
                                                        <li><i class="flaticon-clock"></i>{{ $set_event->date }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Event Wrap -->
                </div>
            </div>
        </section>
        @include('Frontend.footer', ['set_footer' => $set_footer])
       