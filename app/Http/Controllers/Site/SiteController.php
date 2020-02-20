<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Post;
use App\Model\Tariffe;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class SiteController extends Controller
{


    public function search()
    {

        $category = '';
        $search = Input::get('s', '');
        $page = Input::get('page', '');
        $arr_search = explode(' ', $search);

        $posts = Cache::remember('search_' . $search . "_" . $page, 60, function () use ($arr_search) {

            return Post::where('publish', 1)->Where(function ($query) use ($arr_search) {
                for ($i = 0; $i < count($arr_search); $i++) {
                    $query->orwhere('title', 'like', '%' . $arr_search[$i] . '%');
                }
            })
                ->with('category')->paginate(20);
        });

        return view('site.blog', compact('posts', 'category'));


    }

    public function blog($category = '')
    {

        $page = Input::get('page', '');

        $posts = Cache::remember('blog' . $category . "_" . $page, 60, function () use ($category) {

            $posts = Post::where('publish', 1);
            $cat = Category::where('slug', $category)->first(['id']);
            if ($cat) {
                $posts = $posts->where('category_id', $cat->id);
            }
            return $posts->orderBy('id', 'DESC')->paginate(12);

        });
        return view('site.blog', compact('posts', 'category'));

    }

    public function content($category, $slug)
    {
        $post = Cache::remember('content_' . $category . "_" . $slug, 60, function () use ($slug, $category) {
            return Post::where('publish', 1)->where('slug', $slug)
                ->with(['metas' => function ($q) {
                    return $q->select('key', 'value', 'post_id');
                }])
                ->with('category')->whereHas('category', function ($q) use ($category) {
                    return $q->where('slug', $category);
                })->first();
        });


        if (!$post) {
            return view('site.404');
        }
        return view('site.pages.content', compact('post'));

    }


    private function getPricing()
    {
        return Tariffe::with('tariffe_items')->get();

    }

    public function home()
    {
        $data['services'] = $this->getPostByCategory('خدمات', 1000);
        $data['about_us'] = $this->getPostByCategory('about_us');
        $posts = Post::where('publish', 1)->with('category')->orderBy('id', 'DESC')->paginate(3);
        $data['pricing'] = $this->getPricing();
        return view('site.home', compact('posts', 'data'));

    }


    private function getPostByCategory($category, $limit = 1)
    {
        $data = Post::whereHas('category', function ($q) use ($category) {
            $q->where('slug', $category);
        });
        $data = ($limit > 1) ? $data = $data->select('abstract as abstract_content', 'category_id', 'slug', 'id', 'title', 'image_path', 'created_at')
            ->get() : $data->first();

        return $data;
    }

    public function page($page)
    {
        $data = [];
        switch ($page) {
            case 'about-us':
                $data['about_us'] = $this->getPostByCategory('about_us');
                break;
            case 'services':
                $data['services'] = $this->getPostByCategory('خدمات', 1000);
                break;

            case 'pricing':
                $data['pricing']  = $this->getPricing();

                break;
        }

        return view((View::exists('site.' . $page)) ? 'site.' . $page : 'site.404', compact('data'));
    }

}
