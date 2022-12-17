@extends('layouts.app')

@php
'comicx' => [
[
"title" => "Action Comics #1000: The Deluxe Edition",
"description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
"thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX",
"price" => "$19.99",
"series" => "Action Comics",
"sale_date" => "2018-10-02",
"type" => "comic book",
"artists" => [
"José Luis García-López",
"Clay Mann",
"Rafael Albuquerque",
"Patrick Gleason",
"Dan Jurgens",
"Joe Shuster",
"Neal Adams",
"Curt Swan",
"John Cassaday",
"Olivier Coipel",
"Jim Lee"
],
"writers" => [
"Brad Meltzer",
"Tom King",
"Scott Snyder",
"Geoff Johns",
"Brian Michael Bendis",
"Paul Dini",
"Louise Simonson",
"Richard Donner",
"Marv Wolfman",
"Peter J. Tomasi",
"Dan Jurgens",
"Jerry Siegel",
"Paul Levitz"
],
],
];

@endphp

@section('ready')
    <section>
        <div id="current-series" class="container m-auto row p-5 position-relative">
            {{--$comicx = config('comicsdb.comics');--}}

            @foreach($comicx as $comic)
                <div class="cover-wrapper col-12 col-sm-6 col-md-3 col-lg-2">
                    <div class="cover position-relative">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        <div class='comic-info position-absolute w-100 h-100 top-0'>
                            <div class="position-absolute bottom-0 end-0">
                                <span class="price d-block">{{$comic['price']}}</span>
                                <span class="type d-block text-uppercase">{{$comic['type']}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-uppercase py-3 px-2">
                        {{$comic['series']}}
                    </div>
                </div>
            @endforeach
            <div class="banner position-absolute top-0 text-uppercase fs-4 py-1 px-4">
                Current series
            </div>
        </div>
        <div class="p-4">
            <button class="d-block m-auto text-uppercase py-1 px-5 fs-6 fw-bolder">load more</button>
        </div>
    </section>
@endsection


