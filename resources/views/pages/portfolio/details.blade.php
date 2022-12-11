@extends('layouts.default')

@section('title', 'Home')

@section('content')
    <section data-bs-version="5.1" class="gallery2 cid-tj7EI9Nwsf" id="gallery2-2">
        <div class="container">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>{{ $portfolio->title }}</strong>
                </h4>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-8 mb-3">
                    <div id="carouselExampleCaptions" class="carousel carousel-dark slide carousel-fade w-50 mx-auto" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach (json_decode($portfolio->images) as $image)
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $loop->index }}" class="bg-light @if($loop->first) active @endif" aria-current="true" aria-label="Slide {{ $loop->iteration }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach (json_decode($portfolio->images) as $image)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <img class="w-100" src="{{ asset($image) }}" alt="">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row mb-2">
                        @foreach (json_decode($portfolio->images) as $image)
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $loop->index }}" class="@if($loop->first) active @endif" aria-current="true" aria-label="Slide {{ $loop->iteration }}">
                                    <img class="w-100" src="{{ asset($image) }}" alt="">
                            </button>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        @if( !empty($portfolio->client) )
                            <div>
                                Client: <strong>{{ $portfolio->client }}</strong>
                            </div>
                        @endif
                        @if( !empty($portfolio->descrition) )
                            <div>
                                Descriptin: <strong>{{ $portfolio->descrition }}</strong>
                            </div>
                        @endif
                        @if( count($tags) > 0 )
                            <div>
                                Tags:
                                @foreach ($tags as $tag)
                                <strong>{{ $tag->tag }}</strong>{{ count($tags) > 1 ? ',' : '' }}
                                @endforeach
                            </div>
                        @endif
                        @if( !empty($portfolio->category) )
                            <div>
                                Category: <strong>{{ $portfolio->category }}</strong>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
