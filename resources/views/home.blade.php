@extends('layouts.front')
@section('title') {{$homesetting->meta_title}} @endsection
@section('meta') {{$homesetting->meta_description}} @endsection
@section('content')

    <div data-server-rendered="true" id="__nuxt" @if($currentLang->rtl == 1) dir="ltr" @endif>
        <div id="__layout">
            <div class="page-wrapper">
                @foreach($sliders as $slido)
                    <div id="dirty-talk" class="standard relative project-box project-hover" data-v-5cab565f="" data-v-e6de1118="" data-v-72b3940d="">
                        <a href="">
                            <video  loop="loop" muted="" playsinline="" autoplay="autoplay" preload="none" class="video video-thumbnail" style="width: 100%; margin-top: -4%">
                                <source src="{{$slido->photo ? '/images/media/' . $slido->photo->file : '/img/200x200.png'}}"/>
                            </video>
                        </a>
                        <div class="info" data-v-c3ddceb6="" data-v-5cab565f="">
                            <a href="/project/dirty-talk" class="title" data-v-c3ddceb6="">
                                <svg width="7" height="8" viewbox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg" class="title__svg title__svg--play" data-v-c3ddceb6="">
                                    <path
                                        d="M0.929688 7.60938C1.09375 7.60938 1.23828 7.55078 1.41797 7.44531L6.03125 4.77734C6.36719 4.58203 6.50781 4.42969 6.50781 4.18359C6.50781 3.9375 6.36719 3.78906 6.03125 3.58984L1.41797 0.921875C1.23828 0.816406 1.09375 0.757812 0.929688 0.757812C0.609375 0.757812 0.382812 1.00391 0.382812 1.39062V6.97656C0.382812 7.36719 0.609375 7.60938 0.929688 7.60938Z"
                                        fill="#fff"
                                        data-v-c3ddceb6=""
                                    ></path>
                                </svg>
                                <span data-v-c3ddceb6="">Dirty Talk - Wild </span>
                            </a>
                            <div class="author-category" data-v-c3ddceb6="">
                                <span class="author-category__author" data-v-c3ddceb6=""><a href="/artist/stink-rising-dylan-holmes-williams" class="author-link" data-v-c3ddceb6="">Dylan Holmes Williams </a> / </span>
                                <span class="author-category__category" data-v-c3ddceb6="">Commercial </span>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!---->
                <!---->
            </div>
            <div class="about-section">
                    <div class="container">
                        <div class="row" style="padding: 8% !important">
                            <div class="col-md-7">
                                <div class="pictures-row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="item-about">
                                                <div class="imgone big-paral">
                                                    <div class="simpleParallax"><img src="/public/img/loading-blog.gif" width="500" height="666" class="lazy thumparallax-down img-fluid" data-src="{{$homesetting->about_image1}}" alt="two-images-1.jpg"></div>
                                                </div>
                                                <div class="exp-about">
                                                    <h5 class="nmb-font-about">{{$homesetting->about_yearstitle}}</h5>
                                                    <h6 class="service_summary-about">{{$homesetting->about_yearstext}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="item-about">
                                                <div class="imgtwo big-paral">
                                                    <div class="simpleParallax"><img src="/public/img/loading-blog.gif" width="500" height="820" class="lazy thumparallax img-fluid" data-src="{{$homesetting->about_image2}}" alt="two-images-1.jpg"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-md-5">

                                <h4 class="about-heading1-home">{!!$homesetting->about_subtitle!!}</h4>
                                <h3 class="about-heading2-home">{!!$homesetting->about_title!!}</h3>

                                {!!$homesetting->about_description!!}

                                <a href="{{$homesetting->about_buttonlink}}" target="_self" class="btn btn-style1"><span>{{$homesetting->about_buttontext}}</span></a>

                            </div>


                        </div>
                    </div>
                </div>
        </div>

        <div data-v-72b3940d=""></div>

        <div data-v-72b3940d=""><!----></div>
        <div data-v-72b3940d=""><!----></div>
        <div data-v-72b3940d="">
            <div data-v-72b3940d="">
              <div class="container">
                  <div class="row">
                      @foreach($projects as $project)
{{--                          {{dd($project)}}--}}
                          <div class="col-md-4">
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
                                          <span class="author-category__author" data-v-c3ddceb6=""><a href="/artist/stink-rising-wesley-joseph" class="author-link" data-v-c3ddceb6="">{{$project->date}}</a> / </span>
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

