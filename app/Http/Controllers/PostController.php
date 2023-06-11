<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Services\CategoryService;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    protected $service;
    protected $categoryService;


    public function __construct(PostService $service, CategoryService $categoryService) {
        $this->service = $service;
        $this->categoryService = $categoryService;
    }
    public function index()
    {
        $posts = Post::get();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $validated = $request->validated();

        $image = $request->file('image');
        if(isset($validated['image'])) {
            $image = \Storage::disk('public')->putFile('blog_image', $image);
            $validated['image'] = $image;
        }

        $this->service->insertData($validated);

        return redirect()->route('post.index')->with('message', 'Successfully created post');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = $this->categoryService->getAllCategories();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string',
            'slug' => ['required', 'string', 'max:255', Rule::unique('posts')->ignore($post->id)],
            'description' => 'required|max:10000',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            "post_date" => "nullable"
        ]);

        $image = $request->file('image');
        if(isset($validated['image'])) {
            if(\Storage::exists('public/'. $post->image)) {
                \Storage::delete('public/'. $post->image);
            }
            $image = \Storage::disk('public')->putFile('blog_image', $image);
            $validated['image'] = $image;
        }

        $this->service->updateDate($validated, $post->id);

        return redirect()->route('post.index')->with('message', 'Successfully updated post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
