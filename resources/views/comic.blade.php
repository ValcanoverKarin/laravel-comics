@extends('layouts.app')

@section('tag_title')
    {{$comicInfo['title']}}
@endsection

@section('main_content')

    <!--sezione poster-->
    <section class="poster_comic">
        <div class="container">
            <img src="{{ $comicInfo['thumb'] }}" alt="">
        </div>        
    </section>
    <!--end sezione poster-->

    <!--sezione presentazione-->
    <section class="presentation">
        <div class="container">

            <!--info comic-->
            <div class="info_comic">
                <h1>
                    {{ $comicInfo['title'] }}
                </h1>

                <!--info prezzo-->
                <div class="price_info">
                    <div class="price">
                        <div class="left">
                            <span class="title">U.S. Price:</span>
                            <span class="price-number">{{ $comicInfo['price'] }}</span>
                        </div>

                        <div class="right">
                            <span class="title">AVAILABLE</span>
                        </div>
                    </div>

                    <div class="check">
                        Check Availability <span>&#9660</span>
                    </div>
                </div>
                <!--end info prezzo-->

                <!--descrizione comic-->
                <p class="description_comic">
                    {{ $comicInfo['description'] }}
                </p>
                <!--end descrizione comic-->
            </div>
            <!--end info comic-->

            <!--advertisement-->
            <div class="advertisement">
                <span class="adv_text">Advertisement</span>
                <div class="adv_img">
                    <img src="{{ asset('img/adv.jpg') }}" alt="adv">
                </div>
            </div>
            <!--end advertisement-->
        </div>
    </section>
    <!--end sezione presentazione-->

    <!--sezione autori comic-->
    <section class="authors_comic">
        <div class="container">
            <!--talent-->
            <div class="talent">
                <h3>Talent</h3>
                <div class="table">
                    
                    <div class="row">
                        <h4>Art by:</h4>
                        <p>
                            @foreach ($comicInfo['artists'] as $artist)
                                <a href="#">{{$artist}}</a>@if (!$loop->last),@endif
                            @endforeach
                        </p>
                    </div>                
                    
                    <div class="row">
                        <h4>Written by:</h4>
                        <p>
                            @foreach ($comicInfo['writers'] as $writer)
                                <a href="#">{{$writer}}</a>@if (!$loop->last),@endif
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            <!--end talent-->

            <!--specs-->
            <div class="specs">
                <h3>Specs</h3>
                <div class="table">
                    
                    <div class="row">
                        <h4>Series:</h4>
                        <p>
                            {{ $comicInfo['series'] }}
                        </p>
                    </div>                
                    
                    <div class="row">
                        <h4>U.S. Price:</h4>
                        <p>
                            {{ $comicInfo['price'] }}
                        </p>
                    </div>
                    
                    <div class="row">
                        <h4>On Sale Date:</h4>
                        <p>
                            {{ $comicInfo['sale_date'] }}
                        </p>
                    </div> 
                </div>
            </div>
            <!--end specs-->
        </div>        
    </section>
    <!--end sezione autori comic-->

 @endsection 