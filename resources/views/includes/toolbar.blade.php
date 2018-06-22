<v-toolbar height="64px" fixed>
    <v-toolbar-side-icon @click.native="toggleNavDrawer"></v-toolbar-side-icon>
    <img src="/images/favicon.png" heght="40" width="40" alt="POS" class="img-circle">
    <v-toolbar-title class="hidden-xs-only">
        Point of Sale
    </v-toolbar-title>
    <v-spacer></v-spacer>
    <v-toolbar-items class="hidden-sm-and-down">
        @guest
        <v-btn flat @click.native="scrollTo('#home', $event)">Home</v-btn>
        <v-btn flat @click.native="scrollTo('#products', $event)">Products</v-btn>
        <v-btn flat @click.native="scrollTo('#contact-us', $event)">Contact us</v-btn>
        <v-btn href="{{ route('login') }}" flat>Login</v-btn>
        @else
        <v-menu offset-y>
            <v-btn slot="activator" flat>{{ Auth::user()->name }}</v-btn>
            <v-list>
                <v-list-tile v-on:click.prevent="logout">
                    <v-list-tile-title>
                        Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </v-list-tile-title>
                </v-list-tile>
            </v-list>
        </v-menu>
        @endguest
    </v-toolbar-items>
    <v-toolbar-items class="hidden-sm hidden-md-and-up">
        @guest
        <v-btn @click.native="scrollTo('#home', $event)" nuxt icon>
            <v-icon>home</v-icon>
        </v-btn>
        <v-btn @click.native="scrollTo('#products', $event)" icon>
            <v-icon>fas fa-boxes</v-icon>
        </v-btn>
        <v-btn  @click.native="scrollTo('#contact-us', $event)" icon>
            <v-icon>local_phone</v-icon>
        </v-btn>
        @else
        <v-menu offset-y>
            <v-btn slot="activator" flat>{{ Auth::user()->name }}</v-btn>
            <v-list>
                <v-list-tile v-on:click.prevent="logout">
                    <v-list-tile-title>
                        Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </v-list-tile-title>
                </v-list-tile>
            </v-list>
        </v-menu>
        @endguest
    </v-toolbar-items>
</v-toolbar>