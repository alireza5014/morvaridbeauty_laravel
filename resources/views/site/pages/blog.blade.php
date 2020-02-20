<div id="nt-blog" class="nt-blog">

    <div id="nt-hero" class="page-id-482 blog-hero breadcrumb-area bg-fixed padding-xl shadow-dark text-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12"><h1 class="hero-title">وبلاگ </h1><h2 class="hero-subtitle">آخرین مقالات را بخوانید.</h2></div>
            </div>
        </div>
    </div>
    <!-- Blog Content -->
    <div class="nt-theme-inner-container blog-area full-width bg-gray default-padding has-sidebar right-sidebar">
        <!-- Section Content -->
        <div class="container">
            <!-- Row -->
            <div class="row">

                <div class="blog-items">

                    <!-- Left Sidebar -->

                    <!-- Column -->
                    <div class="col-lg-8 col-md-8">

                        @foreach($posts as $post)
                            <div class="col-lg-6 col-md-6">

                            <div id="post-{{$post->id}}" class="nt-post equal-height text-left  post-{{$post->id}} post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-post tag-theme tag-green tag-black tag-ninetheme  c-blog-1-item  nt-post-class" >

                                <div class="item">


                                    <div class="thumb"><a href="{{route('content',['category'=>$post->category->slug,'slug'=>$post->slug])}}"><img class="img-fluid" src="{{url($post->image_path)}}" alt="شرکت تجاری چیست"><div class="post-type"><i class="fa fa-image"></i></div></a></div>

                                    <div class="info"><h3 class="nt-post-title"><a href="{{route('content',['category'=>$post->category->slug,'slug'=>$post->slug])}}" rel="bookmark">{{$post->title}}</a></h3>
                                        <div class="meta mt-0">

                                            <!-- Post Category, Author, Comments -->
                                            <ul>


                                                <li><a class="post-date" href=""><i class="fa fa-calendar"></i> 12 آذر, 1397</a></li>


                                                <li><a class="post-author" href=""><i class="fa fa-user"></i> مدیر</a></li>


                                                <li><a class="post-comment" href=""><i class="fa fa-comments"></i> 2 دیدگاه</a></li>


                                            </ul>
                                        </div>

                                        <div class="post-excerpt"><p> {{$post->abstract}}</p>
                                        </div><a href="{{route('content',['category'=>$post->category->slug,'slug'=>$post->slug])}}" class="btn circle btn-theme effect btn-sm">ادامه مطلب</a>
                                    </div>
                                    <!-- end post content wrapper div -->

                                </div>

                            </div>

                            </div>
                        @endforeach

                            {{$posts->appends($_GET)->links()}}


                    </div>
                    <!-- End Column -->

                </div>
                <!-- End Blog-Items-->

                <!-- Right Sidebar -->

               @include('site.pages.blog-sidebar')

            </div>
            <!-- End Row -->
        </div>
        <!-- End Section Content -->
    </div>
    <!-- End Blog Content -->

</div>
