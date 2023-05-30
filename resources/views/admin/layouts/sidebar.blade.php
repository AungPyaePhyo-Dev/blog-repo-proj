<div  class="h-screen bg-slate-700" :class="isSidebarExpanded ? 'w-80' : 'w-20'">
    <div class="h-full bg-gray-800 shadow-md z-50">
        <a href="#" class="flex items-center py-3 px-4 text-white border-l-4 border-transparent">
            <i class="fa-solid fa-microchip"></i>
            <span class="ml-2  font-medium duration-300 ease-in-out" :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0 hidden'">Laravel Tuto</span>
        </a>
        <div class="py-2">
            <a href="{{ route('dashboard') }}" class="flex items-center py-3 px-4 text-white hover:bg-gray-900 transition
                {{ Request::segment(2) == "dashboard" ? ' bg-gray-900' : '' }}
            ">
                <i class="fa-solid fa-layer-group mr-2"></i>
                <span class="ml-2  font-medium duration-300 ease-in-out" 
                :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0 hidden'">Dashboard</span>
            </a>

            <a href="{{ route('category.index') }}" class="flex items-center py-3 px-4 text-white hover:bg-gray-900 transition
             {{ Request::segment(1) == "category" ? 'bg-gray-900' : '' }}
             ">
                <i class="fa-solid fa-list"></i>
                <span class="ml-2  font-medium duration-300 ease-in-out" :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0 hidden'">Category</span>
            </a>

            <a href="{{ route('post.index') }}" class="flex items-center py-3 px-4 text-white  hover:bg-gray-900 transition
                {{ Request::segment(1) == "post" ? 'bg-gray-900' : '' }}
            ">
                <i class="fa-solid fa-pen"></i>
                <span class="ml-2  font-medium duration-300 ease-in-out" :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0 hidden'">Post</span>
            </a>
        </div>
    </div>
</div>