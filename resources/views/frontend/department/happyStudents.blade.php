<section class="white section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h4>Acknowledge</h4>
                    <p>What Our Students Say About LearnPLUS</p>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            @foreach($dept->committee as $member)
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="testimonial">
                    <img class="alignleft img-circle" src="{!! asset('frontend/upload/student_01.png') !!}" alt="">
                    <p>Lorem Ipsum is simply dummy text of the printing and industry. </p>
                    <div class="testimonial-meta">
                        <h4>John DOE <small><a href="#">envato.com</a></small></h4>
                    </div>
                </div><!-- end dmbox -->
            </div>
           @endforeach

        </div><!-- end row -->

        <div class="button-wrapper text-center">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since<br> the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
        </div><!-- end button-wrapper -->

    </div><!-- end container -->
</section><!-- end section -->