
 <!-- The Scripts -->

{{--{!! Html::script('frontend/js/jquery.min.js') !!}--}}
 {!! Html::script('js/jquery-2.1.1.js') !!}
{!! Html::script('frontend/js/jquery-migrate-1.0.0.js') !!}
{!! Html::script('frontend/js/jquery-ui.js') !!}
{!! Html::script('frontend/js/bootstrap.js') !!}
{!! Html::script('frontend/js/revolution-slider/js/jquery.themepunch.plugins.min.js') !!}
{!! Html::script('frontend/js/revolution-slider/js/jquery.themepunch.revolution.min.js') !!}
{!! Html::script('frontend/js/jquery.parallax.js') !!}
{!! Html::script('frontend/js/jquery.wait.js') !!}
{!! Html::script('frontend/js/fappear.js') !!}
{!! Html::script('frontend/js/modernizr-2.6.2.min.js') !!}
{!! Html::script('frontend/js/jquery.bxslider.min.js') !!}
{!! Html::script('frontend/js/jquery.prettyPhoto.js') !!}
{!! Html::script('frontend/js/superfish.js') !!}
{!! Html::script('frontend/js/tweetMachine.js') !!}
{!! Html::script('frontend/js/tytabs.js') !!}
{!! Html::script('frontend/js/jquery.gmap.min.js') !!}
{!! Html::script('frontend/js/jquery.sticky.js') !!}
{!! Html::script('frontend/js/jquery.countTo.js') !!}
{!! Html::script('frontend/js/jflickrfeed.js') !!}
{!! Html::script('frontend/js/imagesloaded.pkgd.min.js') !!}
{!! Html::script('frontend/js/waypoints.min.js') !!}
{!! Html::script('frontend/js/wow.js') !!}
{!! Html::script('frontend/js/jquery.fitvids.js') !!}
{!! Html::script('frontend/js/spectrum.js') !!}
{!! Html::script('frontend/js/switcher.js') !!}
{!! Html::script('frontend/js/custom.js') !!}



 <!-- toastr -->
 {!! Html::script('js/plugins/toastr/toastr.min.js') !!}
 @include('includes.toastr')


 {{--<script>--}}
    {{--jQuery(document).ready(function() {--}}
        {{--jQuery('.tp-banner').show().revolution(--}}
                {{--{--}}
                    {{--dottedOverlay:"none",--}}
                    {{--delay:16000,--}}
                    {{--startwidth:1170,--}}
                    {{--startheight:620,--}}
                    {{--hideThumbs:200,--}}
                    {{--thumbWidth:100,--}}
                    {{--thumbHeight:50,--}}
                    {{--thumbAmount:5,--}}
                    {{--navigationType:"none",--}}
                    {{--navigationArrows:"solo",--}}
                    {{--navigationStyle:"preview4",--}}
                    {{--touchenabled:"on",--}}
                    {{--onHoverStop:"on",--}}
                    {{--swipe_velocity: 0.7,--}}
                    {{--swipe_min_touches: 1,--}}
                    {{--swipe_max_touches: 1,--}}
                    {{--drag_block_vertical: false,--}}
                    {{--parallax:"mouse",--}}
                    {{--parallaxBgFreeze:"on",--}}
                    {{--parallaxLevels:[10,7,4,3,2,5,4,3,2,1],--}}
                    {{--parallaxDisableOnMobile:"off",--}}
                    {{--keyboardNavigation:"off",--}}
                    {{--navigationHAlign:"center",--}}
                    {{--navigationVAlign:"bottom",--}}
                    {{--navigationHOffset:0,--}}
                    {{--navigationVOffset:20,--}}
                    {{--soloArrowLeftHalign:"left",--}}
                    {{--soloArrowLeftValign:"center",--}}
                    {{--soloArrowLeftHOffset:20,--}}
                    {{--soloArrowLeftVOffset:0,--}}
                    {{--soloArrowRightHalign:"right",--}}
                    {{--soloArrowRightValign:"center",--}}
                    {{--soloArrowRightHOffset:20,--}}
                    {{--soloArrowRightVOffset:0,--}}
                    {{--shadow:0,--}}
                    {{--fullWidth:"on",--}}
                    {{--fullScreen:"off",--}}
                    {{--spinner:"spinner4",--}}
                    {{--stopLoop:"off",--}}
                    {{--stopAfterLoops:-1,--}}
                    {{--stopAtSlide:-1,--}}
                    {{--shuffle:"off",--}}
                    {{--autoHeight:"off",--}}
                    {{--forceFullWidth:"off",--}}
                    {{--hideThumbsOnMobile:"off",--}}
                    {{--hideNavDelayOnMobile:1500,--}}
                    {{--hideBulletsOnMobile:"off",--}}
                    {{--hideArrowsOnMobile:"off",--}}
                    {{--hideThumbsUnderResolution:0,--}}
                    {{--hideSliderAtLimit:0,--}}
                    {{--hideCaptionAtLimit:0,--}}
                    {{--hideAllCaptionAtLilmit:0,--}}
                    {{--startWithSlide:0,--}}
                    {{--fullScreenOffsetContainer: ""--}}
                {{--});--}}
    {{--});--}}
{{--</script>--}}

@yield('script')