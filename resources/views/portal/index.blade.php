@extends('portal.layouts.main')
@section('content')
    <div class="py-12 bg-gray-100">
        <div class="container mx-auto px-4 flex flex-wrap lg:flex-nowrap">
            <div class="w-3/12 hidden xl:block">
                <div class="bg-white shadow-sm rouded-sm p-4">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Categories</h3>
                    <div class="text-gray-700 space-y-4">

                    
                     @foreach($categories as $category)
                        <a href="{{ route('post_by_category', $category->id) }}" 
                        class="flex font-semibold items-center leading-4  hover:text-blue-500 transition
                         @if(Request::segment(2) == $category->id) text-blue-500 @endif
                        ">
                            <span class="mr-2">
                                <i class="fas fa-folder-open"></i>
                            </span>
                            <span>{{ $category->name }}</span>
                            <span class="font-normal ml-auto">( {{ $category->posts->count() }} )</span>
                        </a>
                     @endforeach
                        

                      
                    </div>
                </div>
                <div class="bg-white mt-3 text-center">
                    <div class="p-12">
                        <h1 class="my-3">ADS</h1>
                    </div>
                </div>
                
            </div>
            <div class="xl:w-6/12 w-full lg:w-8/12 lg:mx-6">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                @foreach($posts as $post)
                    <div class="bg-white p-4 shadow-sm rounded-sm">
                        <a href="{{ route('post.view', $post->slug) }}" class="overflow-hidden block">
                            <img src="{{ asset('storage/'. $post->image) }}"
                            class="w-full lg:h-60 h-48 object-cover rounded transform hover:scale-110 transition duration-700"
                            alt="">
                        </a>
                        <a href="{{ route('post.view', $post->slug) }}">
                            <h2 class="mt-3 text-lg font-semibold text-gray-700 hover:text-blue-500 transition">
                                {{ $post->title }}
                            </h2>
                        </a>
                        <div class="flex mt-3 space-x-5">
                            <div class="flex items-center text-gray-400 text-sm">
                                <span class="mr-2 text-xs">
                                    <i class="fas fa-folder-open"></i>
                                </span>
                                {{ $post->category->name }}
                            </div>
                            <div class="flex items-center text-gray-400 text-sm">
                                <span class="mr-2 text-xs">
                                    <i class="far fa-clock"></i>
                                </span>
                                {{ date('M d Y', strtotime($post->post_date)) }}
                            </div>
                        </div>
                    </div>

                @endforeach

                   


                </div>
            </div>
            <div class="xl:w-3/12 w-full lg:w-4/12 mt-8 lg:mt-0">
                <div class="bg-white shadow-sm rounded-sm p-4">
                    <h3 class="text-xl font-semibold text-gray-700 mb-3">Recent Posts</h3>
                    <div>

                    @foreach($recentPosts as $post)
                        <a href="{{ route('post.view', $post->slug) }}" class="flex group my-3">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('storage/' .$post->image) }}" class="w-20 h-14 rounded object-cover" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <div class="text-md leading-5 font-semibold group-hover:text-blue-500 transition">
                                    {{ $post->title }}
                                </div>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span class="mr-2 text-xs">
                                        <i class="far fa-clock"></i>
                                    </span>
                                    {{ date('M d Y', strtotime($post->post_date)) }}
                                </div>
                            </div>
                        </a>
                    @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 