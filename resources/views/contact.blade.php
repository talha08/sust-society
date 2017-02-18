
@extends('frontend.layouts.default')
@section('content')

<article id="contact" class="map-section">
    <div id="map" class="wow slideInUp"></div>
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
                    <form id="contactform" action="http://templatevisual.com/demo/learnplus/contact.php" name="contactform" method="post">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name *">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email *">
                            <input type="text" name="name" id="website" class="form-control" placeholder="Website">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <textarea class="form-control" name="comments" id="comments" rows="6" placeholder=""></textarea>
                            <button type="submit" value="SEND" id="submit" class="btn btn-primary btn-block">Send Message</button>
                        </div>
                    </form>
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

    <script src="frontend/js/custom.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="frontend/js/contact.js"></script>
    <script src="frontend/js/map.js"></script>
@stop
