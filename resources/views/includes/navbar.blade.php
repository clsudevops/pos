<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light py-0">
    <div class="container-fluid">
    <div class="navbar-nav my-2 my-lg-0"></div>
        <a class="btn btn-success mb-0" href="#">
            ADMIN <i class="fas fa-sign-in-alt"></i>
        </a>
    </div>
</nav>
<nav id="navbar-pos-home" class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand pl-5" href="#">POS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="navbar-nav mr-auto"></div>
        <ul class="navbar-home navbar-nav my-2 my-lg-0">
            <li class="nav-item">
            <a v-bind:class="active_hash == '#home'? 'active nav-link': 'nav-link'" href="#" @click.prevent="scrollTo('#home', $event)">HOME</a>
            </li>
            <li class="nav-item">
                <a v-bind:class="active_hash == '#products'? 'active nav-link': 'nav-link'" href="#" @click.prevent="scrollTo('#products', $event)">PRODUCTS</a>
            </li>
            <li class="nav-item">
                <a v-bind:class="active_hash == '#contact-us'? 'active nav-link': 'nav-link'" href="#" @click.prevent="scrollTo('#contact-us', $event)">CONTACT US</a>
            </li>
        </ul>

    </div>
</nav>
<!-- <nav class="navbar navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand">POS</a>
    <ul class="navbar-nav ml-auto">
    
        @guest
        <li>
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li>
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
                <span class="caret"></span>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </ul>
</nav> -->