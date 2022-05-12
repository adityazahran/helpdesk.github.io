<nav class="p-2 z-10 relative shadow-md bg-gradient-to-r text-white from-blue-400  to-blue-600">
    <div class="container">
        <div class="p-2">
            <span>PT Tirta Asasta</span>
            {{-- <img src="{{ asset('img/logo.png') }}" alt="Perusahaan PT Tirta Asasta" style="width: 165px" > --}}
                <ul class="flex items-center gap-6 ml-6 justify-center space-x-6">
                    @foreach ($navigations as $name => $url)
                        <li class="block px-4 py-2 mt-2 font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline transition-all duration-200"><a href="{{ $url }}">{{ $name }}</a></li>
                    @endforeach
                </ul>
        </div>
        </nav>
    </div>
</nav>

