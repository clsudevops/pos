<v-toolbar fixed>
    <v-toolbar-side-icon></v-toolbar-side-icon>
    <img src="/images/favicon.png" heght="40" width="40" alt="POS" class="img-circle">
    <v-toolbar-title>
        
        Point of Sale
    </v-toolbar-title>
    <v-spacer></v-spacer>
    <v-toolbar-items class="hidden-sm-and-down">
        <v-btn flat @click.native="scrollTo('#home', $event)">Home</v-btn>
        <v-btn flat @click.native="scrollTo('#products', $event)">Products</v-btn>
        <v-btn flat @click.native="scrollTo('#contact-us', $event)">Contact us</v-btn>
        <v-btn href="{{ route('login') }}" flat>Login</v-btn>
    </v-toolbar-items>
</v-toolbar>