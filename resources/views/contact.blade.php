@extends('frontend.layouts.default')
@section('content')


    <div class="breadcrumb-wrapper">
        <div class="pattern-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Contact Us </h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li>You are Now on:</li>
                                <li><a href="{!! route('welcome') !!}">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Google Map -->
    <br><br>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="map-canvas" style="width: 100%; height: 400px"></div>
        </div>
    </div>
    </div>
    <!-- /Google Map -->



    <div class="content margin-top60 margin-bottom60">
        <div class="container">

            <!-- Star -->
            <div class="star">
                <div class="row">
                    <div class="col-md-12">
                        <div class="star-divider">
                            <div class="star-divider-icon">
                                <i class=" fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Star -->
            <div class="row">
                <div class="white-wrapper nopadding">
                    <div class="col-md-12">
                        <h2>Send Us an Email</h2>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Contact Form -->
                    <div class="contact-form">
                            @include('includes.alert')
                            {!! Form:: open(array('route' => 'contact.store', 'id' => 'contactform')) !!}
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                {!! Form:: text ('name', '', array('class'=>'form-control', 'required'=>'required','placeholder' => 'Your Name'))!!}
                                {!! Form:: email ('email', '', array('class'=>'form-control', 'required'=>'required','placeholder' => 'me@example.com')) !!}

                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                {!! Form:: text ('subject', '', array('class'=>'form-control', 'required'=>'required','placeholder' => 'Your subject'))!!}
                                {!! Form:: textarea ('message', '',array('class'=>'form-control', 'required'=>'required|min:25','placeholder' => 'Message must contain 25 alphabets'))!!}
                                {!! Form::reset('Clear', array('class' => 'you css class for button')) !!}
                                {!! Form::submit('Send', array('class' => 'you css class for button')) !!}
                            </div>
                            {!! Form:: close() !!}
                    </div>
                    <!-- /Contact form -->
                    <!--  Star -->
                    <div class="star">
                        <div class="col-md-12">
                            <div class="star-divider">
                                <div class="star-divider-icon">
                                    <i class=" fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Star -->
                    <div class="clearfix"></div>
                    <div class="row padding-top margin-top">
                        <!-- Contact Details -->
                        <div class="contact-details">
                            <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                                <div class="text-center">
                                    <div class="wow swing">
                                        <div class="contact-icon">
                                            <a href="#" class=""> <i class="fa fa-map-marker fa-3x"></i> </a>
                                        </div>
                                        <!-- end dm-icon-effect-1 -->
                                        <p>IICT Building,
                                            Dept. of CSE, SUST
                                            Sylhet, Bangladesh. <br>
                                            Dhaka, Bangladesh
                                        </p>
                                    </div>
                                    <!-- end service-icon -->
                                </div>
                                <!-- end miniboxes -->
                            </div>
                            <!-- /col-lg-4 -->
                            <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                                <div class="text-center">
                                    <div class="wow swing">
                                        <div class="contact-icon">
                                            <a href="#" class=""> <i class="fa fa-phone fa-3x"></i> </a>
                                        </div>
                                        <p><strong>Phone:</strong> (1111) 1111 1111<br>
                                            <strong>Phone:</strong> (2222) 2222 2222
                                        </p>
                                    </div>
                                    <!-- /service-icon -->
                                </div>
                                <!-- /miniboxes -->
                            </div>
                            <!--  /col-lg-4 -->
                            <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                                <div class="text-center">
                                    <div class="wow swing">
                                        <div class="contact-icon">
                                            <a href="#" class=""> <i class="fa fa-envelope-o fa-3x"></i> </a>
                                        </div>
                                        <p><strong>Email:</strong> support@sustsociety.com<br>
                                            <strong>Skype:</strong> sustsociety
                                        </p>
                                    </div>
                                    <!--  /service-icon -->
                                </div>
                                <!-- /miniboxes -->
                            </div>
                            <!-- /col-lg-4 -->
                        </div>
                        <!-- Contact Details -->
                    </div>
                    <!-- /margin-top --><br><br>
                </div>
            </div>
        </div>
    </div>


@stop
@section('style')
@stop

@section('script')
    {!! Html::script('https://maps.googleapis.com/maps/api/js?v=3.exp&amp;AMP;sensor=false') !!}

    <script>

        //google map
        function initialize() {
            var myLatlng = new google.maps.LatLng(24.918157, 91.830944);
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Hello World!'
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);



    </script>
@stop

