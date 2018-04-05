
<nav id="navbar-pos-home" class="navbar navbar-expand fixed-top navbar-dark bg-primary">
    
    <a class="navbar-brand pl-5" href="#">POS</a>
      
        <div class="navbar-nav mr-auto"></div>
        <ul class="navbar-home navbar-nav my-2 my-lg-0">
            @guest
            <li class="nav-item">
            <a v-bind:class="active_hash == '#home'? 'active nav-link': 'nav-link'" href="#" @click.prevent="scrollTo('#home', $event)">HOME</a>
            </li>
            <li class="nav-item">
                <a v-bind:class="active_hash == '#products'? 'active nav-link': 'nav-link'" href="#" @click.prevent="scrollTo('#products', $event)">PRODUCTS</a>
            </li>
            <li class="nav-item">
                <a v-bind:class="active_hash == '#contact-us'? 'active nav-link': 'nav-link'" href="#" @click.prevent="scrollTo('#contact-us', $event)">CONTACT US</a>
            </li>
            <li class="nav-item">
                <a v-bind:class="'nav-link'" href="{{ route('login') }}">SIGN-IN</a>
            </li>
            @else
            <li class="nav-item dropdown">
                <a id="navbarNotification" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" v-pre>
                    <i class="fas fa-bell"></i>
                    <span class="badge badge-dark badge-notif">9</span>
                </a>

                <div class="dropdown-menu dropdown-navbar" aria-labelledby="navbarNotification">
                    <ul class="list-notification">
                        <li ><a href="#">Notification 1</a></li>
                        <li ><a href="#">Notification 2</a></li>
                        <li ><a href="#">Notification 3</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" v-pre>
                    <i class="fas fa-user-circle"></i>&nbsp;
                    {{ Auth::user()->name }}
                    <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-navbar" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                        <small> <i class="fas fa-sign-out-alt"></i>  {{ __('Sign-out') }}</small>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>

</nav>
