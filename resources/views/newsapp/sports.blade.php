@extends('layouts.cat')

@section('title', $title)

{{-- @dd($big_card) --}}
@section('big_card')
    <section class="mt-3">
        <div class="card-body d-flex flex-row" style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.264), rgba(0, 0, 0, 0.264), rgba(0, 0, 0, 1)), url({{ $big_card->urlToImage }}); height: 60vh; background-size : contain;">
           <div class="align-self-end p-2">
                <h5 class="card-title text-light">{{ $big_card->title}}</h5>
                <p class="text-secondary">{{ $big_card->source->name }} <a href="{{ $big_card->url }}" class='text-light float-right read_more'>Read More</a></p>
           </div>
        </div>
    </section>
@endsection

@section('cards')
    @foreach($cards as $card)
    <section class="mt-3">
        <div class="card-body d-flex flex-row" style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.464), rgba(0, 0, 0, 1)), url({{ $card->urlToImage }}); height: 29vh; background-size : contain;">
           <div class="align-self-end p-2">
                <h6 class="card-title text-light">{{ $card->title}}</h6>
                <p class="text-secondary">{{ $card->source->name }} <a href="{{ $card->url }}" class='text-light float-right read_more'>Read More</a></p>
           </div>
        </div>
    </section>
    @endforeach
@endsection

@section('content')


<div class="row">
@foreach($rests as $bus)
    <div class='col-md-4 mt-3'>
      <div class="card-body d-flex flex-row" style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.464), rgba(0, 0, 0, 1)), url({{ $bus->urlToImage }}); height: 25vh; background-size : contain; background-position : top center;">
        <div class="align-self-end">
            <h6 class="card-title text-light">{{ $bus->title}}</h6>
            <p class="text-secondary">{{ $bus->source->name }} <a href="{{ $bus->url }}" class='text-light float-right read_more'>Read More</a></p>
        </div>
      </div>  
    </div>
    @endforeach
</div>

@endsection

