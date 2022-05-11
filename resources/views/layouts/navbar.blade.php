<nav class="p-2 z-10 relative shadow-md">
    <div class="container">
        <div class="p-2">
            <span>Helpdesk PT Tirta</span>
                <ul class="flex items-center gap-6 ml-6 justify-center space-x-6">
                    @foreach ($navigations as $name => $url)
                        <li class="flex items-center cursor-pointer"><a href="{{ $url }}">{{ $name }}</a></li>
                    @endforeach
                </ul>
        </div>
        </nav>
    </div>
</nav>