@extends('admin.layouts.main')
@section('css')
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
    <style>
        .dataTables_wrapper .dataTables_length select {
            background-image : none;
        }
    </style>
@endsection
@section('content')
    <div class="container mx-auto px-4 sm:px-8">
       @if(session('message'))
        <div
            class="my-3 flex justify-between text-green-200 shadow-inner rounded p-3 bg-green-600"
        >
        <p class="self-center">
        <strong>{{ session('message') }}</strong> 
        </p>
        <strong class="text-xl align-center cursor-pointer alert-del"
        >&times;</strong
        >
      @endif
    </div>
        <div class="flex justify-between">
            <h3 class="text-xl font-semibold mb-5">Categories</h3>
            <a href="{{ route('category.create') }}" class="p-3 bg-teal-400 rounded-lg text-white  mb-5"> <i class="fas fa-add"></i> Add New Category</a>
        </div>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $category->name }}</td>
                        <td> 
                            <div class="flex">
                                <a href="{{ route('category.edit', $category->id) }}" class="mr-4 text-xl text-teal-500"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('category.destroy', $category->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-xl text-red-500" data-id={{ $category->id }}><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @php $i++; @endphp
                @endforeach

            </tbody>
            
        </table>
</div>
@endsection

@section('js')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();

            let alert_del = document.querySelectorAll('.alert-del');
            alert_del.forEach((x) =>
                x.addEventListener('click', function () {
                x.parentElement.classList.add('hidden');
                })
            );

            
        });
    </script>
@endsection