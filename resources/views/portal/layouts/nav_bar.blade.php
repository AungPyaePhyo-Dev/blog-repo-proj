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
                       
                    <!-- <div class="lg:ml-5 ml-auto">
                        <a href="#" class="flex items-center font-semibold hover:text-blue-500 transition">
                            <span class="mr-2">
                                <i class="fas fa-user"></i>
                            </span>
                            Login/Register
                        </a>
                    </div> -->
                    
                     </form>
                </div>

                <div class="text-xl ml-auto lg:ml-3 block xl:hidden text-gray-700 cursor-pointer hover:text-blue-500 transition" id="open_sidebar">
                        <i class="fas fa-bars"></i>
                    </div>
            </nav>