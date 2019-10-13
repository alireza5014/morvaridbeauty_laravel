
<nav class="vz_navbar navbar-collapsed">
    <div class="navbar-wrapper">
        <div class="navbar-content scroll-div">
            <div class="vz_navigation">
                <ul class="sidebar nav flex-column">
                    <li class="active"><a class="nav-link text-center" href="{{route('user.home')}}" data-nav="dashboard"><i class="feather ft-home"></i><span>داشبورد</span></a></li>

                    <li><a class="nav-link text-center" href="{{route('user.slider.list')}}" data-nav="ui_features"><i class="feather ft-gitlab"></i><span>  اسلایدر  </span></a></li>
{{--                    <li><a class="nav-link text-center" href="{{route('user.price.list')}}" data-nav="ui_features"><i class="feather ft-gitlab"></i><span>  قیمت ها  </span></a></li>--}}
                    <li><a class="nav-link text-center" href="{{route('user.post.list',['category_id'=>2])}}" data-nav="ui_features"><i class="feather ft-gitlab"></i><span> بلاگ ها </span></a></li>
                     <li><a class="nav-link text-center"  href="" data-nav="advance_kit"><i class="feather ft-zap"></i><span>  نرخ ها</span></a></li>
                    <li><a class="nav-link text-center" href="{{route('user.post.list',['category_id'=>3])}}"  data-nav="forms"><i class="feather ft-clipboard"></i><span> تجهیزات</span></a></li>
                    <li><a class="nav-link text-center"  href="{{route('user.post.list',['category_id'=>1])}}" data-nav="maps"><i class="feather ft-map-pin"></i><span>   خدمات </span></a></li>
                    <li><a class="nav-link text-center" href="{{route('user.post.list',['category_id'=>5])}}"  data-nav="data"><i class="feather ft-file-text"></i><span>تماس با ما</span></a></li>
                    <li><a class="nav-link text-center" href="{{route('user.post.list',['category_id'=>4])}}"  data-nav="pages"><i class="feather ft-layers"></i><span>درباره ما</span></a></li>
                </ul>


            </div>
        </div>
    </div>
</nav>

