@extends('layouts.main-layout')
@section('header')
    <header>
        <div class="top_header">
            <div class="container w-75">
                <div class="d-flex justify-content-end">
                    sda
                </div>
            </div>
        </div>
        <div class="container w-75">
            <div class="d-flex justify-content-between align-items-center">
                <img src="{{ asset('img/dc-logo.png') }}" alt="">
                <ul class="d-flex align-items-center m-0">
                    @foreach ($listPages as $page)
                        <li>
                            <a href="{{ $page['url'] }}" class="{{ $page['active'] ? 'active' : '' }}">
                                {{ $page['name'] }}
                            </a>
                        </li>
                    @endforeach
            </div>
        </div>
    </header>
@endsection
