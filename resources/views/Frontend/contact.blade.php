@include('Frontend.header', ['set_header' => $set_header])
        <section>
            <div class="gap">
                <div class="container">
                    <div class="sec-title text-center">
                        <div class="sec-title-inner">
                            <span>احصل على المعلومات</span>
                            <h3>معلومات الاتصال</h3>
                        </div>
                    </div>
                    <div class="contact-info-wrap text-center remove-ext3">
                        <div class="row">
                            @foreach ($set_contact as $set_contact)
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="contact-info-box">
                                    
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
        <section>
            <div class="gap no-gap">
                <div class="contact-loc" id="contact-loc"></div>
            </div>
        </section>
        <section>
            <div class="gap">
                <div class="container">
                    <div class="sec-title text-center">
                        <div class="sec-title-inner">
                            <span>لديك سؤال</span>
                            <h3>أرسل رسالة</h3>
                        </div>
                    </div>
                    <div class="contact-form text-center">
                        <form action="{{ route('contact-messages.send') }}" method="POST">
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
                                    <button class="thm-btn brd-rd40" type="submit">اتصل بنا</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
        @include('Frontend.footer', ['set_footer' => $set_footer])