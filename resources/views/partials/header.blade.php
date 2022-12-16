<header class="container d-flex justify-content-between align-items-center">
    <div class="logo">
        <a href="#"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC logo"></a>
    </div>
    <nav>
        <ul class="d-flex justify-content-between align-items-center">
            <li class="{{ Route::currentRouteName() == 'characters' ? 'active' : '' }}">
                <a href="#">characters</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'comics' ? 'active' : '' }}">
                <a href="{{ route('comics') }}">comics</a>
            </li> 
            <li class="{{ Route::currentRouteName() == 'movies' ? 'active' : '' }}">
                <a href="#">movies</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'tv' ? 'active' : '' }}">
                <a href="#" >tv</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'games' ? 'active' : '' }}">
                <a href="#" >games</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'collectibles' ? 'active' : '' }}">
                <a href="#" >collectibles</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'videos' ? 'active' : '' }}">
                <a href="#" >videos</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'fans' ? 'active' : '' }}">
                <a href="#" >fans</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'news' ? 'active' : '' }}">
                <a href="#" >news</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'shop' ? 'active' : '' }}">
                <a href="#" >shop</a>
            </li>
        </ul>
    </nav>
    <input class="search" type="text" placeholder="search">
</header>