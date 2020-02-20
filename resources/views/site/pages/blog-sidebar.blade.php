<div id="nt-sidebar" class="nt-sidebar col-lg-4 col-md-4">
    <div class="nt-sidebar-inner">

        <div class="sidebar sidebar-widget widget mb-30 widget_search">
            <div class="nt-sidebar-inner-search">
                <form  class="nt-sidebar-inner-search-form searchform" role="search" method="get"
                      id="widget-searchform" action="{{url('search')}}">
                    <input class="nt-sidebar-inner-search-field" type="text" value=""
                           placeholder="جستجو برای ..." name="s" id="ws">
                    <button class="nt-sidebar-inner-search-button" id="searchsubmit"
                            type="submit"><i class="fas fa-long-arrow-alt-right"></i></button>
                </form>
            </div>
        </div>
        <div class="sidebar sidebar-widget widget mb-30 widget_recent_entries"><h4
                class="widget-title">نوشته‌های تازه</h4>
            <ul>
                @foreach(\App\Model\Post::take(6)->orderBy('id','DESC')->with('category')->get(['title','slug','category_id']) as $post)

                    @if($post)
                        <li>
                            <a href="{{route('content',['category'=>$post->category->slug,'title'=>$post->slug])}}">{{$post->title}}</a>
                        </li>
                    @endif
                @endforeach

            </ul>
        </div>


        <div class="sidebar sidebar-widget widget mb-30 widget_categories"><h4
                class="widget-title">دسته‌ها</h4>
            <ul>
                @foreach(\App\Model\Category::get() as $category)
                <li class="cat-item cat-item-2"><a href="{{route('blog',['category'=>$category->slug])}}">  {{$category->title}} </a>   </li>
                    @endforeach
            </ul>
        </div>


        <div class="sidebar sidebar-widget widget mb-30 widget_tag_cloud"><h4
                class="widget-title">برچسب‌ها</h4>
            <div class="tagcloud"><a href="../tag/theme/index.html"
                                     class="tag-cloud-link tag-link-10 tag-link-position-1"
                                     style="font-size: 22pt;" aria-label="تم (8 مورد)">آموزش </a>

        </div>

    </div><!-- End nt-sidebar-inner -->
</div><!-- End nt-sidebar -->
