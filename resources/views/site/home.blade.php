@extends('layouts.site.layout')

@section('header')

     <title> کلینیک لیزر موهای زائد مروارید ویژه بانوان در شهر قدس</title>


    <meta name="description" content="بزرگترین کلینیک لیزر موهای زائد در شهر قدس  با بروزترین دستگاه های لیزر در محیطی آرام ویژه بانوان شهر قدس">
    <meta name="keywords" content="لیزر خوب در شهر قدس ،مراکز لیزر با دستگاه دایود ،مرکز لیزر در شهرقدس ،  لیزر موهای زائد ویژه بانوان شهر قدس  ، لیزر موهای زاید ، کلینیک در شهر قدس ، لیزر مو در شهر قدس"/>
     @parent

@endsection
@section('content')

     <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
         class="ult-responsive row vc_row-no-padding vc_row-o-full-height vc_row-o-columns-middle vc_row-o-equal-height vc_row-flex">
        <div class="nt-column col-sm-12">
            <div class="nt-column-inner">
                <div class="nt-wrapper  ">
                    <div class="banner-area content-double shape-line bg-theme-small normal-text banner_1541804">
                        <div class="box-table">
                            <div class="box-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="double-items">
                                            <div class="col-lg-5 col-md-5 left-info simple-video">
                                                <div class="content"><h1> بزرگترین کلینیک پوست و مو و لیزر در شهرقدس</h1>
                                                    <p>انجام کلیه خدمات زیبایی پوست و مو ویژه بانوان</p>

                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-7 right-info"><img
                                                    src="{{url('images/slider/8FFGgfiDcb_main_image.png')}}" alt="app-4.png'"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wavesshape"><img src=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
   @include('site.pages.about-us')

     @include('site.pages.services')


     @include('site.pages.pricing')


     <div class="container">
        <div data-vc-full-width="true" data-vc-full-width-init="false"
             class="ult-responsive row ptb-80 vc_custom_1547397852860 vc_row-has-fill nt_row_1541265989964 nt_row-has-responsive-data"
             data-res-css="@media (max-width: 768px) {.nt_row_1541265989964{ padding-bottom: 20px !important; }}">
            <div class="nt-column col-sm-12 col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">
                <div class="nt-column-inner">
                    <div class="nt-wrapper  ">
                        <div class="site-heading text-center sec_title_1541810521576"><h2>آخرین اخبار  و مطالب</h2>
                          </div>
                    </div>
                </div>
            </div>
            <div class="nt-column col-sm-12">
                <div class="nt-column-inner">
                    <div class="nt-wrapper  vc_custom_1547397944343">
                        <div class="blog-area blog_posts_1541950366596">
                            <div class="blog-items">
                                @foreach($posts as $post)

                                <div id="post-{{$post->id}}"
                                     class="col-lg-4 col-md-4 nt-post  post-482 post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-post tag-theme tag-green tag-black tag-ninetheme  c-blog-1-item  nt-post-class">
                                    <div class="item text-left">
                                        <div class="thumb"><a href="{{route('content',['category'=>$post->category->slug,'slug'=>$post->slug])}}"><img
                                                    src="{{url($post->image_path)}}" alt="{{$post->title}}"/>
                                                <div class="post-type"><i class="fas fa-image"></i></div>
                                            </a></div>
                                        <div class="info"><h4><a href="{{route('content',['category'=>$post->category->slug,'slug'=>$post->slug])}}">{{$post->title}}</a></h4>
                                            <div class="meta">
                                                <ul>
                                                    <li><a  class="post-date"><i
                                                                class="fa fa-calendar"></i>  {{$post->created_at}}</a></li>
                                                    <li><a   class="post-author"><i
                                                                class="fa fa-user"></i> مدیر</a></li>
                                                    <li><a class="post-comment"  ><i class="fa fa-comments"></i> 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p> {{$post->abstract_content}} </p>
                                        </div>
                                    </div>
                                </div>
                               @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
    </div>
    <div class="container">
        <div data-vc-full-width="true" data-vc-full-width-init="false" class="ult-responsive row ptb-80">
            <div class="nt-column col-sm-12 col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">
                <div class="nt-column-inner">
                    <div class="nt-wrapper  ">
                        <div class="site-heading text-center single sec_title_1541999571855"><h2>نظرات مشنریان در موردكلينيك ليزر مروارید </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nt-column col-sm-12 col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 nt_col-has-responsive-data">
                <div class="nt-column-inner">
                    <div class="nt-wrapper nt_column_1541843622149 "
                         data-res-css="@media (max-width: 992px) {.nt_column_1541843622149{ margin-bottom: 30px !important; }}">
                        <div class="testimonials-area testimonial_1541378529083">
                            <div class="testimonial-items text-center">
                                <div class="carousel slide" data-ride="carousel" data-interval="500000"
                                     id="testimonial-carousel">
                                    <div class="carousel-inner">
                                        <div class="item active"><span class="quote"></span>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                                لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                                                ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته</p><h4>محمد
                                                نوری</h4><span class="position">مدیر عامل شرکت </span></div>
                                        <div class="item"><span class="quote"></span>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                                لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                                                ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته</p><h4>سینا
                                                قبادی</h4><span class="position">مدیر</span></div>
                                        <div class="item"><span class="quote"></span>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                                لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                                                ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته</p><h4>پویا
                                                میلادی</h4><span class="position">توسعه دهنده</span></div>
                                    </div>
                                    <ol class="carousel-indicators">
                                        <li data-target="#testimonial-carousel" data-slide-to="0" class="active"><img
                                                src="{{url('wp-content/uploads/2019/01/2-100x100.jpg')}}" alt="2.jpg')}}"></li>
                                        <li data-target="#testimonial-carousel" data-slide-to="1"><img
                                                src="{{url('wp-content/uploads/2019/01/6-100x100.jpg')}}" alt="6.jpg')}}"></li>
                                        <li data-target="#testimonial-carousel" data-slide-to="2"><img
                                                src="{{url('wp-content/uploads/2019/01/8-100x100.jpg')}}" alt="8.jpg')}}"></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
    </div>


     @include('site.pages.faq')


@endsection
