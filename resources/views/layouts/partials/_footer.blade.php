
<footer>
            <p class="text-gray-600">
                &copy; Copyright {{date('Y')}} 
                @yield("cop")
                @if (!Route::is ("about"))
                    <a href=" {{route("about") }}" class="text-indigo-800 underline ">A propos de nous</a>
                @endif

            </a></p>
        </footer>