
@extends('frontend.layouts.default')
@section('content')

<article id="contact" class="map-section">
        <div id="map-canvas" style="width: 100%; height: 400px"></div>
</article><!-- end section -->

<section class="white section">
    <div class="container">
        <div class="row contact-wrapper">
            <div class="col-md-9 col-sm-9 col-xs-12 content-widget">
                <div class="widget-title">
                    <h4>Contact Form</h4>
                    <hr>
                </div>
                <div id="contact_form" class="contact_form row">
                    <div id="message"></div>
                    @include('includes.alert')

                    {!! Form:: open(array('route' => 'contact.store')) !!}
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            {!! Form:: text ('name', '', array('class'=>'form-control', 'required'=>'required','placeholder' => 'Your Name'))!!}
                            {!! Form:: email ('email', '', array('class'=>'form-control', 'required'=>'required','placeholder' => 'me@example.com')) !!}
                            {!! Form:: text ('subject', '', array('class'=>'form-control', 'required'=>'required','placeholder' => 'Your subject'))!!}
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            {!! Form:: textarea ('message', '',array('class'=>'form-control', 'required'=>'required|min:25','placeholder' => 'Message must contain 25 alphabets'))!!}
                            {!! Form::reset('Clear', array('class' => 'you css class for button')) !!}
                            {!! Form::submit('Send', array('class' => 'you css class for button')) !!}
                        </div>
                    {!! Form:: close() !!}
                </div><!-- end contact-form -->
            </div><!-- end col -->




            <div class="col-md-3 col-sm-3 col-xs-12 content-widget">
                <div class="widget-title">
                    <h4>Contact Details</h4>
                    <hr>
                </div>
                <div class="contact-list">
                    <ul class="contact-details">
                        <li><i class="fa fa-link"></i> <a href="#">www.yoursite.com</a></li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                        <li><i class="fa fa-phone"></i> +90 123 45 67</li>
                        <li><i class="fa fa-fax"></i> +90 123 45 68</li>
                        <li><i class="fa fa-home"></i> Envato INC 22 Elizabeth Str. Melbourne. Victoria 8777.</li>
                    </ul>
                </div><!-- end contact-list -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->


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

