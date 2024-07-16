<header id="header-app">
    <div class="container">

        <section class="image">
            <img src={{Vite::asset("resources/img/dc-logo.png")}} alt="">
        </section>

        <section class="list-title">
            <ul>
                <li class="{{Route::currentRouteName() === 'guest.home' ? 'active' : ''}}">
                    <a href="{{route('guest.home')}}">Home</a>
                </li>
                <li class="{{Route::currentRouteName() === 'guest.comics' ? 'active' : ''}}">
                    <a href="{{route('guest.comics')}}">Comics</a>
                </li>
                <li>
                    <a href="#">Shop</a>
                </li>
            </ul>
        </section>
    </div>
</header>

