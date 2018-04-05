@extends('layouts.app')

@section('title'){{ 'WELCOME' }}@stop

@section('content')
    <div class="wrapper">
        <div id="home" style="height:100vh;background-image:url('/images/banner.png');" class="jumbotron jumbotron-fluid p-5 bg-light mb-5 wrapper">
            <!-- <div>
                <img src="/images/banner.png" class="img-fluid" alt="">
            </div> -->
            <div class="text-center mt-5">
                <h1 class="display-4">POINT OF SALE</h1>
                <p class="lead">POS software that works on any device. Computers, Tablets and Phones!</p>
            </div>
            <div class="jumbotron-btn text-center">
                <button class="btn btn-raised btn-success btn-lg">
                    COMING SOON
                </button>
            </div>
        </div>
        <div id="products" class="featured-products">
            <div class="row">
                <div class="col-md-12 text-center mb-2">
                    <h2>CHECK OUT THESE FEATURED PRODUCTS</h2>
                </div>
                <div class="col-md-6">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="/images/product2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Fertilizers</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="/images/product1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">VEGETABLES</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection