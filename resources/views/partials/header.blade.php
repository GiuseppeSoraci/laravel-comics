<!--Header-->
<header class="flex">
    <div class="container">
        <div class="logo flex">
            <img src="{{ asset('images/dc-logo.png') }}" alt="logo">
        </div>
        <nav class="menu">
            <ul class="flex">
                <li><a class="active" href="{{ route('home') }}">Comics</a></li>
                <li><a href="{{ route('news') }}">News</a></li>
            </ul>
        </nav>
    </div>
</header>
