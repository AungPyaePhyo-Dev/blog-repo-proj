<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/font-awesome/css/all.css">
    <link rel="stylesheet" href="./assets/font-awesome/css/solid.min.css">
    <script src="../assets/js/tailwind.js"></script>
    <script src="../assets/js/alpine.js"></script>
</head>
<body>

    <nav class="bg-white shadow-sm">
        <div class="container px-4 mx-auto flex items-center">
            <div class="w-16">
                <a href="index.html">
                    <img src="../assets/images/logo.jpg" class="w-full"  alt="logo">
                </a>
            </div>  
            <div class="ml-12 flex space-x-5">
                <a href="index.html" class="flex items-center font-semibold  text-blue-500  hover:text-blue-500 transition mr-3">
                    <span class="mr-2">
                        <i class="fas fa-home"></i>
                    </span>
                    Home
                </a>
                <a href="about.html" class="flex items-center font-semibold hover:text-blue-500 transition mr-3">
                    <span class="mr-2">
                        <i class="fas fa-file-alt"></i>
                    </span>
                    About
                </a>
                <a href="contact.html" class="flex items-center font-semibold   hover:text-blue-500 transition mr-3">
                    <span class="mr-2">
                        <i class="fas fa-phone"></i>
                    </span>
                    Contact
                </a>
            </div>
            <div class="relative ml-auto">
                <span class="absolute left-3 top-2 text-sm text-gray-500">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text"
                 placeholder="search..."
                 class="block w-full border-none rounded-3xl pl-11 pr-2 py-2 focus:outline-none bg-gray-100 text-sm text-gray-700 shadow-sm">
            </div>
            <div class="ml-5">
                <a href="#" class="flex items-center font-semibold hover:text-blue-500 transition">
                    <span class="mr-2">
                        <i class="fas fa-user"></i>
                    </span>
                    Login/Register
                </a>
            </div>
        </div>
    </nav>

    <main class="py-12 bg-gray-100 min-h-screen">
        <div class="container mx-auto px-4 flex">
            <div class="w-3/12">
                <div class="bg-white shadow-sm rouded-sm p-4">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Categories</h3>
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
                <div class="bg-white mt-3 text-center">
                    <div class="p-12">
                        <h1 class="my-3">ADS</h1>
                    </div>
                </div>
                
            </div>
            <div class="w-6/12 mx-6">
                <div class="bg-white p-4 shadow-sm rounded-sm">
                    <a href="#" class="overflow-hidden block">
                        <img src="images/tp_img3.png"
                        class="w-full h-90 object-cover rounded transform hover:scale-110 transition duration-700"
                        alt="">
                    </a>
                    <p class="mt-3 text-gray-700">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim neque sunt praesentium sit sint, ducimus accusantium quo dignissimos facilis voluptates eaque facere consequuntur quae nemo hic exercitationem excepturi deleniti placeat?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, vitae voluptatum eos eaque dolorum quaerat magni quas sint blanditiis? Eveniet velit amet incidunt possimus perspiciatis aliquid non, voluptatem rem corrupti?
                        <ul class="my-5">
                            <li>1. Lorem ipsum dolor, sit amet consectetur adipisicing elit. </li>
                            <li>2. Magnam ex cumque earum nostrum modi illo, </li>
                            <li>3. vero accusantium, minus dolore quas aperiam, </li>
                            <li>4. voluptatem excepturi sunt sint blanditiis quis officia maiores ab.</li>
                        </ul>
                    </p>
                    <div class="flex mt-3 space-x-5">
                        <div class="flex items-center text-gray-400 text-sm">
                            <span class="mr-2 text-xs">
                                <i class="fas fa-folder-open"></i>
                            </span>
                            Html
                        </div>
                        <div class="flex items-center text-gray-400 text-sm">
                            <span class="mr-2 text-xs">
                                <i class="far fa-clock"></i>
                            </span>
                            June 11 2023
                        </div>
                    </div>
                </div>

                <div class="flex justify-between bg-white px-3 py-2 items-center rounded-sm mb-4 mt-8">
                    <h5 class="text-base uppercase font-semibold">Related Posts</h5>
                    <a href="#" class="text-white bg-blue-500 px-3 py-1 rounded-sm uppercase hover:bg-transparent hover:text-blue-500 transition hover:bg-white-500 " >READ MORE</a>
                </div>
                

                <div class="grid grid-cols-3 gap-2 mt-5">
                    <div class="bg-white p-4 shadow-sm rounded-sm">
                        <a href="#" class="overflow-hidden block">
                            <img src="images/tp_img2.png"
                            class="w-full h-45 object-cover rounded transform hover:scale-110 transition duration-700"
                            alt="">
                        </a>
                        <a href="#">
                            <h2 class="mt-3 text-sm font-semibold text-gray-700 hover:text-blue-500 transition">
                                Lorem ipsum dolor sit
                            </h2>
                        </a>
                        <div class="flex mt-3 space-x-5">
                            <div class="flex items-center text-gray-400 text-sm">
                                <span class="mr-2 text-xs">
                                    <i class="fas fa-folder-open"></i>
                                </span>
                                Html
                            </div>
                            <div class="flex items-center text-gray-400 text-sm">
                                <span class="mr-2 text-xs">
                                    <i class="far fa-clock"></i>
                                </span>
                                June 11 2023
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-4 shadow-sm rounded-sm">
                        <a href="#" class="overflow-hidden block">
                            <img src="images/tp_img1.png"
                            class="w-full h-45 object-cover rounded transform hover:scale-110 transition duration-700"
                            alt="">
                        </a>
                        <a href="#">
                            <h2 class="mt-3 text-sm font-semibold text-gray-700 hover:text-blue-500 transition">
                                Lorem ipsum dolor sit
                            </h2>
                        </a>
                        <div class="flex mt-3 space-x-5">
                            <div class="flex items-center text-gray-400 text-sm">
                                <span class="mr-2 text-xs">
                                    <i class="fas fa-folder-open"></i>
                                </span>
                                Html
                            </div>
                            <div class="flex items-center text-gray-400 text-sm">
                                <span class="mr-2 text-xs">
                                    <i class="far fa-clock"></i>
                                </span>
                                June 11 2023
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-4 shadow-sm rounded-sm">
                        <a href="#" class="overflow-hidden block">
                            <img src="images/tp_img.png"
                            class="w-full h-45 object-cover rounded transform hover:scale-110 transition duration-700"
                            alt="">
                        </a>
                        <a href="#">
                            <h2 class="mt-3 text-sm font-semibold text-gray-700 hover:text-blue-500 transition">
                                Lorem ipsum dolor sit
                            </h2>
                        </a>
                        <div class="flex mt-3 space-x-5">
                            <div class="flex items-center text-gray-400 text-sm">
                                <span class="mr-2 text-xs">
                                    <i class="fas fa-folder-open"></i>
                                </span>
                                Html
                            </div>
                            <div class="flex items-center text-gray-400 text-sm">
                                <span class="mr-2 text-xs">
                                    <i class="far fa-clock"></i>
                                </span>
                                June 11 2023
                            </div>
                        </div>
                    </div>

                    


                </div>


            </div>
            <div class="w-3/12">
                <div class="bg-white shadow-sm rounded-sm p-4">
                    <h3 class="text-xl font-semibold text-gray-700 mb-3">Recent Posts</h3>
                    <div>
                        <a href="#" class="flex group my-3">
                            <div class="flex-shrink-0">
                                <img src="images/image.png" class="w-20 h-14 rounded object-cover" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <div class="text-md leading-5 font-semibold group-hover:text-blue-500 transition">
                                    Lorem ipsum dolor sit amet consectetur
                                </div>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span class="mr-2 text-xs">
                                        <i class="far fa-clock"></i>
                                    </span>
                                    June 11 2023
                                </div>
                            </div>
                        </a>

                        <a href="#" class="flex group my-3">
                            <div class="flex-shrink-0">
                                <img src="images/image.png" class="w-20 h-14 rounded object-cover" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <div class="text-md leading-5 font-semibold group-hover:text-blue-500 transition">
                                    Lorem ipsum dolor sit amet consectetur
                                </div>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span class="mr-2 text-xs">
                                        <i class="far fa-clock"></i>
                                    </span>
                                    June 11 2023
                                </div>
                            </div>
                        </a>

                        <a href="#" class="flex group">
                            <div class="flex-shrink-0">
                                <img src="images/image.png" class="w-20 h-14 rounded object-cover" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <div class="text-md leading-5 font-semibold group-hover:text-blue-500 transition">
                                    Lorem ipsum dolor sit amet consectetur
                                </div>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span class="mr-2 text-xs">
                                        <i class="far fa-clock"></i>
                                    </span>
                                    June 11 2023
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>