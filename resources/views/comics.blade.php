@extends('layouts.app')

@section('currentSeries')
    <section>
        <div id="CurrentSeries" class="container m-auto row p-5 position-relative">
            @foreach($comicx as $unit)
                <div class="cover-wrapper col-12 col-sm-6 col-md-3 col-lg-2">
                    <div class="cover position-relative">
                        <img src="{{$unit['thumb']}}" alt="{{$unit['title']}}">
                        <div class='comicInfo position-absolute w-100 h-100 top-0'>
                            <div class="priceAndType position-absolute bottom-0 end-0">
                                <span class="price d-block">{{$unit['price']}}</span>
                                <span class="type d-block text-uppercase">{{$unit['type']}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-uppercase py-3 px-2">
                        {{$unit['series']}}
                    </div>
                </div>
            @endforeach
            <div class="currentSeries position-absolute top-0 text-uppercase fs-4 py-1 px-4">
                CURRENT SERIES
            </div>
        </div>
        <div class="p-4">
            <button class="d-block m-auto text-uppercase py-1 px-5 fs-6 fw-bolder">LOAD MORE</button>
        </div>
    </section>
@endsection
