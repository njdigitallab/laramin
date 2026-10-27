<header id="header" class="fixed z-20 w-full flex justify-between items-center bg-slate-700 border-b border-slate-500 h-16 px-6">

    {{-- Left Content --}}
    <div class="flex items-center">
        {{-- Menu Toggler --}}
        <div id="menu-toggler" class="lg:hidden cursor-pointer">
            <i class="fa-solid fa-bars text-gray-200 hover:text-white text-2xl"></i>
        </div>

        {{-- Name / Logo --}}
        <div id="header-logo" class="hidden sm:flex ml-4 lg:ml-0">
            <a href="#">
                <img class="h-6" src="{{ asset('images/logo.png') }}">
            </a>
        </div>
    </div>

    {{-- Right Content --}}
    <div id="header-user-profile" class="relative ml-4 text-slate-200 hover:text-slate-100 cursor-pointer">
        {{-- Username --}}
        <div class="flex items-center">
            <img class="h-6 rounded-full" src="https://www.gravatar.com/avatar/215be8f4a72c3bd453e768d3c28ac20d?s=300">
            <div class="pl-2 pr-2">{{-- {{ Auth::user()->name }} --}} John Doe</div>
            <i class="fa-solid fa-caret-down"></i>
        </div>
        
        {{-- Dropdown --}}
        <div id="header-user-profile-dropdown" class="absolute hidden pt-2 text-gray-500 w-48 right-0">
            <div class="flex flex-col border border-gray-200 w-48 rounded">
                <a href="#" class="px-2 py-1 bg-gray-100 hover:bg-gray-200 border-b border-gray-200 ">
                    Edit Profile
                </a>
                <a href="#" class="px-2 py-1 bg-gray-100 hover:bg-gray-200" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form method="POST" id="logout-form" action="#">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</header>