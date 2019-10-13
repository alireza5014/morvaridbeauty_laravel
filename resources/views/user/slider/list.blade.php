@extends('layouts.app')

@section('header')

    @parent
    <link rel="stylesheet" href="{{url('gelr/vendors/ladda-button/css/ladda-themeless.min.css')}}">
    <link rel="stylesheet" href="{{url('gelr/vendors/toastr/css/toastr.min.css')}}">



    <link rel="stylesheet" type="text/css" href="{{url('crop/css/style.css')}}"/>
    {{--    <link rel="stylesheet" type="text/css" href="{{url('crop/css/style-example.css')}}"/>--}}
    <link rel="stylesheet" type="text/css" href="{{url('crop/css/jquery.Jcrop.css')}}"/>

    <script type="text/javascript" src="{{url('crop/scripts/jquery.Jcrop.js')}}"></script>
    <script type="text/javascript" src="{{url('crop/scripts/jquery.SimpleCropper.js')}}"></script>


@endsection

@section('content')

    <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" id="new_slider" enctype="multipart/form-data">

                    <div class="modal-body">
                        @csrf
                        <input id="id" type="hidden" name="id">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">


                                    <div class="col-md-8">
                                        <div class="row">


                                            <div class="col-lg-12 col-md-12 col-md-3 mb-3">
                                                <input name="title" type="text" class="form-control" id="title"
                                                       placeholder="عنوان  "
                                                       value="" required="">
                                                <div class="valid-tooltip">
                                                    به نظر خوب میاد!
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-md-3 mb-3">
                                                <input dir="ltr" name="link" type="url" class="form-control" id="link"
                                                       placeholder="لینک"
                                                       value="" required="">
                                                <div class="valid-tooltip">
                                                    به نظر خوب میاد!
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-4">


                                        <div class="card ">
                                            <div id="form_image_preview" class="card-body text-center">
                                                <img src="{{url('images/cover.jpg')}}" alt="Image"
                                                     class="img-responsive">
                                            </div>
                                        </div>
                                        <textarea style="display: none   ;" id="main_image"
                                                  name="main_image"></textarea>


                                    </div>

                                    <div class="col-lg-12  col-md-12 mt-4 mb-4">

                                        <textarea name="description" id="description" class="form-control"></textarea>
                                    </div>


                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" id="new_slider_btn" class="btn btn-success ladda-button ladda_btn"
                                data-style="expand-right">
                            <span class="ladda-label">ایجاد    </span>
                            <span class="ladda-spinner"></span></button>

                        <button type="button" class="btn btn-light " data-dismiss="modal">بستن</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <script>
        $('#form_image_preview').simpleCropper(500, 300, 200, 200);

    </script>
    <div class="vz_main_content">

        <button      data-src-default="{{url('images/cover.jpg')}}" id="new_" type="button" class="btn btn-primary btn-flat m-2" data-toggle="modal"
                data-target="#exampleModalCenter"> جدید
        </button>
        <div class="row">
            @foreach($sliders as $slider)

                <div class="col-md-3 mb-4 col-sm-12 grid-item">
                    <figure class="article_card">
                        <div class="image"><img src="{{url($slider->image_path)}}" alt="Post Image"></div>
                        <figcaption>
                            <h5>
                                {{$slider->title}}
                            </h5>
                            <h3>
                                <a href="javascript:void(0)">
                                    {{$slider->description}}
                                </a>
                            </h3>

                            <footer>
                                <div class="date">{{$slider->created_at}}     </div>
                                <div class="icons">
                                    <div class="views"><a data-toggle="modal" data-target="#exampleModalCenter"

                                                          data-id="{{$slider->id}}"
                                                          data-link="{{$slider->link}}"
                                                          data-title="{{$slider->title}}"
                                                          data-description="{{$slider->description}}"
                                                          data-src="{{url($slider->image_path)}}"

                                                          class="edit_slider_btn btn btn-inverse-secondary"><i
                                                    class="fa fa-edit"></i></a></div>
                                    <div class="love">
                                        <button type="button" class="btn btn-inverse-danger mr-1"><i
                                                    class="ti-trash"></i></button>
                                    </div>
                                </div>
                            </footer>

                        </figcaption>
                    </figure>
                </div>

            @endforeach
        </div>
    </div>

@endsection
@section('foot')

    @parent

    <script src="{{url('gelr/js/main.js')}}"></script>

    <script src="{{url('gelr/vendors/ladda-button/js/spin.min.js')}}"></script>
    <script src="{{url('gelr/vendors/ladda-button/js/ladda.jquery.min.js')}}"></script>
    <script src="{{url('gelr/vendors/ladda-button/js/ladda.min.js')}}"></script>


    <script src="{{url('gelr/vendors/toastr/js/toastr.min.js')}}"></script>
    <!-- Toastr Init -->
    <script src="{{url('gelr/js/init/toastr.js')}}"></script>
    <script>
        jQuery(document).ready(function () {

var url='create';

            $(".edit_slider_btn").on('click', function (e) {
                $('#description').val($(this).data('description'))
                $('#new_slider_btn').text("ویرایش")
                url='modify';



                $('#title').val($(this).data('title'))
                $('#id').val($(this).data('id'))
                $('#link').val($(this).data('link'))
                $('#form_image_preview img').attr('src', $(this).data('src'))


            });
            $("#new_").on('click', function (e) {
                $('#new_slider')[0].reset();
                $('#form_image_preview img').attr('src', $(this).data('src-default'))

                $('#new_slider_btn').text("ایجاد")
                url='create';

            })



            $("#new_slider_btn").on("click", function (t) {

                var e = t.currentTarget,
                    a = Ladda.create(e);

                a.start();

                $.ajax({
                    url: url,
                    method: 'POST',
                    data: $('#new_slider').serialize(),
                    success: function (data, textStatus, jqXHR) {
                        if (textStatus === 'success') {
                            toastr.success(data.status + "اطلاعات با موفقیت ثبت شد", "", {
                                progressBar: !0
                            });


                            $("#form_image_preview img").attr("src", "{{url('images/cover.jpg')}}")
                            $('#new_slider')[0].reset();
                            $('#exampleModalCenter').modal('hide');
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
                            toastr.error("خطا در ثبت اطلاعات", "خطا ", {
                                progressBar: !0
                            });
                        }


                    },

                    complete: function () {
                        a.stop();
                    }

                });


            })
        });


    </script>

@endsection
