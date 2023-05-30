@extends('admin.layouts.main')
    @section('css')
        <link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />
    @endsection
    @section('content')
        <div class="container mx-auto px-4 sm:px-8">
            <h3 class="text-xl font-semibold mb-5">Create Post</h3>
            <form action="{{ route('post.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label class="text-lg">Category Name</label>
                    <select name="category_id" class="block mt-2 mb-5 w-full bg-gray-200 rounded-xl p-3" > 
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-lg">Title</label>
                    <input type="text" name="title" class="block w-full p-3 bg-gray-200 rounded-xl mt-3 mb-4" placeholder="Title">
                </div>

                <div class="form-group">
                    <label class="text-lg">Slug</label>
                    <input type="text" name="slug" class="block w-full p-3 bg-gray-200 rounded-xl mt-3 mb-4" placeholder="Slug">
                </div>

                <div class="form-group">
                    <label class="text-lg">Description</label>
                    <div id="editor" class="mt-3 mb-5"></div>
                    {{-- <textarea class="w-full bg-gray-200 rounded-xl mt-3 mb-4" rows="4" placeholder="Description"></textarea> --}}
                </div>

                <div class="form-group">
                    <label class="text-lg">Image</label>
                    <input type="file" name="image" class="block w-full p-4 bg-gray-200 rounded-xl mt-3 mb-4">
                </div>


                <button type="submit" class="bg-blue-700 text-white font-semibold px-8 py-3 rounded-xl">Save</button>
            </form>
    </div>
    
    @endsection

    @section('js')
        <script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>
        <script>
            const editor = new toastui.Editor({
                el: document.querySelector('#editor'),
                 maxheight: '70vh',
                height: '48vh',
                minHeight: '100vh',
        });
        </script>
    @endsection
