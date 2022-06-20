@extends('layouts.front')
@section('title') {{$homesetting->meta_title}} @endsection
@section('meta') {{$homesetting->meta_description}} @endsection
@section('content')

    <div data-server-rendered="true" id="__nuxt" @if($currentLang->rtl == 1) dir="ltr" @endif>
        <div id="__layout">
            <div class="page-wrapper">
                @foreach($sliders as $slider)
{{--                    {{dd($slider)}}--}}
                    <div id="dirty-talk" class="standard relative project-box project-hover" data-v-5cab565f="" data-v-e6de1118="" data-v-72b3940d="">
                        <a href="{{asset('/images/media/' . $slider->photo->file)}}">
                            <video  loop="loop" muted="" playsinline="" autoplay="autoplay" preload="none" class="video video-thumbnail" style="width: 100%; margin-top: -4%">
                                <source src="{{$slider->photo ? '/images/media/' . $slider->photo->file : '/img/200x200.png'}}"/>
                            </video>
                        </a>
                        <div class="info" data-v-c3ddceb6="" data-v-5cab565f="">
                            <a href="{{asset('/images/media/' . $slider->photo->file)}}" class="title" data-v-c3ddceb6="">
                                <svg width="7" height="8" viewbox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg" class="title__svg title__svg--play" data-v-c3ddceb6="">
                                    <path
                                        d="M0.929688 7.60938C1.09375 7.60938 1.23828 7.55078 1.41797 7.44531L6.03125 4.77734C6.36719 4.58203 6.50781 4.42969 6.50781 4.18359C6.50781 3.9375 6.36719 3.78906 6.03125 3.58984L1.41797 0.921875C1.23828 0.816406 1.09375 0.757812 0.929688 0.757812C0.609375 0.757812 0.382812 1.00391 0.382812 1.39062V6.97656C0.382812 7.36719 0.609375 7.60938 0.929688 7.60938Z"
                                        fill="#fff"
                                        data-v-c3ddceb6=""
                                    ></path>
                                </svg>
                                <span data-v-c3ddceb6="">{{$slider->heading1}} </span>
                            </a>
                            <div class="author-category" data-v-c3ddceb6="">
                                <span class="author-category__author" data-v-c3ddceb6="">
                                    <a href="/artist/stink-rising-dylan-holmes-williams" class="author-link" data-v-c3ddceb6="">{{$slider->heading2}} </a>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!---->
                <!---->
            </div>


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
                            <div id="fws_62a237ed5e8f3"  data-column-margin="default" data-midnight="light"  data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row full-width-section vc_row-o-full-height vc_row-o-columns-middle vc_row-o-equal-height vc_row-flex standard_section "  style="padding-top: 0px; padding-bottom: 0px; "><div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false"><div class="inner-wrap using-image"><div class="row-bg using-image"  style="background-image: url(https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/11/web_page01-3.jpg?fit=1920%2C1080&#038;ssl=1); background-position: left top; background-repeat: no-repeat; "></div></div><div class="row-bg-overlay" ></div></div><div class="col span_12 light left">
                                    <div  class="vc_col-sm-2/5 wpb_column column_container vc_column_container col padding-6-percent"  data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="top" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0" >
                                        <div class="vc_column-inner" ><div class="column-bg-overlay-wrap" data-bg-animation="none"><div class="column-bg-overlay"></div></div>
                                            <div class="wpb_wrapper">
                                                <div class="divider-wrap" data-alignment="default"><div style="height: 25px;" class="divider"></div></div>
                                                <div class="wpb_text_column wpb_content_element " >
                                                    <div class="wpb_wrapper">
                                                        <h1></h1>
                                                        <h1>
                                                            @if($currentLang->rtl == 1)
                                                                نحن مجموعة نابضة بالحياة من المبدعين. نقدم لكم الحزمة الكاملة للإنتاج و
                                                                الخدمات التي تتماشى مع صناعة الأفلام في المنزل. دائما في طليعة التكنولوجيا و
                                                                الرائد حاليًا في تسليم 8K HDR.
                                                            @else
                                                                We are a vibrant collective of creatives. Delivering you the full package of production and
                                                                services that go with in-house filmmaking. Always at the forefront of technology and
                                                                currently pioneering 8K HDR delivery.
                                                            @endif
                                                        </h1>
                                                    </div>
                                                </div>

{{--                                                <div class="wpb_text_column wpb_content_element " >--}}
{{--                                                    <div class="wpb_wrapper">--}}
{{--                                                        <p>We are a vibrant collective of creatives. Delivering you the full package of production and services that go with in-house filmmaking. Always at the forefront of technology and currently pioneering 8K HDR delivery.</p>--}}
{{--                                                        <p>A strong concept, a professional team, beautiful cinematography, the perfect soundtrack and a vivid color grade. It’s the balance between visual storytelling and a seamless (edit) flow that makes our work unique. We create experience films with all the right feels, as if you are there.</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

                                                <br>

                                                <a href="{{asset('/images/media/' . $slider->photo->file)}}" data-color-override="false" data-style="default" data-parent-hover="" data-font-style="p"
                                                   data-color="transparent-accent-color" class="nectar-button large nectar_video_lightbox pp"><span>Watch our reel</span></a><div
                                                    class="divider-wrap" data-alignment="default"><div style="height: 40px;" class="divider"></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                            </div>
                        </div><!--/row-->
                    </div><!--/container-->
                </div><!--/container-wrap-->
            </div> <!--/ajax-content-wrap-->
        </div>

        <div data-v-72b3940d=""></div>

        <div data-v-72b3940d=""><!----></div>
        <div data-v-72b3940d=""><!----></div>
        <div data-v-72b3940d="">
            <div data-v-72b3940d="">
              <div class="container">
                  <div class="row" style="margin-top: 4%!important">
                      @foreach($projects as $project)
{{--                          {{dd($project)}}--}}
                          <div class="col-md-6">
                              <div id="cold-summer-hero" class="standard relative project-box project-hover" data-v-5cab565f="" data-v-18fe3d02="">
                                  <a href="{{URL::to('/')}}/project/{{$project->slug}}" data-v-5cab565f="" class="">
                                      <video  loop="loop" muted="" playsinline="" autoplay="autoplay" preload="none" class="video video-thumbnail" style="width: 100%; margin-top: -4%">
                                          <source src="{{ $project->photo ? '/images/video/' . $project->photo->file : '/img/200x200.png'}}" type="video/mp4;" />
                                      </video>
                                  </a>
                                  <div class="info" data-v-c3ddceb6="" data-v-5cab565f="">
                                      <a href="{{URL::to('/')}}/project/{{$project->slug}}" class="title" data-v-c3ddceb6="">
                                          <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg" class="title__svg title__svg--play" data-v-c3ddceb6="">
                                              <path
                                                  d="M0.929688 7.60938C1.09375 7.60938 1.23828 7.55078 1.41797 7.44531L6.03125 4.77734C6.36719 4.58203 6.50781 4.42969 6.50781 4.18359C6.50781 3.9375 6.36719 3.78906 6.03125 3.58984L1.41797 0.921875C1.23828 0.816406 1.09375 0.757812 0.929688 0.757812C0.609375 0.757812 0.382812 1.00391 0.382812 1.39062V6.97656C0.382812 7.36719 0.609375 7.60938 0.929688 7.60938Z"
                                                  fill="#fff"
                                                  data-v-c3ddceb6=""
                                              ></path>
                                          </svg>
                                          <span data-v-c3ddceb6="">{{$project->title}}</span>
                                      </a>
                                      <div class="author-category" data-v-c3ddceb6="">
                                          <span class="author-category__author" data-v-c3ddceb6=""><a href="{{asset('/images/video/' . $project->photo->file)}}" class="author-link" data-v-c3ddceb6="">{{$project->date}}</a> / </span>
                                          <span class="author-category__category" data-v-c3ddceb6="">Music Video</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
            </div>
        </div>

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
                    <div id="fws_62a237ed640a2"  data-column-margin="default" data-midnight="light"  data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row full-width-section vc_row-o-full-height vc_row-o-columns-top vc_row-o-equal-height vc_row-flex  vc_row-o-content-top standard_section "  style="padding-top: 0px; padding-bottom: 0px; "><div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false"><div class="inner-wrap using-image"><div class="row-bg using-image"  style="background-image: url(https://i0.wp.com/www.finalkid.com/wp-content/uploads/2019/11/web-page03-2.jpg?fit=1920%2C1080&#038;ssl=1); background-position: right center; background-repeat: no-repeat; "></div></div><div class="row-bg-overlay" ></div></div><div class="col span_12 light left">
                            <div  class="vc_col-sm-4 hiderow12 wpb_column column_container vc_column_container col no-extra-padding"  data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0" >
                                <div class="vc_column-inner2" ><div class="column-bg-overlay-wrap" data-bg-animation="none"><div class="column-bg-overlay"></div></div>
                                    <div class="wpb_wrapper">

                                    </div>
                                </div>
                            </div>

                            <div  class="vc_col-sm-3 hiderow12 wpb_column column_container vc_column_container col no-extra-padding"  data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0" >
                                <div class="vc_column-inner2" ><div class="column-bg-overlay-wrap" data-bg-animation="none"><div class="column-bg-overlay"></div></div>
                                    <div class="wpb_wrapper">

                                    </div>
                                </div>
                            </div>

                            <div style="margin-top: 4%; " class="vc_col-sm-4 about-fk-textbox wpb_column column_container vc_column_container col no-extra-padding"  data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="bottom" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0" >
                                <div class="vc_column-inner2" ><div class="column-bg-overlay-wrap" data-bg-animation="none"><div class="column-bg-overlay"></div></div>
                                    <div class="wpb_wrapper">

                                        <div class="wpb_text_column wpb_content_element " >
                                            <div class="wpb_wrapper">
                                                <h1>
                                                    @if($currentLang->rtl == 1)
                                                        مفهوم قوي ، فريق محترف ، تصوير سينمائي جميل ، موسيقى تصويرية رائعة
                                                        ودرجة لون زاهية.
                                                    @else
                                                        A strong concept, a professional team, beautiful cinematography, the perfect soundtrack
                                                        and a vivid color grade.
                                                    @endif
                                                </h1>
                                            </div>
                                        </div>




                                        <div class="wpb_text_column wpb_content_element " >
                                            <div class="wpb_wrapper">
                                                <p>
                                                    @if($currentLang->rtl == 1)
                                                        إنه التوازن بين رواية القصص المرئية وسلسلة (تحرير)
                                                        التدفق الذي يجعل عملنا فريدًا. نصنع أفلام تجربة بكل ما هو صحيح ، كما لو
                                                        انت هناك.
                                                    @else
                                                        It’s the balance between visual storytelling and a seamless (edit)
                                                        flow that makes our work unique. We create experience films with all the right feels, as if
                                                        you are there.
                                                    @endif
                                                </p>
                                            </div>
                                        </div>

                                        <a href="https://www.youtube.com/watch?v=OoC1-vgYRdQ" data-color-override="false" data-style="default" data-parent-hover="" data-font-style="p" data-color="transparent-accent-color" class="nectar-button large nectar_video_lightbox pp"><span>Watch the Documentary</span></a>
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

    <!--/ocm-effect-wrap-->
    <script>(function() {function maybePrefixUrlField() {
            if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                this.value = "http://" + this.value;
            }
        }
            var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
            if (urlFields) {
                for (var j=0; j < urlFields.length; j++) {
                    urlFields[j].addEventListener('blur', maybePrefixUrlField);
                }
            }
        })();
    </script>
@endsection

