<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Daily</title>
    <link rel="stylesheet" href="../assets/font-awesome/css/all.css">
    <link rel="stylesheet" href="./assets/font-awesome/css/solid.min.css">
    {{-- <script src="../assets/js/tailwind.js"></script> --}}
    @vite('resources/css/app.css')
    <script src="../assets/js/alpine.js"></script>
</head>
<body>

    <div class="flex flex-col h-screen">
        <header class=" shadow-sm sticky top-0 z-50">
            <nav class="bg-white">
                <div class="container px-4 mx-auto flex items-center">
                    <div class="w-16">
                        <a href="index.html">
                            <img src="../assets/images/logo.jpg" class="w-full"  alt="logo">
                        </a>
                    </div>  
                    <div class="ml-12 space-x-5 hidden lg:flex">
                        <a href="{{ route('home') }}" class="flex items-center font-semibold {{ Request::segment(1) == "" ? 'text-blue-500' : '' }}   hover:text-blue-500 transition mr-3">
                            <span class="mr-2">
                                <i class="fas fa-home"></i>
                            </span>
                            Home
                        </a>
                        <a href="{{ route('about') }}" class="flex items-center font-semibold {{ Request::segment(1) == "about" ? 'text-blue-500' : '' }}  hover:text-blue-500 transition mr-3">
                            <span class="mr-2">
                                <i class="fas fa-file-alt"></i>
                            </span>
                            About
                        </a>
                        <a href="{{ route('contact') }}" class="flex items-center font-semibold {{ Request::segment(1) == "contact" ? 'text-blue-500' : '' }}    hover:text-blue-500 transition mr-3">
                            <span class="mr-2">
                                <i class="fas fa-phone"></i>
                            </span>
                            Contact
                        </a>
                    </div>
                    <div class="relative ml-auto hidden lg:block">
                        <span class="absolute left-3 top-2 text-sm text-gray-500">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text"
                         id="search"
                         name="data"
                         placeholder="search..."
                         class="block w-full border-none rounded-3xl pl-11 pr-2 py-2 focus:outline-none bg-gray-100 text-sm text-gray-700 shadow-sm">
                    </div>
                    <!-- <div class="lg:ml-5 ml-auto">
                        <a href="#" class="flex items-center font-semibold hover:text-blue-500 transition">
                            <span class="mr-2">
                                <i class="fas fa-user"></i>
                            </span>
                            Login/Register
                        </a>
                    </div> -->
                    <div class="text-xl ml-auto lg:ml-3 block xl:hidden text-gray-700 cursor-pointer hover:text-blue-500 transition" id="open_sidebar">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </nav>
        </header>
        <main class="p-2 flex-grow bg-gray-100">
            @yield('content')
        </main>
        <footer class="">
            <div class="py-4 bg-white border-t">
                <p class="text-sm text-center">
                    Copyright@2023 <span class="font-semibold">Tech By AP</span> All Right Reversed
                </p>
            </div>
        </footer>
      </div>


    

    

    

    <div class="fixed w-full h-full bg-black left-0 top-0 z-50 xl:hidden bg-opacity-25 opacity-0 invisible transition-all duration-700" id="sidebar_wrapper">
        <div class="fixed top-0 w-72 h-full bg-white shadow-md z-50 flex flex-col p-4" id="sidebar">
            <div class="relative mb-3">
                <form action="{{ route('search') }}" id="form" method="post">
                    @method('post')
                    @csrf
                    <span class="absolute left-3 top-2 text-sm text-gray-500">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text"
                    placeholder="search..."
                    id="search"
                    name="data"
                    class="block w-full border-none rounded-3xl pl-11 pr-2 py-2 focus:outline-none bg-gray-100 text-sm text-gray-700 shadow-sm">
                </form>
            </div>

            <h3 class="text-xl font-semibold text-gray-700 mb-3">Menu</h3>

            <div class="flex flex-col space-y-3 mb-4">
                <a href="{{ route('home') }}" class="flex items-center font-semibold {{ Request::segment(1) == "" ? 'text-blue-500' : '' }}  hover:text-blue-500 transition mr-3">
                    <span class="mr-2">
                        <i class="fas fa-home"></i>
                    </span>
                    Home
                </a>
                <a href="{{ route('about') }}" class="flex items-center font-semibold {{ Request::segment(1) == "about" ? 'text-blue-500' : '' }}  hover:text-blue-500 transition mr-3">
                    <span class="mr-2">
                        <i class="fas fa-file-alt"></i>
                    </span>
                    About
                </a>
                <a href="{{ route('contact') }}" class="flex items-center font-semibold  {{ Request::segment(1) == "contact" ? 'text-blue-500' : '' }}   hover:text-blue-500 transition mr-3">
                    <span class="mr-2">
                        <i class="fas fa-phone"></i>
                    </span>
                    Contact
                </a>
            </div>


            <h3 class="text-xl font-semibold text-gray-700 mb-3">Categories</h3>
            <div class="text-gray-700 space-y-4">
                <a href="#" 
                class="flex font-semibold items-center leading-4  hover:text-blue-500 transition">
                    <span class="mr-2">
                        <i class="fas fa-folder-open"></i>
                    </span>
                    <span>HTML</span>
                    <span class="font-normal ml-auto">(12)</span>
                </a>

                <a href="#" 
                class="flex font-semibold items-center leading-4  hover:text-blue-500 transition">
                    <span class="mr-2">
                        <i class="fas fa-folder-open"></i>
                    </span>
                    <span>CSS</span>
                    <span class="font-normal ml-auto">(12)</span>
                </a>

                <a href="#" 
                class="flex font-semibold items-center leading-4  hover:text-blue-500 transition">
                    <span class="mr-2">
                        <i class="fas fa-folder-open"></i>
                    </span>
                    <span>Javascript</span>
                    <span class="font-normal ml-auto">(12)</span>
                </a>

                <a href="#" 
                class="flex font-semibold items-center leading-4  hover:text-blue-500 transition">
                    <span class="mr-2">
                        <i class="fas fa-folder-open"></i>
                    </span>
                    <span>Bootstrap</span>
                    <span class="font-normal ml-auto">(12)</span>
                </a>

                <a href="#" 
                class="flex font-semibold items-center leading-4  hover:text-blue-500 transition">
                    <span class="mr-2">
                        <i class="fas fa-folder-open"></i>
                    </span>
                    <span>Tailwind</span>
                    <span class="font-normal ml-auto">(12)</span>
                </a>

                <a href="#" 
                class="flex font-semibold items-center leading-4  hover:text-blue-500 transition">
                    <span class="mr-2">
                        <i class="fas fa-folder-open"></i>
                    </span>
                    <span>PHP</span>
                    <span class="font-normal ml-auto">(12)</span>
                </a>

                <a href="#" 
                class="flex font-semibold items-center leading-4  hover:text-blue-500 transition">
                    <span class="mr-2">
                        <i class="fas fa-folder-open"></i>
                    </span>
                    <span>Laravel</span>
                    <span class="font-normal ml-auto">(12)</span>
                </a>

                <a href="#" 
                class="flex font-semibold items-center leading-4  hover:text-blue-500 transition">
                    <span class="mr-2">
                        <i class="fas fa-folder-open"></i>
                    </span>
                    <span>React</span>
                    <span class="font-normal ml-auto">(12)</span>
                </a>

                <a href="#" 
                class="flex font-semibold items-center leading-4  hover:text-blue-500 transition">
                    <span class="mr-2">
                        <i class="fas fa-folder-open"></i>
                    </span>
                    <span>Vue</span>
                    <span class="font-normal ml-auto">(12)</span>
                </a>

            </div>
        </div>
    </div>

    <script>
        document.querySelector("#open_sidebar").addEventListener('click', function() {
            document.querySelector("#sidebar_wrapper").classList.remove('opacity-0');
            document.querySelector("#sidebar_wrapper").classList.remove('invisible');
        })

        document.body.addEventListener('click', function(e) {
            if(e.target.id == 'sidebar_wrapper') {
                document.querySelector("#sidebar_wrapper").classList.add('opacity-0');
                document.querySelector("#sidebar_wrapper").classList.add('invisible');
            }
        })

        document.getElementById('search').onkeyup = function(e) {
        if (e.keyCode === 13) {
            document.getElementById('form').submit(); // your form has an id="form"
        }
        return true;
        }
    </script>
 
</body>
</html>