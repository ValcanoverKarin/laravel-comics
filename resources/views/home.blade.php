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

    <!--sezione buy comics-->
    <section class="buy_comics">
        <div class="container">

            <!--card-->
            <div class="card">
                <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                <div class="text_card">digital comics</div>
            </div>
            <!--end card-->

            <!--card-->
            <div class="card">
                <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                <div class="text_card">dc merchandise</div>
            </div>
            <!--end card-->

            
            <div class="card">
                <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                <div class="text_card">supscription</div>
            </div>
            <!--end card-->

            <!--card-->
            <div class="card">
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                <div class="text_card">comic shop locator</div>
            </div>
            <!--end card-->

            <!--card-->
            <div class="card">
                <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
                <div class="text_card">dc power visa</div>
            </div>
            <!--end card-->

        </div>
    </section>
    <!--end sezione buy comics-->




@endsection