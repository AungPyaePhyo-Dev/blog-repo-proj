@extends('portal.layouts.main')
@section('content')


    <main class="py-12 bg-gray-100 min-h-screen">
        <div class="container mx-auto px-4 flex">
            <div class="w-3/12">
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
            <div class="w-6/12 mx-6">
                <div class="bg-white p-4 shadow-sm rounded-sm">
                    <a href="#" class="overflow-hidden block">
                        <img src="{{ asset('storage/'.$post->image) }}"
                        class="w-full h-90 object-cover rounded transform hover:scale-110 transition duration-700"
                        alt="">
                    </a>
                    <p class="mt-3 text-gray-700">
                       {!! $post->description !!}
                    </p>
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

                <div class="flex justify-between bg-white px-3 py-2 items-center rounded-sm mb-4 mt-8">
                    <h5 class="text-base uppercase font-semibold">Related Posts</h5>
                    <a href="#" class="text-white bg-blue-500 px-3 py-1 rounded-sm uppercase hover:bg-transparent hover:text-blue-500 transition hover:bg-white-500 " >READ MORE</a>
                </div>
                
                
                <div class="grid grid-cols-3 gap-2 mt-5">

                @foreach($relatedPosts as $post)
                    <div class="bg-white p-4 shadow-sm rounded-sm">
                        <a href="#" class="overflow-hidden block">
                            <img src="{{ asset('storage/'.$post->image) }}"
                            class="w-full h-48 object-cover rounded transform hover:scale-110 transition duration-700"
                            alt="">
                        </a>
                        <a href="#">
                            <h2 class="mt-3 text-sm font-semibold text-gray-700 hover:text-blue-500 transition">
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
                                {{ date('M d Y', strtotime($post->post_date) )}}
                            </div>
                        </div>
                    </div>

                @endforeach

                </div>


            </div>
            <div class="w-3/12">
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
    </main>
@endsection