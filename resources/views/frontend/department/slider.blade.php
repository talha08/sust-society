








<!-- Slider -->
<div class="fullwidthbanner-container tp-banner-container">
    <div class="fullwidthbanner rslider tp-banner">
        <ul>

        @if(count($dept->slider) != 0)
            @foreach($dept->slider as $slide)
            <!-- THE FIRST SLIDE -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="{!! asset('homeslider_thumb2.jpg') !!}" data-delay="10000"  data-saveperformance="on">
                <!-- MAIN IMAGE -->
                <img src="{!! asset('frontend/img/dummy.png') !!}"  alt="laptopmockup_sliderdy" data-lazyload="{!! asset($slide->img_url) !!}" data-bgposition="right top" data-kenburns="on" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption customin fadeout rs-parallaxlevel-10"
                     data-x="783"
                     data-y="146"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="2700"
                     data-easing="Power3.easeInOut"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 2;"><img src="{!! asset('frontend/img/dummy.png') !!}" alt="" data-lazyload="{!! asset('frontend/img/redbg_big.png') !!}">
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption light_heavy_50 customin fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="797"
                     data-y="154"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="2850"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"> &nbsp; {!! $dept->name !!}
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption black_heavy_70 skewfromleftshort fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="550"
                     data-y="83"
                     data-speed="500"
                     data-start="2400"
                     data-easing="Power3.easeInOut"
                     data-splitin="chars"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap; font-size: 450%" >SUST Departmental
                </div>
                <!-- LAYER NR. 4 -->
            {{--<div class="tp-caption black_bold_40 skewfromrightshort fadeout tp-resizeme rs-parallaxlevel-10"--}}
            {{--data-x="900"--}}
            {{--data-y="232"--}}
            {{--data-speed="500"--}}
            {{--data-start="3200"--}}
            {{--data-easing="Power3.easeInOut"--}}
            {{--data-splitin="chars"--}}
            {{--data-splitout="none"--}}
            {{--data-elementdelay="0.1"--}}
            {{--data-endelementdelay="0.1"--}}
            {{--data-endspeed="300"--}}
            {{--style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Sylhet!--}}
            {{--</div>--}}
            <!-- LAYER NR. 5 -->
                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="933"
                     data-y="300"
                     data-speed="300"
                     data-start="4000"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">Upcoming Event
                </div>
                <!-- LAYER NR. 6 -->
                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="902"
                     data-y="300"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="4000"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                </div>
                <!-- LAYER NR. 7 -->
                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                     data-x="911"
                     data-y="306"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="4200"
                     data-easing="Power3.easeInOut"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 8;"><img src="{!! asset('frontend/img/dummy.png') !!}" alt="" data-ww="17" data-hh="17" data-lazyload="{!! asset('frontend/img/check.png') !!}">
                </div>
                <!-- LAYER NR. 8 -->
                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="933"
                     data-y="340"
                     data-speed="300"
                     data-start="4500"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Recent News
                </div>
                <!-- LAYER NR. 9 -->
                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="902"
                     data-y="340"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="4500"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                </div>
                <!-- LAYER NR. 10 -->
                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                     data-x="911"
                     data-y="347"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="4700"
                     data-easing="Power3.easeInOut"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 11;"><img src="{!! asset('frontend/img/dummy.png') !!}" alt="" data-ww="17" data-hh="17" data-lazyload="{!! asset('frontend/img/check.png') !!}">
                </div>
                <!-- LAYER NR. 11 -->
                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="933"
                     data-y="380"
                     data-speed="300"
                     data-start="5000"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;">Album
                </div>
                <!-- LAYER NR. 12 -->
                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="902"
                     data-y="380"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="5000"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 13; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                </div>
                <!-- LAYER NR. 13 -->
                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                     data-x="911"
                     data-y="386"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="5200"
                     data-easing="Power3.easeInOut"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 14;"><img src="{!! asset('frontend/img/dummy.png') !!}" alt="" data-ww="17" data-hh="17" data-lazyload="{!! asset('frontend/img/check.png') !!}">
                </div>
            </li>
            <!-- /THE FIRST SLIDE -->
            @endforeach
        @else



            <!-- THE RESPONSIVE SLIDE -->
            <li data-transition="fade" data-slotamount="1" data-masterspeed="300">
                <img src="{!! asset('frontend/img/slider/slider-bg-2.jpg') !!}" data-fullwidthcentering="on" alt="">
                <div class="caption large_text sft"
                     data-x="660"
                     data-y="54"
                     data-speed="300"
                     data-start="800"
                     data-easing="easeOutExpo"  >{!! $dept->name !!}</div>
                {{--<div class="caption medium_text sfl"--}}
                     {{--data-x="689"--}}
                     {{--data-y="92"--}}
                     {{--data-speed="300"--}}
                     {{--data-start="1100"--}}
                     {{--data-easing="easeOutExpo"  >AND</div>--}}
                {{--<div class="caption large_text sfr"--}}
                     {{--data-x="738"--}}
                     {{--data-y="88"--}}
                     {{--data-speed="300"--}}
                     {{--data-start="1100"--}}
                     {{--data-easing="easeOutExpo"  ><span class="dblue">RESPONSIVE</span></div>--}}
                <!-- LAYER NR. 5 1 -->
                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="691"
                     data-y="220"
                     data-speed="300"
                     data-start="1000"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">Committee
                </div>
                <!-- LAYER NR. 6 1 -->
                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="660"
                     data-y="220"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="1200"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                </div>
                <!-- LAYER NR. 7 1 -->
                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                     data-x="669"
                     data-y="232"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="1500"
                     data-easing="Power3.easeInOut"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 8;"><img src="{!! asset('frontend/img/dummy.png') !!}" alt="" data-ww="17" data-hh="17" data-lazyload="{!! asset('frontend/img/check.png') !!}">
                </div>
                <!-- LAYER NR. 5 1 -->
                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="691"
                     data-y="260"
                     data-speed="300"
                     data-start="1500"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">Album
                </div>
                <!-- LAYER NR. 6 1 -->
                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="660"
                     data-y="260"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="1700"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                </div>
                <!-- LAYER NR. 7 1 -->
                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                     data-x="669"
                     data-y="272"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="2000"
                     data-easing="Power3.easeInOut"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 8;"><img src="{!! asset('frontend/img/dummy.png') !!}" alt="" data-ww="17" data-hh="17" data-lazyload="{!! asset('frontend/img/check.png') !!}">
                </div>
                <!-- LAYER NR. 5 -->
                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="691"
                     data-y="300"
                     data-speed="300"
                     data-start="2000"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">Event Registration
                </div>
                <!-- LAYER NR. 6 -->
                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="660"
                     data-y="300"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="2000"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                </div>
                <!-- LAYER NR. 7 -->
                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                     data-x="669"
                     data-y="306"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="2200"
                     data-easing="Power3.easeInOut"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 8;"><img src="{!! asset('frontend/img/dummy.png') !!}" alt="" data-ww="17" data-hh="17" data-lazyload="{!! asset('frontend/img/check.png') !!}">
                </div>
                <!-- LAYER NR. 8 -->
                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="691"
                     data-y="340"
                     data-speed="300"
                     data-start="2500"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Society Profile
                </div>
                <!-- LAYER NR. 9 -->
                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="660"
                     data-y="340"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="2500"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                </div>
                <!-- LAYER NR. 10 -->
                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                     data-x="669"
                     data-y="347"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="2700"
                     data-easing="Power3.easeInOut"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 11;"><img src="{!! asset('frontend/img/dummy.png') !!}" alt="" data-ww="17" data-hh="17" data-lazyload="{!! asset('frontend/img/check.png') !!}">
                </div>
                <!-- LAYER NR. 11 -->
                <div class="tp-caption black_bold_bg_20 sfr fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="691"
                     data-y="380"
                     data-speed="300"
                     data-start="3000"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;">Recent News
                </div>
                <!-- LAYER NR. 12 -->
                <div class="tp-caption greenbox30 customin fadeout tp-resizeme rs-parallaxlevel-10"
                     data-x="660"
                     data-y="380"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="3000"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 13; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                </div>
                <!-- LAYER NR. 13 -->
                <div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-10"
                     data-x="669"
                     data-y="386"
                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="300"
                     data-start="3200"
                     data-easing="Power3.easeInOut"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 14;"><img src="{!! asset('frontend/img/dummy.png') !!}" alt="" data-ww="17" data-hh="17" data-lazyload="{!! asset('frontend/img/check.png') !!}">
                </div>
                <div class="caption lfl"
                     data-x="53"
                     data-y="30"
                     data-speed="300"
                     data-start="1400"
                     data-easing="easeOutExpo">
                    <img src="{!! asset('frontend/img/slider/responsive-imac.png') !!}"  width="550px" height="400px" alt="iMac Responsive">
                </div>
                {{--<div class="caption lfl"--}}
                {{--data-x="323"--}}
                {{--data-y="145"--}}
                {{--data-speed="300"--}}
                {{--data-start="1500"--}}
                {{--data-easing="easeOutExpo">--}}
                {{--<img src="{!! asset('frontend/img/slider/responsive-ipad.png') !!}" alt="iPad Responsive">--}}
                {{--</div>--}}
                {{--<div class="caption lfl"--}}
                {{--data-x="472"--}}
                {{--data-y="253"--}}
                {{--data-speed="300"--}}
                {{--data-start="1600"--}}
                {{--data-easing="easeOutExpo">--}}
                {{--<img src="{!! asset('frontend/img/slider/responsive-iphone.png') !!}" alt="iPhone Responsive">--}}
                {{--</div>--}}
            </li>
            @endif
        </ul>
    </div>
</div>
<!-- Slider -->



































