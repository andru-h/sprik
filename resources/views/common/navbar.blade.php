<nav class="w-full shadow bg-primary z-50 m-0 flex items-center p-4">
    <div class="w-full flex flex-row items-center justify-between">
        <a class="no-underline text-white" href="{{ url('/') }}">
            {{ config('app.name', 'Commission') }}
        </a>

        <div class="relative flex flex-row items-center cursor-pointer text-white" onclick="$('#user-options').toggleClass('hidden');">
            <p>{{ Auth::user()->name }}</p><i class="fas fa-angle-down ml-2"></i>

            <div id="user-options" class="absolute bg-white text-left shadow pin-t pin-r mt-8 hidden">
                <ul class="list-reset">
                    <li>
                        <a class="block py-3 px-4 hover:bg-grey-lighter no-underline text-sm text-grey-dark flex" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt mr-2"></i>{{ __('Logout') }}
                        </a>
                        <form id="logout-form" class="hidden" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</nav>