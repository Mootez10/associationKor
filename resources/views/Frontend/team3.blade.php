@include('Frontend.header', ['set_header' => $set_header])
        <section>
            <div class="gap white-layer opc9">
                <div class="container">
                    <div class="sec-title text-center">
                        <div class="sec-title-innerr">
                            <h3>مدرسي برنامج شمائل</h3> 
                        </div>
                    </div>
                    <div class="team-wrap text-center remove-ext5">
                        <div class="row">
                            @foreach ($teacher_level3s as $teacher_level3)
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="team-box">
                                    <img src="assets/images/resources/{{ $teacher_level3->picture }}" alt="cyrine.jpg">
                                    <div class="team-info">
                                        <h4>{{ $teacher_level3->name }}</h4>
                                        <p>{{ $teacher_level3->job }}</p>
                                        <div class="team-scl">
                                            <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            {{-- <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="team-box">
                                    <img src="assets/images/resources/tesnim.jpg" alt="tesnim.jpg">
                                    <div class="team-info">
                                        <h4>تسنيم مشماش</h4>
                                        <p>طالبة</p>
                                        <div class="team-scl">
                                            <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="team-box">
                                    <img src="assets/images/resources/firas.jpg" alt="firas.jpg">
                                    <div class="team-info">
                                        <h4>فراس عوينتي</h4>
                                        <p>مهندس إعلامية</p>
                                        <div class="team-scl">
                                            <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="team-box">
                                    <img src="assets/images/resources/cyrine.jpg" alt="cyrine.jpg">
                                    <div class="team-info">
                                        <h4>سيرين مشماش</h4>
                                        <p>مهندسة إعلامية</p>
                                        <div class="team-scl">
                                            <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="team-box">
                                    <img src="assets/images/resources/cyrine.jpg" alt="cyrine.jpg">
                                    <div class="team-info">
                                        <h4>سيرين مشماش</h4>
                                        <p>مهندسة إعلامية</p>
                                        <div class="team-scl">
                                            <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="team-box">
                                    <img src="assets/images/resources/cyrine.jpg" alt="cyrine.jpg">
                                    <div class="team-info">
                                        <h4>سيرين مشماش</h4>
                                        <p>مهندسة إعلامية</p>
                                        <div class="team-scl">
                                            <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            
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
                                    <i class="flaticon-location-pin"></i>
                                    <strong>موقعنا</strong>
                                    <span>نابل دار شعبان الفهري</span>
                                    <a href="#" title="">www.omarbnkhattab.com</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="contact-info-box">
                                    <i class="flaticon-call"></i>
                                    <strong>إتصل بنا</strong>
                                    <span>الهاتف : 21855445</span>
                                    <span>Fax: 26414032</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="contact-info-box">
                                    <i class="flaticon-email"></i>
                                    <strong>إبعث رسالة</strong>
                                    <a href="#" title="">www.omarbnkhattab.com</a>
                                    <a href="#" title="">www.omarbnkhattab55.com</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- Contact Info Wrap -->
                </div>
            </div>
        </section>
        @include('Frontend.footer', ['set_footer' => $set_footer])