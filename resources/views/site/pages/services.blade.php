<div class="container">
    <div id="about" class="ult-responsive row ptb-80">
        <div class="nt-column col-sm-12 col-lg-12 col-md-12">
            <div class="nt-column-inner">
                <div class="nt-wrapper  ">
                    <div class="site-heading text-center sec_title_1541558741737">
                        <h2>خدمات کلینیک مروارید</h2>


                    </div>
                    <div class="row vc_custom_1547237921607 nt_column_1541184178971 nt_inner_row-has-responsive-data"
                         data-res-css="@media (max-width: 992px) {.nt_column_1541184178971{ margin-top: 0px !important; }}">

                        @foreach($data['services'] as $post)




                            <div class="nt-column col-sm-4 equal-height">
                                <div class="nt-column-inner  ">
                                    <div class="nt-wrapper ">
                                        <div class="about-area features_402 "
                                             data-res-css=".features_402.primary-bg .item{ background-color:#4ac4f3; }">
                                            <div class="services-info">
                                                <div class="item"><img src="{{url($post->image_path)}}">
                                                    <h4> {{$post->title}} </h4>
                                                    <p>{{$post->abstract_content}}</p>
                                                    <a class="btn circle btn-theme border btn-sm" href="{{route('content',['category'=>'خدمات','slug'=>$post->slug])}}">    بیشتر </a>
                                                </div>


                                            </div>
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
</div>


