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
                <div class="col-2">
                    <img src="{{ $comic['thumb'] }}">
                    <h6>{{ $comic['series'] }}</h6>

                </div>
            @endforeach
            
        </div>
        <div class="mt-4"><a href="#load more" class="button_blue ">LOAD MORE</a></div>
    </div>
@endsection
