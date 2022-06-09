<script type="text/javascript"> if(navigator.userAgent.match(/(Android|iPod|iPhone|iPad|BlackBerry|IEMobile|Opera Mini)/))
    { document.body.className += " using-mobile-browser "; } </script>
<div class="ocm-effect-wrap" @if($currentLang->rtl == 1) dir="ltr" @endif>
    <div class="ocm-effect-wrap-inner">
        <div id="ajax-content-wrap">
            <div class="container-wrap">
                <div class="container main-content">
                    <div class="row">
                        <script>
                            jQuery(document).ready(function($){

                                var figure = $(".vert-center").hover(hoverVideo, hideVideo);

                                function hoverVideo(e) {
                                    $('video', this).get(0).play();
                                }

                                function hideVideo(e) {
                                    $('video', this).get(0).pause();
                                    $('video', this).get(0).currentTime = 0;
                                }

                            });
                        </script>
                        <div id="fws_62a0cfd71a7a0"   data-column-margin="default" data-midnight="dark"
                             data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row top-level full-width-ns standard_section "
                             style="padding-top: 0px; padding-bottom: 0px; ">
                            <div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false">
                                <div class="inner-wrap">
                                    <div class="row-bg"  style=""></div>
                                </div>
                                <div class="row-bg-overlay" ></div>
                            </div>
                            <div class="col span_12 dark left">
                                <div  class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding"
                                      data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation=""
                                      data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color=""
                                      data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1"
                                      data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0" >
                                    <div class="vc_column-inner" >
                                        <div class="column-bg-overlay-wrap" data-bg-animation="none">
                                            <div class="column-bg-overlay"></div>
                                        </div>
                                        <div class="wpb_wrapper">
                                            @foreach( $sliders as $slido )
                                                <div data-transition="fade" data-overall_style="classic"
                                                     data-flexible-height="" data-animate-in-effect="none" data-fullscreen="true" data-button-sizing="large"
                                                     data-button-styling="btn_with_count" data-autorotate="10700" data-parallax="false" data-parallax-disable-mobile=""
                                                     data-caption-trans="fade_in_from_bottom" data-parallax-style="bg_only" data-bg-animation="none" data-full-width="true"
                                                     class="nectar-slider-wrap " id="nectar-slider-instance-1">

                                                    <div class="swiper-container"  data-tho="auto" data-tco="auto"
                                                         data-pho="auto" data-pco="auto" data-loop="false" data-height="650"
                                                         data-min-height="" data-arrows="false" data-bullets="false" data-bullet_style="see_through" data-bullet_position="bottom"
                                                         data-desktop-swipe="false" data-settings="">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide" data-desktop-content-width="auto" data-tablet-content-width="auto" data-bg-alignment="center" data-color-scheme="light" data-x-pos="left" data-y-pos="middle" >
                                                                <div class="container">
                                                                    <div class="content">
                                                                        <h2 class="@if($slido->typed_text) typed_active @endif">{!!$slido->heading2!!}</h2>
                                                                        @if($slido->typed_text)
                                                                            <script type="text/javascript">
                                                                                var arr = {!!$slido->typed_text!!};
                                                                            </script>
                                                                        @endif
                                                                        <div class="buttons">
                                                                            <div class="button transparent">
                                                                                <a class="pp primary-color" href="https://player.vimeo.com/video/379784569">Watch our show-reel</a>
                                                                            </div>
                                                                        </div>
                                                                    </div></div>
                                                                <!--/container-->
                                                                <a href="#" class="slider-down-arrow">
                                                                    <i class="icon-salient-down-arrow icon-default-style"> <span class="ie-fix"></span> </i>
                                                                </a>
                                                                <div class="video-texture "> <span class="ie-fix"></span> </div>
                                                                <div class="mobile-video-image" style="background-image: url(https://www.finalkid.com/wp-content/uploads/2019/11/FK_Wallpaper_01.jpg)">
                                                                    <span class="ie-fix"></span>  </div>
                                                                <div class="slide-bg-wrap">
                                                                    <div class="video-wrap">
                                                                        <video class="slider-video" width="1800" height="700" preload="auto" loop autoplay muted playsinline>
                                                                            <source type="video/mp4" src="{{$slido->photo ? '/images/media/' . $slido->photo->file : '/img/200x200.png'}}">
                                                                        </video>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--/swiper-slide-->
                                                        </div>
                                                        <div class="nectar-slider-loading ">
                                                            <span class="loading-icon none">   </span>Z
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="fws_62a0cfd71d31a"  data-column-margin="default" data-midnight="light"  data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row full-width-section vc_row-o-full-height vc_row-o-columns-middle vc_row-o-equal-height vc_row-flex standard_section "  style="padding-top: 0px; padding-bottom: 0px; "><div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false"><div class="inner-wrap using-image"><div class="row-bg using-image"  style="background-image: url(https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/11/web_page01-3.jpg?fit=1920%2C1080&#038;ssl=1); background-position: left top; background-repeat: no-repeat; "></div></div><div class="row-bg-overlay" ></div></div><div class="col span_12 light left">
                                <div  class="vc_col-sm-2/5 wpb_column column_container vc_column_container col padding-6-percent"  data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="top" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0" >
                                    <div class="vc_column-inner" ><div class="column-bg-overlay-wrap" data-bg-animation="none"><div class="column-bg-overlay"></div></div>
                                        <div class="wpb_wrapper">
                                            <div class="divider-wrap" data-alignment="default"><div style="height: 25px;" class="divider"></div></div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <h1></h1>
                                                    <h1>Impact is a creative production company based in Amsterdam specialised in emotive filmmaking all over the world.</h1>
                                                </div>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <p>We are a vibrant collective of creatives. Delivering you the full package of production and services that go with in-house filmmaking. Always at the forefront of technology and currently pioneering 8K HDR delivery.</p>
                                                    <p>A strong concept, a professional team, beautiful cinematography, the perfect soundtrack and a vivid color grade. It’s the balance between visual storytelling and a seamless (edit) flow that makes our work unique. We create experience films with all the right feels, as if you are there.</p>
                                                </div>
                                            </div>
                                            <a href="https://www.youtube.com/watch?v=OoC1-vgYRdQ" data-color-override="false"
                                               data-style="default" data-parent-hover="" data-font-style="p" data-color="transparent-accent-color" class="nectar-button large nectar_video_lightbox pp"><span>Watch our reel</span></a><div class="divider-wrap" data-alignment="default"><div style="height: 40px;" class="divider"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="fws_62a0cfd71e76d"  data-column-margin="default" data-midnight="dark"  data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row full-width-section standard_section " data-using-ctc="true" style="padding-top: 0px; padding-bottom: 0px; color: #e8e8e8; "><div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false"><div class="inner-wrap"><div class="row-bg"  style=""></div></div><div class="row-bg-overlay" ></div></div><div class="col span_12 custom left">
                                <div  class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding"  data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0" >
                                    <div class="vc_column-inner" ><div class="column-bg-overlay-wrap" data-bg-animation="none"><div class="column-bg-overlay"></div></div>
                                        <div class="wpb_wrapper">
                                            <div class="portfolio-wrap ">
                                                <span class="portfolio-loading  none">   </span>
                                                <div class="row portfolio-items masonry-items   constrain-max-cols"  data-masonry-type="default" data-ps="7" data-starting-filter="" data-gutter="default" data-categories-to-show="feed" data-bypass-cropping="" data-lightbox-only="true" data-col-num="elastic">
                                                    @foreach($projects as $project)
                                                        <div class="col elastic-portfolio-item wide element feed "  data-project-cat="feed " data-default-color="true" data-title-color="" data-subtitle-color="">
                                                            <div class="inner-wrap animated" data-animation="perspective">
                                                                <div class="work-item style-2" data-custom-content="on">
                                                                    <img class="size-wide skip-lazy" src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/01/Dreams-x-Seoul-2.jpg?resize=1000%2C500&#038;ssl=1"
                                                                         alt height="500" width="1000" srcset="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/01/Dreams-x-Seoul-2.jpg?resize=1000%2C500&amp;ssl=1 1000w,
                                                                                                                    https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/01/Dreams-x-Seoul-2.jpg?resize=670%2C335&amp;ssl=1 670w"
                                                                         sizes="(min-width: 1000px) 50vw, (min-width: 690px) 100vw, 100vw">
                                                                    <div class="work-info-bg"></div>
                                                                    <div class="work-info">
                                                                        <div class="vert-center">
                                                                            <div class="custom-content">
                                                                                <a class="default-link gallery magnific" href="https://vimeo.com/326057428?iframe=true" target="_blank" rel="noopener">
                                                                                    <video class="thevideo" preload="none" loop="loop" muted="muted" width="100%" height="auto">
                                                                                        <source src="{{$project->photo ? '/images/video/' . $project->photo->file : '/img/200x200.png'}}" type="video/mp4;" />
                                                                                    </video>
                                                                                </a>
                                                                            </div>
                                                                        </div><!--/vert-center-->
                                                                    </div>
                                                                </div><!--work-item-->
                                                            </div><!--/inner-wrap-->
                                                        </div><!--/col-->
                                                    @endforeach

                                                </div><!--/portfolio-->
                                            </div><!--/portfolio wrap-->


                                        </div>
                                    </div>
                                </div>
                            </div></div>


                        <div id="fws_62a0cfd723e9a"  data-column-margin="default" data-midnight="light"  data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row full-width-section standard_section "  style="padding-top: 0px; padding-bottom: 0px; "><div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false"><div class="inner-wrap"><div class="row-bg using-bg-color"  style="background-color: #000000; "></div></div><div class="row-bg-overlay" ></div></div><div class="col span_12 light left">
                                <div  class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding"  data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0" >
                                    <div class="vc_column-inner" ><div class="column-bg-overlay-wrap" data-bg-animation="none"><div class="column-bg-overlay"></div></div>
                                        <div class="wpb_wrapper">

                                            <div class="carousel-wrap">
                                                <div class="row carousel clients six-cols fade-in-animation" data-he="greyscale_to_color" data-additional_padding="4" data-max="6">
                                                    <div class="no-link"><img src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/03/New-Project-10.png?fit=1200%2C1200&#038;ssl=1" width="1200" height="1200" alt="client" data-lazy-src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/03/New-Project-10.png?fit=1200%2C1200&amp;is-pending-load=1#038;ssl=1" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class=" jetpack-lazy-image"><noscript><img src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/03/New-Project-10.png?fit=1200%2C1200&#038;ssl=1" width="1200" height="1200" alt="client" /></noscript></div>
                                                    <div class="no-link"><img src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/03/New-Project-9.png?fit=1200%2C1200&#038;ssl=1" width="1200" height="1200" alt="client" data-lazy-src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/03/New-Project-9.png?fit=1200%2C1200&amp;is-pending-load=1#038;ssl=1" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class=" jetpack-lazy-image"><noscript><img src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/03/New-Project-9.png?fit=1200%2C1200&#038;ssl=1" width="1200" height="1200" alt="client" /></noscript></div>
                                                    <div class="no-link"><img src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/11/resistance-1.png?fit=1200%2C1200&#038;ssl=1" width="1200" height="1200" alt="client" data-lazy-src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/11/resistance-1.png?fit=1200%2C1200&amp;is-pending-load=1#038;ssl=1" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class=" jetpack-lazy-image"><noscript><img src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/11/resistance-1.png?fit=1200%2C1200&#038;ssl=1" width="1200" height="1200" alt="client" /></noscript></div>
                                                    <div class="no-link"><img src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/11/mndfck.png?fit=1200%2C1200&#038;ssl=1" width="1200" height="1200" alt="client" data-lazy-src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/11/mndfck.png?fit=1200%2C1200&amp;is-pending-load=1#038;ssl=1" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class=" jetpack-lazy-image"><noscript><img src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/11/mndfck.png?fit=1200%2C1200&#038;ssl=1" width="1200" height="1200" alt="client" /></noscript></div>
                                                    <div class="no-link"><img src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/03/New-Project-6.png?fit=1200%2C1200&#038;ssl=1" width="1200" height="1200" alt="client" data-lazy-src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/03/New-Project-6.png?fit=1200%2C1200&amp;is-pending-load=1#038;ssl=1" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class=" jetpack-lazy-image"><noscript><img src="https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/03/New-Project-6.png?fit=1200%2C1200&#038;ssl=1" width="1200" height="1200" alt="client" /></noscript></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/row-->
                </div><!--/container-->
            </div><!--/container-wrap-->

        </div> <!--/ajax-content-wrap-->
    </div>
</div>
