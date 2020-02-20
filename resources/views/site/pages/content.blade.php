@extends('layouts.site.layout')
@section('header')

    <title>{{$post->title}}</title>
    @foreach($post->metas as $meta)
        <meta name="{{$meta->key}}" content="{{$meta->value}}">
    @endforeach
    @parent

@endsection


@section('content')

    <div id="nt-single" class="nt-single">

        <!-- Hero Section -->
        <div id="nt-hero"
             class="page-id-480 single-hero breadcrumb-area bg-fixed padding-xl shadow-dark text-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12"><h1 class="hero-title title-full">{{$post->title}} </h1></div>
                </div>
            </div>
        </div>
        <!-- Single Content -->
        <div
            class="nt-theme-inner-container blog-area bg-gray full-width single default-padding has-sidebar right-sidebar">
            <!-- Section Content -->
            <div class="container">
                <div class="row">

                    <!-- Left sidebar -->

                    <div class="blog-items">


                        <!-- Content -->
                        <div class="col-lg-8 col-md-8">

                            <div class="item nt-theme-content nt-clearfix">


                                <!-- Post featured thumbnail image -->

                                <div class="info">
                                    <div class="meta mt-0">
                                        <ul>
                                            <li><a class="post-date"><i
                                                        class="fa fa-calendar"></i> {{$post->created_at}} </a></li>
                                            <li><a class="post-author"><i
                                                        class="fa fa-user"></i> مدیر </a></li>
                                            <li><i class="fa fa-tags"></i> <a
                                                    href="{{route('blog',['category'=>$post->category->slug])}}"
                                                    rel="category tag">{{$post->category->title}}</a></li>

                                        </ul>

                                    </div>
                                    <div class="post-content nt-clearfix">
                                        <img class="aligncenter wp-image-493 size-large"
                                             src="{{url($post->image_path)}}"/>
                                        <p>{!! $post->content !!}</p>

                                    </div>
                                    <!-- Post Tags -->
                                    <div class="post-tags">

                                        <span>برچسب: </span>

                                        <a class="پست" href="">آموزش نصب</a><a class="تم"

                                                                               href="">وبلاگ</a>
                                    </div>
                                    <!-- Post Tags End -->


                                    <div class="post-pagi-area">

                                    </div>


                                    <div id="comments" class="comments-area page-post-2-comments-form">
                                        <!-- Comments -->
                                        <h4 class="page-post-2-title">
                                            3نظر درباره &ldquo;<span>{{$post->title}}</span>&rdquo; </h4>

                                        <ol class="commentlist">

                                            <li class="comment even thread-even depth-1 c-comments-1-item"
                                                id="li-comment-14">

                                                <div id="comment-14">

                                                    <div class="c-comments-1-avatar">
                                                        <img alt=''
                                                             src='http://1.gravatar.com/avatar/754032fb504159ab153d8d4c7240239f?s=48&#038;d=mm&#038;r=g'
                                                             srcset='http://1.gravatar.com/avatar/754032fb504159ab153d8d4c7240239f?s=96&#038;d=mm&#038;r=g 2x'
                                                             class='avatar avatar-48 photo' height='48' width='48'/>
                                                    </div>


                                                    <div class="c-comments-1-info">

                                                        <div class="c-comments-1-user">نیما</div>

                                                        <div class="c-comments-1-date">

                                                            <a href="#comment-14">
                                                                21 آذر, 1397 در 10:45 ق.ظ </a>


                                                        </div>

                                                        <div class="c-comments-1-message nt-theme-content"><p>عالی
                                                                بود</p>
                                                        </div>

                                                        <div class="c-comments-1-reply"><a rel='nofollow'
                                                                                           class='comment-reply-link'
                                                                                           href='index-replytocom=14.html#respond'
                                                                                           onclick='return addComment.moveForm( "comment-14", "14", "respond", "480" )'
                                                                                           aria-label='پاسخ به نیما'>پاسخ</a>
                                                        </div>

                                                    </div>

                                                </div>

                                            </li><!-- #comment-## -->
                                            <li class="comment odd alt thread-odd thread-alt depth-1 c-comments-1-item"
                                                id="li-comment-15">

                                                <div id="comment-15">

                                                    <div class="c-comments-1-avatar">
                                                        <img alt=''
                                                             src='http://1.gravatar.com/avatar/754032fb504159ab153d8d4c7240239f?s=48&#038;d=mm&#038;r=g'
                                                             srcset='http://1.gravatar.com/avatar/754032fb504159ab153d8d4c7240239f?s=96&#038;d=mm&#038;r=g 2x'
                                                             class='avatar avatar-48 photo' height='48' width='48'/>
                                                    </div>


                                                    <div class="c-comments-1-info">

                                                        <div class="c-comments-1-user">مژده</div>

                                                        <div class="c-comments-1-date">

                                                            <a href="#comment-15">
                                                                21 آذر, 1397 در 10:45 ق.ظ </a>


                                                        </div>

                                                        <div class="c-comments-1-message nt-theme-content"><p>خوب
                                                                بود</p>
                                                        </div>

                                                        <div class="c-comments-1-reply"><a rel='nofollow'
                                                                                           class='comment-reply-link'
                                                                                           href='index-replytocom=15.html#respond'
                                                                                           onclick='return addComment.moveForm( "comment-15", "15", "respond", "480" )'
                                                                                           aria-label='پاسخ به مژده'>پاسخ</a>
                                                        </div>

                                                    </div>

                                                </div>

                                            </li><!-- #comment-## -->
                                            <li class="comment even thread-even depth-1 c-comments-1-item"
                                                id="li-comment-16">

                                                <div id="comment-16">

                                                    <div class="c-comments-1-avatar">
                                                        <img alt=''
                                                             src='http://2.gravatar.com/avatar/20018baa656b0b54d821da899f2448ca?s=48&amp;d=mm&amp;r=g'
                                                             srcset='http://2.gravatar.com/avatar/20018baa656b0b54d821da899f2448ca?s=96&amp;d=mm&amp;r=g 2x'
                                                             class='avatar avatar-48 photo' height='48' width='48'/>
                                                    </div>


                                                    <div class="c-comments-1-info">

                                                        <div class="c-comments-1-user">رضا</div>

                                                        <div class="c-comments-1-date">

                                                            <a href="#comment-16">
                                                                18 دی, 1397 در 4:44 ب.ظ </a>


                                                        </div>

                                                        <div class="c-comments-1-message nt-theme-content"><p>
                                                                پسندیدم</p>
                                                        </div>

                                                        <div class="c-comments-1-reply"><a rel='nofollow'
                                                                                           class='comment-reply-link'
                                                                                           href='index-replytocom=16.html#respond'
                                                                                           onclick='return addComment.moveForm( "comment-16", "16", "respond", "480" )'
                                                                                           aria-label='پاسخ به رضا'>پاسخ</a>
                                                        </div>

                                                    </div>

                                                </div>

                                            </li><!-- #comment-## -->

                                        </ol><!-- .commentlist -->


                                        <div id="respond" class="comment-respond">
                                            <h3 id="reply-title" class="comment-reply-title">دیدگاهتان را بنویسید
                                                <small><a rel="nofollow" id="cancel-comment-reply-link" href="#respond"
                                                          style="display:none;">لغو پاسخ</a></small></h3>
                                            <form action="http://demo.gostarandev.com/Softing/wp-comments-post.php"
                                                  method="post" id="commentform" class="comment-form">
                                                <p class="comment-notes"><span id="email-notes">نشانی ایمیل شما منتشر نخواهد شد.</span>
                                                    بخش‌های موردنیاز علامت‌گذاری شده‌اند <span class="required">*</span>
                                                </p>
                                                <div class="row">
                                                    <div class="col-sm-4"><input
                                                            class="c-form-input"
                                                            id="author"
                                                            placeholder="Your Name (No Keywords)"
                                                            name="author"
                                                            type="text"
                                                            value=""
                                                            size="30" aria-required='true' required/></div>
                                                    <div class="col-sm-4"><input
                                                            class="c-form-input"
                                                            id="email"
                                                            placeholder="your-real-email@example.com"
                                                            name="email"
                                                            type="text"
                                                            value=""
                                                            size="30" aria-required='true' required/></div>
                                                    <div class="col-sm-4"><input
                                                            class="c-form-input"
                                                            id="url"
                                                            name="url"
                                                            placeholder="Add your website URL"
                                                            type="text"
                                                            value=""
                                                            size="30" required/></div>

                                                </div>
                                                <p class="comment-form-comment"><label for="comment">دیدگاه</label>
                                                    <textarea id="comment" name="comment" cols="45" rows="8"
                                                              maxlength="65525" required="required"></textarea></p>
                                                <p class="form-submit"><input name="submit" type="submit" id="submit"
                                                                              class="c-button-1 -color-green-outline -hover-green-default -size-small -corner-circle"
                                                                              value="ارسال دیدگاه"/> <input
                                                        type='hidden' name='comment_post_ID' value='480'
                                                        id='comment_post_ID'/>
                                                    <input type='hidden' name='comment_parent' id='comment_parent'
                                                           value='0'/>
                                                </p></form>
                                        </div><!-- #respond -->


                                    </div>
                                </div>
                            </div>
                            <!-- End Column -->
                        </div>
                        <!-- End blog-items -->

                        <!-- Right sidebar -->

                        @include('site.pages.blog-sidebar')

                    </div>
                    <!-- End row -->
                </div>
                <!-- End container -->
            </div>
            <!-- End Single Content -->
        </div>


    </div>
@endsection
