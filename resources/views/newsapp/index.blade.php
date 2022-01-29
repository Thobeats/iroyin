@extends('layouts.app')

@section('title', $title)

@section('slider')
<div id="carouselExampleInterval" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    @for($i = 0; $i < $count; $i++)
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="{{ $i == 0 ? 'active' : '' }}"></li>
   @endfor
  </ol>
  <div class="carousel-inner">
@foreach($top_headlines as $key => $TH)
    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-interval="2000" style='height: 90vh'>
      <div class='img_container' style='background-image : linear-gradient(to bottom, rgba(0, 0, 0, 0.264), rgba(0, 0, 0, 0.264), rgba(0, 0, 0, 1)), url({{ $TH->urlToImage }});'>
        <div class="carousel-caption d-none d-md-block p-3 text-light text-left">
          <h3 class='text-bold'>
            {{ $TH->title }}
          </h3>
          <p class='text-secondary'>
            {{ $TH->source->name }}
          </p>
          <a href="{{ $TH->url }}" target='_blank' class='read_more'>
            Read More
          </a>
        </div>
      </div>
    </div>
@endforeach
  
  </div>
 
</div>
@endsection

@section('content')

<section class='p-3 mt-3'>
  <div class="row">
    <div class="col-6 mt-3">
      <h5 class='category_header'>Business</h3>

  @foreach($business as $bus)
      <div class="card-body bg-light mt-4">
        <h6 class="card-title">
          {{ $bus->title }}
        </h6>

        <div class='row'>
          <div class="col-8">
            <span class="text-secondary card_source">
                {{ $bus->source->name}}
            </span>
          </div>
          <div class="col-4">
            <a href="{{$bus->url}}" target = "_blank" class='text-danger read_more card_source'>Read more</a>
          </div>
        </div>
      </div>  
    @endforeach
    </div>
    <div class="col-6 mt-3">
      <h5 class='category_header'>Health</h3>

      @foreach($health as $bus)
      <div class="card-body bg-light mt-4">
        <h6 class="card-title">
          {{ $bus->title }}
        </h6>

        <div class='row'>
          <div class="col-8">
            <span class="text-secondary card_source">
                {{ $bus->source->name}}
            </span>
          </div>
          <div class="col-4">
            <a href="{{$bus->url}}" target = "_blank" class='text-danger read_more card_source'>Read more</a>
          </div>
        </div>
      </div>  
    @endforeach 
    </div>

    <div class="col-6 mt-3">
      <h5 class='category_header'>Entertainment</h3>

      @foreach($entertainment as $bus)
      <div class="card-body bg-light mt-4">
        <h6 class="card-title">
          {{ $bus->title }}
        </h6>

        <div class='row'>
          <div class="col-8">
            <span class="text-secondary card_source">
                {{ $bus->source->name}}
            </span>
          </div>
          <div class="col-4">
            <a href="{{$bus->url}}" target = "_blank" class='text-danger read_more card_source'>Read more</a>
          </div>
        </div>
      </div>  
    @endforeach 
    </div>

    <div class="col-6 mt-3">
      <h5 class='category_header'>Sports</h3>

      @foreach($sports as $bus)
      <div class="card-body bg-light mt-4">
        <h6 class="card-title">
          {{ $bus->title }}
        </h6>

        <div class='row'>
          <div class="col-8">
            <span class="text-secondary card_source">
                {{ $bus->source->name}}
            </span>
          </div>
          <div class="col-4">
            <a href="{{$bus->url}}" target = "_blank" class='text-danger read_more card_source'>Read more</a>
          </div>
        </div>
      </div>  
    @endforeach 
    </div>

    <div class="col-6 mt-3">
      <h5 class='category_header'>Technology</h3>

      @foreach($technology as $bus)
      <div class="card-body bg-light mt-4">
        <h6 class="card-title">
          {{ $bus->title }}
        </h6>

        <div class='row'>
          <div class="col-8">
            <span class="text-secondary card_source">
                {{ $bus->source->name}}
            </span>
          </div>
          <div class="col-4">
            <a href="{{$bus->url}}" target = "_blank" class='text-danger read_more card_source'>Read more</a>
          </div>
        </div>
      </div>  
    @endforeach 
    </div>

  </div>
</section>

@endsection
@section('sidebar')

    @parent

  <section class="mt-3 p-2">
      @foreach($sidebar as $side)
        <div class="card-body bg-light">
          <a href="{{ $side->url }}" target='_blank' class='text-danger'>{{ $side->title }}</a>
          <p class='text-right text-secondary card_source font-italic'> {{ date('Y-m-d h:i:s', strtotime($side->publishedAt))}}</p>
        </div>
      @endforeach
  </section>
@endsection

