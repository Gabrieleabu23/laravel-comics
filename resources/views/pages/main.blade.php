@extends('layouts.main-layout')

@section('main')
    <div class="jumbo">
        <div class="main-container">
            <div class="current_series_comics">
                <h4 class="m-0">CURRENT SERIES</h4>
            </div>
        </div>
    </div>


    <div class="container w-75 mt-4 pt-4 text-center">
        <div class="row justify-content-center gy-5 text-start">

            @foreach ($comics as $comic)
                <div class=" col-lg-2 col-md-3 col-sm-6 img_comics">
                    <!-- Utilizzo delle classi col-md-3 per schermi medi (>=768px) e col-sm-6 per schermi piccoli (>=576px) -->
                    <img src="{{ $comic['thumb'] }}">
                    <h6>{{ $comic['series'] }}</h6>
                </div>
            @endforeach

        </div>
        <div class="mt-4">
            <a href="#load more" class="button_blue">LOAD MORE</a>
        </div>
    </div>
    <div class="blue_background mt-4 p-4">

        <ul class="d-flex w-75 mx-auto justify-content-between align-items-center list-unstyled py-4">
            @foreach($listInfo as $info)
            <li>
                <div class="d-flex align-items-center gap-4">
                    <img src="{{ mix($info['url_img']) }}"  alt="">
                    <h6 class="m-0">{{$info['name']}}</h6>
                </div>
            </li>
            @endforeach
        </ul>
        
    </div>
@endsection
