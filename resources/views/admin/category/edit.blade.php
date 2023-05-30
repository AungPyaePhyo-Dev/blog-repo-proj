    @extends('admin.layouts.main')
    @section('content')
        <div class="container mx-auto px-4">
            <h3 class="text-xl font-semibold mb-5">Create Category</h3>
            <form action="{{ route('category.update', $category->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="text-lg">Category Name</label>
                    <input type="text" name="name" class="block w-full p-3 bg-gray-200 rounded-xl mt-3 mb-4"
                     value="{{ $category->name }}"
                     placeholder="Category Name">
                    <button type="submit" class="bg-blue-700 text-white font-semibold px-8 py-3 rounded-xl">Save</button>
                </div>
            </form>
    </div>
    @endsection

    @section('js')
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
    @endsection