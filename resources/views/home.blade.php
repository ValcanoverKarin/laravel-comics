@extends('layouts.app') 

@section('title')
    DC Laravel Comics
@endsection

@section('main_content')
    <!--sezione current series-->
    <section class="current-series">
        <div class="container">
            <h2>Current series</h2>

            <div class="comics-container">
                   
                @foreach($comics_array as $comic)
                    
                    <!--single comic-->
                    <div class="comic">
                        <!--img comic-->
                        <div class="comic-img">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        </div>
                        <!--end img comic-->

                        <!--titolo comic-->
                        <div class="comic-title">
                            <a href="{{ route('comic', ['id' => $comic['id']]) }}">{{ $comic['series'] }}</a>
                        </div>
                        <!--end titolo comic-->
                    </div> 
                    <!--end single comic-->

                @endforeach                            

            </div>
        </div>
    </section>
    <!--end sezione current series-->

    <!-- Start Section Buy -->
    <section class="buy_comics">
        <div class="container">

            <!-- Start Single card -->
            <div class="card">
                <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                <div>digital comics</div>
            </div>
            <!-- End Single card -->

            <!-- Start Single card -->
            <div class="card">
                <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                <div>dc merchandise</div>
            </div>
            <!-- End Single card -->

            <!-- Start Single card -->
            <div class="card">
                <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                <div>supscription</div>
            </div>
            <!-- End Single card -->

            <!-- Start Single card -->
            <div class="card">
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                <div>comic shop locator</div>
            </div>
            <!-- End Single card -->

            <!-- Start Single card -->
            <div class="card">
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                <div>dc power visa</div>
            </div>
            <!-- End Single card -->

        </div>
    </section>
    <!-- End Section Info -->




@endsection