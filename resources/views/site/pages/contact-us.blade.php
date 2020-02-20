<div class="container">
    <div id="contact" data-vc-full-width="true" data-vc-full-width-init="false" class="ult-responsive row ptb-80">
        <div class="nt-column col-sm-12 col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">
            <div class="nt-column-inner">
                <div class="nt-wrapper  ">
                    <div class="site-heading text-center sec_title_1541518419970"><h2>تماس با ما</h2>

                    </div>
                </div>
            </div>
        </div>
        <div class="nt-column col-sm-12 col-lg-7  col-md-7">
            <div class="nt-column-inner ">
                <div class="nt-wrapper  "><h2 class="nt_ch_1541130613680 capitalize fw-600 mb-30 vc_custom_heading"
                                              data-res-css="@media (max-width: 992px) {.nt_ch_1541130613680{ margin-top: 30px !important; }} .nt_ch_1541130613680{ text-align: right}">
                        لطفا پیام خود را ارسال نمایید</h2>


                    <div role="form" class="wpcf7" id="wpcf7-f608-p826-o2" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form id="mazzer-cform" class="mazzer-contact-form" action="{{url('site/insert_message')}}"
                              method="POST">
                            @csrf

                            <div class="contact-form">
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <span class="wpcf7-form-control-wrap text-613">
                                                <input type="text"
                                                       name="name" required
                                                       value="" size="40"
                                                       class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                       aria-required="true"
                                                       aria-invalid="false"
                                                       placeholder="نام"/></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <span class="wpcf7-form-control-wrap email-755"><input type="email" required
                                                                                                   name="email"
                                                                                                   value="" size="40"
                                                                                                   class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                                                                   aria-required="true"
                                                                                                   aria-invalid="false"
                                                                                                   placeholder="ایمیل"/></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="form-group comments">
                                            <span class="wpcf7-form-control-wrap textarea-500"><textarea required
                                                    name="message" cols="40" rows="10"
                                                    class="wpcf7-form-control wpcf7-textarea form-control"
                                                    aria-invalid="false"
                                                    placeholder="متن پیام"></textarea></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <input id="send_message_button" type="button" value="ارسال پیام"
                                               class="wpcf7-form-control wpcf7-submit submit-btn ladda-button btn  "/>
                                    </div>
                                </div>
                            </div>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="nt-column col-sm-12 col-lg-5 col-md-5">
            <div class="nt-column-inner">

                <div class="address-items list_559 vc_custom_1575964016392"
                     data-res-css=".list-info.list_559 i, .features-items.list_559 .icon i, .address-items.list_559 i{ color:!important; font-size:!important; line-height:!important; width:!important; height:!important; background-color:!important; }">
                    <i class="fas fa-phone"></i> <span><a href="tel:09120197244">09120197244</a></span></div>


                <div class="address-items list_559 vc_custom_1575964016392"
                     data-res-css=".list-info.list_559 i, .features-items.list_559 .icon i, .address-items.list_559 i{ color:!important; font-size:!important; line-height:!important; width:!important; height:!important; background-color:!important; }">
                    <i class="fas fa-phone"></i> <span><a href="tel:02146894217">02146894217</a></span></div>


                <div class="address-items list_133 vc_custom_1575964026274"
                     data-res-css=".list-info.list_133 i, .features-items.list_133 .icon i, .address-items.list_133 i{ color:!important; font-size:!important; line-height:!important; width:!important; height:!important; background-color:!important; }">
                    <i class="fas fa-envelope-open"></i> <span>morvaridbeauty.ir@gmail.com</span></div>


                <div class="address-items list_133 vc_custom_1575964026274"
                     data-res-css=".list-info.list_133 i, .features-items.list_133 .icon i, .address-items.list_133 i{ color:!important; font-size:!important; line-height:!important; width:!important; height:!important; background-color:!important; }">
                    <i class="fas fa-location-arrow"></i> <span>تهران شهر قدس شهرک ابریشم بلوار تولیدگران </span></div>




            </div>
        </div>
    </div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>



<script>
    $('#send_message_button').on('click', function (t) {
        t.preventDefault();
        $.ajax({

            method: 'POST',
            url: '{{route('insert_message')}}',
            data: $('#mazzer-cform').serialize(),
            success: function (data) {
                if (data.status ===200) {
                    $('#mazzer-cform')[0].reset()
                    toastr.success("پیام شما با موفقیت ارسال شد", "", {
                        progressBar: !0
                    });
                }
            },
            error: function (error) {

                if (error.status === 422) {
                    var errors = $.parseJSON(error.responseText);
                    $.each(errors.errors, function (key, val) {

                        toastr.error(val[0], "خطا", {
                            progressBar: !0
                        });
                    });
                } else {

                    // console.log(error.responseText)
                    toastr.error("خطا در ثبت اطلاعات", "خطا ", {
                        progressBar: !0
                    });
                }


                console.log(error)
            },

        })
    })

</script>
