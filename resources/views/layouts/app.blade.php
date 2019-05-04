<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('common.head')
<body class="font-sans m-0 overflow-hidden">
<div id="app">

    @auth
        <div class="flex flex-col">
            @include('common.navbar')

            <div class="flex-1 flex">
                @include('common.sidebar')

                <div class="flex-1 h-screen overflow-y-auto ml-48">
                    <div class="container py-8 mx-auto w-9/10 mb-10">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    @endauth

    @guest
        @yield('content')
    @endguest
</div>

@include('common.scripts')
</body>
</html>
