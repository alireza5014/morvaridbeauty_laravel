<div class="container">
    <div id="pricing" data-vc-full-width="true" data-vc-full-width-init="false"
         class="ult-responsive row ptb-80 vc_custom_1547262383704 vc_row-has-fill">
        <div class="nt-column col-sm-12 col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">
            <div class="nt-column-inner">
                <div class="nt-wrapper  ">
                    <div class="site-heading text-center sec_title_1541174613642"><h2>پکیج های ما</h2>

                    </div>
                </div>
            </div>
        </div>


        @foreach($data['pricing'] as $price)
            <div class="nt-column col-sm-12 col-lg-3 col-md-3 nt_col-has-responsive-data">
                <div class="nt-column-inner">
                    <div class="nt-wrapper nt_column_1541374221174 "
                         data-res-css="@media (max-width: 992px) {.nt_column_1541374221174{ margin-bottom: 30px !important; }}">
                        <div class="pricing-area">
                            <div class="pricing-item text-center">
                                <ul>
                                    <li class="pricing-header"><h4>  {{$price->title}}</h4>
                                        <h2><sup>{{number_format($price->price)}}</sup>تومان </h2></li>

                                    @foreach($price->tariffe_items as $item)
                                        <li><i class="fas fa-check"></i> {{$item->title}}  <li>


                                    @endforeach
                                    <li class="footer"><a class="btn circle btn-theme border btn-sm"
                                                          href="{{url('')}}"> دریافت
                                            نوبت </a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
</div>

