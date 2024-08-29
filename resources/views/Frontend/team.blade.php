@include('Frontend.header')
        <section>
            <div class="gap white-layer opc9">
                <div class="container">
                    <div class="sec-title-innerr">
                        <h3>مدرسي برنامج الماهر القسم الأول</h3>
                    </div>
                    <div class="team-wrap text-center remove-ext5">
                        <div class="row">
                            @foreach ($teachers as $teacher)
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="team-box">
                                    <img src="assets/images/resources/{{ $teacher->picture }}" alt="team-img1-1.jpg">
                                    <div class="team-info">
                                        <h4>{{ $teacher->name }}</h4>
                                        <p>{{ $teacher->job }}</p>
                                        <div class="team-scl">
                                            <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                            <div class="sec-title-innerr">
                                <h3>مدرسي برنامج الماهر القسم الثاني</h3>
                            </div>
                            <div class="team-wrap text-center remove-ext5">
                                <div class="row">
                                    @foreach ($teacher_level1s as $teacher_level1)
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="team-box">
                                            <img src="assets/images/resources/{{ $teacher_level1->picture }}" alt="team-img1-1.jpg">
                                            <div class="team-info">
                                                <h4>{{ $teacher_level1->name }}</h4>
                                                <p>{{ $teacher_level1->job }}</p>
                                                <div class="team-scl">
                                                    <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                                </div>
                            </div>
                    
                
                    </div><!-- Team Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="gap remove-gap">
                <div class="container">
                    <div class="contact-info-wrap text-center remove-ext3">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="contact-info-box">
                                    @foreach ($set_contact as $set_contact)
                                        
                                    
                                    <i class="flaticon-location-pin"></i>
                                    <strong>{{ $set_contact->title1 }}</strong>
                                    <span>{{ $set_contact->location }}</span>
                                    <a href="#" title="">{{ $set_contact->email }}</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="contact-info-box">
                                    <i class="flaticon-call"></i>
                                    <strong>{{ $set_contact->title2 }}</strong>
                                    <span>{{ $set_contact->phone1 }}</span>
                                    <span>{{ $set_contact->phone2 }}</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="contact-info-box">
                                    <i class="flaticon-email"></i>
                                    <strong>{{ $set_contact->title3 }}</strong>
                                    <a href="#" title="">{{ $set_contact->email1 }}</a>
                                    <a href="#" title="">{{ $set_contact->email2 }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div><!-- Contact Info Wrap -->
                </div>
            </div>
        </section>
        @include('Frontend.footer', ['set_footer' => $set_footer])