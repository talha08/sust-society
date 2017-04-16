<section class="slider-section">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                @if(count($dept->slider) != 0)
                    @foreach($dept->slider as $slide)
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="{!! URL::asset($slide->img_url) !!}" style="width: 1140px; height: 400px" data-saveperformance="off"  data-title="Slide">
                            <img src="{!! URL::asset($slide->img_url) !!}"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_04 text-center lft tp-resizeme"
                                 data-x="center"
                                 data-y="200"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 7; max-width: auto; max-height: auto; font-size: xx-large; white-space: nowrap;"><strong>{!! $dept->name !!}</strong>
                            </div>
                            <div class="tp-caption slider_layer_03 text-center lft tp-resizeme"
                                 data-x="300"
                                 data-y="240"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-html5"></i>
                            </div>
                            <div class="tp-caption slider_layer_03 text-center lft tp-resizeme"
                                 data-x="400"
                                 data-y="240"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-tablet"></i>
                            </div>
                            <div class="tp-caption slider_layer_03 text-center lft tp-resizeme"
                                 data-x="500"
                                 data-y="240"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-laptop"></i>
                            </div>
                            <div class="tp-caption slider_layer_03 text-center lft tp-resizeme"
                                 data-x="620"
                                 data-y="240"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-mobile"></i>
                            </div>
                            <div class="tp-caption slider_layer_03 text-center lft tp-resizeme"
                                 data-x="800"
                                 data-y="240"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-css3"></i>
                            </div>
                            <div class="tp-caption slider_layer_03 text-center lft tp-resizeme"
                                 data-x="700"
                                 data-y="240"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-pencil"></i>
                            </div>
                            <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                                 data-x="center"
                                 data-y="340"
                                 data-speed="1000"
                                 data-start="800"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">{!! $slide->slider_desc !!}
                            </div>
                        </li>
                    @endforeach


                @else


                <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="{!! URL::asset('frontend/upload/slider_new_01.jpg') !!}"  data-saveperformance="off"  data-title="Slide">
                    <img src="{!! URL::asset('frontend/upload/slider_new_01.jpg') !!}"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                         data-x="center"
                         data-y="220"
                         data-speed="1000"
                         data-start="600"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-graduation-cap"></i> <strong>{!! $dept->name !!}</strong>
                    </div>
                    <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                         data-x="center"
                         data-y="320"
                         data-speed="1000"
                         data-start="800"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Great Theme For Education, University Learning Websites<br> with tons of options and custom sections!
                    </div>
                    <div class="tp-caption text-center lft tp-resizeme"
                         data-x="center"
                         data-y="390"
                         data-speed="1000"
                         data-start="800"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="btn btn-default">Start Learning</a>
                    </div>
                </li>
            @endif


            </ul>
        </div>
    </div>
</section>