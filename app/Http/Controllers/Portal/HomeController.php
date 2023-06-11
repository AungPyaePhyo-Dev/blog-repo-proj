<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Post;
use App\Services\CategoryService;
use App\Services\PostService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $categoryService;
    protected $postService;
    
    public function __construct(CategoryService $categoryService, PostService $postService) {
        $this->categoryService = $categoryService;
        $this->postService = $postService;
    }
    public function index(Request $request) {
        $categories = $this->categoryService->getAllCategories();

        $posts = $this->postService->getPosts();

        $recentPosts = $this->postService->recentPost();

        return view('portal.index', compact('categories', 'posts', 'recentPosts'));
    }

    public function postView($slug) {
        $post = Post::where('slug', $slug)->first();
        $categories = $this->categoryService->getAllCategories();
        $recentPosts = $this->postService->recentPost();
        $relatedPosts = $this->postService->relatedPosts($post->category_id);
        return view('portal.view', compact('post', 'categories', 'recentPosts', 'relatedPosts'));

    }

    public function about() {
        return view('portal.about');
    }

    public function contact() {
        return view('portal.contact');
    }

    public function search(Request $request) {
        $data = $request->data;
        $posts = Post::with('category')->where('title', 'LIKE', "%$data%")
                ->orWhere('description', 'LIKE', "%$data%")
                ->get();
        return view('portal.search', compact('posts', 'data'));
    }

    public function postByCategory($id) {
        $categories = $this->categoryService->getAllCategories();

        $posts = $this->postService->getPostByCategoryId($id);

        $recentPosts = $this->postService->recentPost();

        return view('portal.index', compact('categories', 'posts', 'recentPosts'));
    }
}
