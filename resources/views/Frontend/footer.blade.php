<footer>
    <div class="gap top-spac70 drk-bg2 remove-bottom">
        <div class="container">
            <div class="footer-data">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="wdgt-box style2">
                            @if(isset($set_footer))
                            <div class="logo"><a href="index.html" title="Logo"><img src="assets/images/resources/{{ $set_footer->logo }}" alt="logo.png"></a></div>
                            <p>{{ $set_footer->descAssociation }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <div class="wdgt-box">
                                    <h4>{{ $set_footer->title1 }}</h4>
                                    <ul>
                                        <li><a href="/home" title="">{{ $set_footer->field1 }}</a></li>
                                        <li><a href="/home" title="">{{ $set_footer->field2 }}</a>
                                            <ul>
                                                <li><a href="/team" title="">برنامج الماهر</a></li>
                                                <li><a href="/team2" title="">برنامج الأرقم</a></li>
                                                <li><a href="/team3" title="">برنامج شمائل</a></li>
                                                <li><a href="/team4" title="">إملاءت رجالية</a></li>
                                                <li><a href="/team5" title="">إملاءت نسائية</a></li>
                                            </ul>
                                        </li>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <div class="wdgt-box">
                                    <h4>{{ $set_footer->title2 }}</h4>
                                    <ul>
                                        <li><a href="/about" title="">{{ $set_footer->field3 }}</a></li>
                                        <li><a href="/contact" title=""> {{ $set_footer->field4 }}</a></li>
                                        <li><a href="/event" title="">{{ $set_footer->field5 }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <div class="wdgt-box">
                                    <h4>{{ $set_footer->title3 }}</h4>
                                    <ul class="cont-lst">
                                        <li><i class="flaticon-location-pin"></i> {{ $set_footer->field6 }} </li>
                                        <li><i class="flaticon-call"></i>{{ $set_footer->field7 }}</li>
                                        <li><i class="flaticon-email"></i><a href="#" title="">{{ $set_footer->field8 }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scl">
                    <a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                    <a href="https://www.facebook.com/oik.dcf?mibextid=LQQJ4d" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                </div>
            </div><!-- Footer Data -->
            
        </div>
        
    </div>

</footer>
</main><!-- Main Wrapper -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/downCount.js"></script>
<script src="assets/js/fancybox.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/perfectscrollbar.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.circliful.min.js"></script>
<script src="assets/js/custom-scripts.js"></script>

</body>	
</html>