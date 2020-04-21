@extends('app')

@section('title')
Inspirasi Dekor
@endsection

@section('content')

<div class="section1 row">
  <div id="carouselId" class="carousel slide col-12" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="{{ asset('storage/' . $story->image) }}" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>{{ $story->title }}</h3>
        </div>
      </div>
      @foreach ($topstory as $story)
      <div class="carousel-item">
        <img src="{{ asset('storage/' . $story->image) }}" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>{{ $story->title }}</h3>
        </div>
      </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="title col-12">
    <h1>Top Stories</h1>
    <hr>
  </div>

  <div class="story col-md-9">
    <div class="row">
      @foreach ($topstory as $story)
      <div class="story-item2 col-md-6">
        <div class="row">
          <div class="story-img col-md-4">
            <img src="{{ asset('storage/'.$story->image) }}" class="img-fluid" alt="">
          </div>
          <div class="story-text col-md-8">
            <a href="{{ '/post/' . $story->slug }}">
              <h1>{{ $story->title }}</h1>
            </a>
            <p><i class="fa fa-calendar-alt"
                aria-hidden="true"></i>&nbsp;{{ \Carbon\Carbon::parse($story->created_at)->format('d-m-Y')}}</p>
            <p>{!! \Illuminate\Support\Str::limit($story->content, 200, $end='...') !!} <a
                href="{{ '/post/' . $story->slug }}">Read More</a></p>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>

  <div class="ads col-md-3">
    <img src="img/fff.png" class="img-fluid" alt="">
    <img src="img/fff.png" class="img-fluid" alt="">
  </div>
</div>

<div class="section2 row">
  <div class="title col-12">
    <hr>
    <h1 class="text-center">Latest to Read</h1>
  </div>
  <div class="architecture col-md-6">
    <h1 class="text-center">Architecture</h1>
    @foreach ($archi as $archi)
    <a href="{{ '/post/' . $archi->slug }}">
      <h4>{{ $archi->title }}</h3>
    </a>
    <p>{!! \Illuminate\Support\Str::limit($archi->content, 200, $end='...') !!} <a
        href="{{ '/post/' . $archi->slug }}">Read More</a></p>
    <hr>
    @endforeach
  </div>

  <div class="event-decor col-md-6">
    <h1 class="text-center">Event Decor</h1>
    @foreach ($decor as $decor)
    <a href="{{ '/post/' . $decor->slug }}">
      <h4 class="text-right">{{ $decor->title }}</h4>
    </a>
    <p class="text-right">{!! \Illuminate\Support\Str::limit($decor->content, 200, $end='...') !!} <a
        href="{{ '/post/' . $decor->slug }}">Read More</a></p>
    <hr>
    @endforeach
  </div>
</div>

@endsection