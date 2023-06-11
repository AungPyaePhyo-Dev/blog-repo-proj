@extends('portal.layouts.main')
@section('content')
    <div class="py-12 bg-gray-100">
        <div class="container mx-auto ">
            <h1 class="text-center lg:mx-48 py-5 bg-white shadow-lg rounded-xl font-semibold text-xl">Search result for : {{ $data }}</h1>
            <div class="xl:w-9/12 w-full mx-auto mt-3">

                <div class="grid md:grid-cols-3 grid-cols-1 gap-4">

                  @foreach($posts as $post)
                    <div class="bg-white p-4 shadow-sm rounded-sm">
                        <a href="{{ route('post.view', $post->slug) }}" class="overflow-hidden block">
                            <img src="{{ asset('storage/'. $post->image) }}"
                            class="w-full lg:h-60 h-48 object-cover rounded transform hover:scale-110 transition duration-700"
                            alt="">
                        </a>
                        <a href="#">
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

        </div>
    </div>
@endsection