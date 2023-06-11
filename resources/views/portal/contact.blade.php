@extends('portal.layouts.main')
@section('content')
    <div class="py-12 bg-gray-100">
        <div class="container mx-auto ">
            <h1 class="text-center lg:mx-48 py-5 bg-white shadow-lg rounded-xl font-semibold text-xl">Contact Us</h1>
            <div class="bg-white  lg:mx-48 rounded-xl p-5 mt-5 shadow-lg">
                <form action="{{ route('contact')}}" method="POST" >
                @csrf
                @method('POST')
                    <div class="grid md:grid-cols-2 gird-cols-1 md:gap-4">
                        <div class="w-full mt-4">
                            <label class="" for="name">Name</label>
                            <input type="text" placeholder="Name" name="name" class="mt-3 mb-2 block w-full bg-gray-50 border rounded-lg focus:ring-blue-500
                                focus:border-blue-500 p-2.5" id="">
                             @if($errors->has('name'))
                                <span class="text-red-500">{{ $errors->first('name') }}</span>
                            @endif
                                
                        </div>
                        <div class="w-full mt-4">
                            <label class="" for="email">Email</label>
                            <input type="email" placeholder="Email" name="email" class="mt-3 mb-2 block w-full bg-gray-50 border rounded-lg focus:ring-blue-500
                                focus:border-blue-500  p-2.5" id="">
                            @if($errors->has('email'))
                                <span class="text-red-500">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="w-full mt-4">
                        <label class="" for="message">Message</label>
                        <textarea name="message"  placeholder="Message" class="rows-1 mt-3 mb-2 block w-full bg-gray-50 border rounded-lg focus:ring-blue-500
                            focus:border-blue-500  p-2.5"></textarea>
                        @if($errors->has('message'))
                        <span class="text-red-500">{{ $errors->first('message') }}</span>
                        @endif
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-3 mr-2 mb-2 ">
                            Send Message
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection