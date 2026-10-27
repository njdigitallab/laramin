<main id="main" class="flex flex-col flex-grow lg:ml-64 mt-16">
    <div class="flex items-center justify-between bg-white px-4 py-2 mt-4 mx-6 border border-gray-200 rounded-lg">
        {{-- Page Title --}}
        <div id="page-title" class="text-xl font-heading">
            @yield('page-title')
        </div>

        {{-- Breadcrumbs --}}
        <div id="page-breadcrumbs" class="hidden md:block pl-4 text-sm">
            @include('layouts.app.breadcrumbs')
        </div>
    </div>

    {{-- Page Content --}}
    <div class="px-4 pt-4 pb-8 bg-white mx-6 my-4">
        @yield('content')
    </div>
</main>
