@include('Frontend.header', ['set_header' => $set_header])

        <section>
            <div class="gap">
                <div class="container">
                    <div class="event-wrap">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                
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
										
                                        {{-- <div class="col-md-4 col-sm-6 col-lg-4">
                                            <div class="event-box2">
                                                <div class="event-thumb">
                                                    <a href="#" title=""><img src="assets/images/resources/saifi.jpg" alt="saifi.jpg"></a>
                                                </div>
                                                <div class="event-info">
                                                    <h4><a href="#" title="">Feed 1000 Children</a></h4>
                                                    <p>Feed 1000 Children Event to raise sit amet, coner adipiscing amet.</p>
                                                    <ul class="event-mta">
                                                        <li><i class="fa fa-map-marker"></i>1874 Pretty View Lane</li>
                                                        <li><i class="flaticon-clock"></i>December 4, 2024</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-lg-4">
                                            <div class="event-box2">
                                                <div class="event-thumb">
                                                    <a href="#" title=""><img src="assets/images/resources/saifi.jpg" alt="saifi.jpg"></a>
                                                </div>
                                                <div class="event-info">
                                                    <h4><a href="#" title="">Children Education</a></h4>
                                                    <p>Child education event sit amet, coner adipiscing dolor sit amet.</p>
                                                    <ul class="event-mta">
                                                        <li><i class="fa fa-map-marker"></i>1874 Pretty View Lane</li>
                                                        <li><i class="flaticon-clock"></i>December 4, 2024</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Event Wrap -->
                </div>
            </div>
        </section>
        @include('Frontend.footer', ['set_footer' => $set_footer])