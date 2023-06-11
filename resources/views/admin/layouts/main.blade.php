<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/solid.min.css') }}">
    {{-- <script src="../assets/js/tailwind.js"></script> --}}
    @vite('resources/css/app.css')
    @yield('css')
    {{-- <script src="../assets/js/custom.js"></script> --}}
    
 
    
</head>
<body>

    <div class="container-fluid">
        <div class="flex h-screen overflow-auto bg-gray-800" x-data="{ isSidebarExpanded: true }">
        
            @include("admin.layouts.sidebar")

            <div class="w-full bg-gray-100" >

                <nav class="bg-white">
                    <div class="container-fluid flex items-center">
                        <div class="px-7 my-3 cursor-pointer" @click="isSidebarExpanded = !isSidebarExpanded" >
                            <i class="fas fa-bars text-xl"></i>
                        </div>  
                        <div class="ml-auto relative">
                                <div id="dropdown" class="mr-7 p-1 cursor-pointer">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div id="dropdown-content" class="hidden absolute z-50 mt-2 w-48 rounded-md shadow-lg right-0 py-1 bg-white">
                                    <div class="px-4 py-2 text-xs text-gray-400">Manage Account</div>
                                    <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 transition">Profile</a>
                                    <div class="block border-gray-100 border-t"></div>
                                    <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 transition">Logout</a>
                                </div>
                        </div>
                    </div>
                </nav>

                <main class="p-5 flex-grow bg-gray-100">
                    @yield('content')
                </main>

            </div>
        </div>
    </div>
    
    <script src="{{ asset('assets/js/alpine.js') }}"></script>
    
    <script>
        document.getElementById("dropdown").addEventListener("click", function(){
            document.getElementById("dropdown-content").classList.toggle("hidden");
        })
        
    </script>
    @yield('js')
 
</body>
</html>