<header class="container d-flex justify-content-between align-items-center">
    <div class="logo">
        <a href="#"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC logo"></a>
    </div>
    <nav>
        <ul class="d-flex justify-content-between align-items-center">
            <li class="{{ Route::currentRouteName() == 'characters' ? 'active' : '' }}">
                <a href="#">CHARACTERS</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'comics' ? 'active' : '' }}">
                <a href="{{ route('comics') }}">COMICS</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'movies' ? 'active' : '' }}">
                <a href="#">MOVIES</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'tv' ? 'active' : '' }}">
                <a href="#" >TV</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'games' ? 'active' : '' }}">
                <a href="#" >GAMES</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'collectibles' ? 'active' : '' }}">
                <a href="#" >COLLECTIBLES</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'videos' ? 'active' : '' }}">
                <a href="#" >VIDEOS</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'fans' ? 'active' : '' }}">
                <a href="#" >FANS</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'news' ? 'active' : '' }}">
                <a href="#" >NEWS</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'shop' ? 'active' : '' }}">
                <a href="#" >SHOP</a>
            </li>
        </ul>
    </nav>
    <input class="searchBar" type="text" placeholder="search">
</header>

