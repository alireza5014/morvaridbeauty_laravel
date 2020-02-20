<footer class="bg-light default-padding">


    <!-- Footer Widget Area -->
    <div class="nt-footer-sidebar footer-widget-area">
        <!-- container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="f-items">

                    <div class="widget_text col-lg-3 col-md-3 col-sm-6 equal-height item footer-widget">
                        <div class="widget_text f-item link footer-widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <div class="f-item twitter-widget">
                                    <h4>اطلاعات تماس</h4>
                                    <p>
                                        برای برقراری تماس با مدیریت کلینیک مروارید از راه های ارتباطی زیر استفاده کنید
                                    </p>
                                    <div class="address">
                                        <ul>

                                            <li>
                                                <div class="icon">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                                <div class="info">
                                                    <h5>ایمیل:</h5>
                                                    <span>morvaridbeauty.ir@gmail.com</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fas fa-mobile"></i>
                                                </div>
                                                <div class="info">
                                                    <h5>موبایل:</h5>
                                                    <a href="tel:09126145705">09120197244</a>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <i class="fas fa-phone"></i>
                                                </div>
                                                <div class="info">
                                                    <h5>تلفن:</h5>
                                                    <a href="tel:02146894217">02146894217</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget_text col-lg-3 col-md-3 col-sm-6 equal-height item footer-widget">
                        <div class="widget_text f-item link footer-widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <div class="f-item link">
                                    <h4> مطالب پربازدید</h4>
                                    <ul>
                                        <li>
                                            @foreach(\App\Model\Post::take(5)->with('category')->get(['title','slug','category_id']) as $post)
                                                <a href="{{route('content',['category'=>$post->category->slug,'title'=>$post->slug])}}"><i class="fas fa-angle-left"></i> {{$post->title}}</a>
                                            @endforeach
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget_text col-lg-3 col-md-3 col-sm-6 equal-height item footer-widget">
                        <div class="widget_text f-item link footer-widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <div class="f-item link">
                                    <h4>لینک های سریع</h4>
                                    <ul>

                                        <li>
                                            <a href="{{url('')}}"><i class="fas fa-angle-left"></i> خانه</a>
                                        </li>
                                        <li>
                                            <a href="{{url('site/about-us')}}"><i class="fas fa-angle-left"></i> درباره ما</a>
                                        </li>
                                        <li>
                                            <a href="{{url('site/contact-us')}}"><i class="fas fa-angle-left"></i> تماس با ما</a>
                                        </li>

                                        <li>
                                            <a href="{{url('site/services')}}"><i class="fas fa-angle-left"></i> خدمات</a>
                                        </li>

                                        <li>
                                            <a href="{{url('site/pricing')}}"><i class="fas fa-angle-left"></i>   پکیج ها ما  </a>
                                        </li>





                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget_text col-lg-3 col-md-3 col-sm-6 equal-height item footer-widget">
                        <div class="widget_text f-item link footer-widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <div class="f-item">
                                    <h3>درباره  كلينيك  مروارید </h3>
                                    <p>
                                        كلينيك ليزر مروارید در سال 1390 تأسيس‌شده است كه تحت نظر پزشکان مجرب اقدام به لیزرموهای زاید نواحی مختلف بدن و صورت می نماید هم چنین با انجام دیگر کارهای متنوع به مشكلات زيبايي مي‌پردازد. وجه تمايز كلينيك ليزر مروارید با دیگر کلینیک های موجود در این منطقه اين است كه این کلینیک به صورت تمام وقت و حتی روزهای تعطیل اماده ارایه تمام خدمات مرتبط با پوست و مو می باشد
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->
    </div>
    <!-- End Footer Widget Area -->


    <div class="nt-footer footer-bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 nt-copyright">

                    <p><i class="fa fa-copyright"></i> تمامی حقوق برای این سایت <a href="#">محفوظ است.</a></p>
                </div>


            </div>
        </div>
    </div>


</footer>
