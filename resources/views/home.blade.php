@extends('layouts.app') 

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
                            <a href="#">{{ $comic['series'] }}</a>
                        </div>
                        <!--end titolo comic-->
                    </div> 
                    <!--end single comic-->

                @endforeach                            

            </div>
        </div>
    </section>
    <!--end sezione current series-->
@endsection