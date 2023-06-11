@extends('admin.layouts.main')
    @section('css')
        <link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />
        <style>
        .ck-editor__editable_inline {
            min-height: 400px;
        }
        </style>

    @endsection
    @section('content')
        <div class="container-fluid px-4 sm:px-8">
            <h3 class="text-xl font-semibold mb-5">Update Post</h3>
            <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="text-lg">Category Name</label>
                    <select name="category_id" class="block mt-2 mb-5 w-full bg-gray-200 rounded-xl p-3" > 
                        @foreach($categories as $category)
                            <option @if($category->id == $post->category_id) selected @endif value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @if($errors->has('category_id'))
                        <div class="text-red-800">{{ $errors->first('category_id') }} </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="text-lg">Title</label>
                    <input type="text" name="title" class="block w-full p-3 bg-gray-200 rounded-xl mt-3 mb-4" value="{{ $post->title }}">
                    @if($errors->has('title'))
                        <div class="text-red-800">{{ $errors->first('title') }} </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="text-lg">Slug</label>
                    <input type="text" name="slug" class="block w-full p-3 bg-gray-200 rounded-xl mt-3 mb-4" value="{{ $post->slug }}">
                    @if($errors->has('slug'))
                        <div class="text-red-800">{{ $errors->first('slug') }} </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="text-lg">Description</label>
                    <textarea id="editor" name="description" class="mt-3 mb-5">{!! $post->description !!}</textarea>
                     {{-- <input type="hidden" name="description" id="description"> --}}
                     @if($errors->has('description'))
                        <div class="text-red-800">{{ $errors->first('description') }} </div>
                    @endif
                    {{-- <textarea class="w-full bg-gray-200 rounded-xl mt-3 mb-4" rows="4" placeholder="Description"></textarea> --}}
                </div>

                <div class="form-group">
                    <label class="text-lg">Image</label>
                    <input type="file" name="image" class="block w-full p-4 bg-gray-200 rounded-xl mt-3 mb-4">
                    @if($errors->has('image'))
                        <div class="text-red-800">{{ $errors->first('image') }} </div>
                    @endif
                    <a href="{{ asset('storage/'.$post->image) }}" class="outline-blue-500 outline  px-3 py-2 rounded-xl" target="_blank">See Image <span class="text-blue-500"> <i class="fas fa-eye"></i> </span> </a>
                </div>


                <div class="form-group mt-5">
                    <label class="text-lg">Post Date</label>
                    <input type="date" name="post_date" value={{ $post->post_date }} class="block w-full p-4 bg-gray-200 rounded-xl mt-3 mb-4">
                </div>


                <button type="submit" class="bg-blue-700 mt-5 text-white font-semibold px-8 py-3 rounded-xl">Update</button>
            </form>
    </div>
    
    @endsection

    @section('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
        <script>
          /*  const editor = new toastui.Editor({
                        el: document.querySelector('#editor'),
                        maxheight: '70vh',
                        height: '48vh',
                        minHeight: '100vh',
                });

            console.log(editor);

        $(document).on("submit", "form", function(event) { 
            document.querySelector('#description').value = editor.getMarkdown();
            $(window).off('beforeunload');
        }); */

          ClassicEditor.create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
        </script>
    @endsection
