@extends('app')

@section('title')
Inspirasi Dekor
@endsection

@section('content')
<div id="carouselId" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
    <li data-target="#carouselId" data-slide-to="1"></li>
    <li data-target="#carouselId" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img src="img/banner1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h3>Title</h3>
        <p>Description</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h3>Title</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur autem ratione quia unde quibusdam quis
          quod tenetur dicta perspiciatis ullam voluptate perferendis distinctio magni nisi iusto, eos aut neque?
          Obcaecati?</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h3>Title</h3>
        <p>Description</p>
      </div>
    </div>
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

<div class="section1 row">
  <div class="title col-12">
    <h1>Top Stories</h1>
    <hr>
  </div>

  <div class="story col-md-9">
    <div class="row">
      <div class="story-item1 col-12">
        <div class="row">
          <div class="story-img col-md-4">
            <img src="img/banner1.jpg" class="img-fluid" alt="">
          </div>
          <div class="story-text col-md-8">
            <h1>Story Title</h1>
            <p><i class="fa fa-user-circle" aria-hidden="true"></i> Author, Date Post</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima tempora sint dolorem quaerat quidem,
              reprehenderit libero sequi, voluptas expedita eveniet aspernatur animi sed, officiis laborum amet
              dignissimos incidunt deserunt ratione?</p>
          </div>
        </div>
      </div>

      @foreach ($topstory as $story)
      <div class="story-item2 col-md-6">
        <div class="row">
          <div class="story-img col-md-4">
            <img src="{{ asset('storage/'.$story->image) }}" class="img-fluid" alt="">
          </div>
          <div class="story-text col-md-8">
            <h1>{{ $story->title }}</h1>
            <p><i class="fa fa-calendar-minus"
                aria-hidden="true"></i>&nbsp;{{ \Carbon\Carbon::parse($story->created_at)->format('d-m-Y')}}</p>
            <p>{!! \Illuminate\Support\Str::limit($story->content, 300, $end='...') !!} <a href="">Read More</a></p>
          </div>
        </div>
      </div>
      @endforeach

      <div class="story-item2 col-md-6">
        <div class="row">
          <div class="story-img col-md-4">
            <img src="img/banner3.jpg" class="img-fluid" alt="">
          </div>
          <div class="story-text col-md-8">
            <h1>Story Title</h1>
            <p><i class="fa fa-user-circle" aria-hidden="true"></i> Author, Date Post</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quidem repellendus deserunt maxime cum
              incidunt, consequuntur aut autem fugit quas at, officia harum earum eos quis, expedita illum aliquid
              quibusdam.</p>
          </div>
        </div>
      </div>
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
    <h3>Story Title</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptates voluptas error aperiam
      repellat facilis ipsam omnis expedita eveniet optio! Suscipit, accusamus. Rerum quod maxime, porro error
      incidunt molestias laboriosam.</p>
    <hr>
    <h3>Story Title</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptates voluptas error aperiam
      repellat facilis ipsam omnis expedita eveniet optio! Suscipit, accusamus. Rerum quod maxime, porro error
      incidunt molestias laboriosam.</p>
    <hr>
    <h3>Story Title</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptates voluptas error aperiam
      repellat facilis ipsam omnis expedita eveniet optio! Suscipit, accusamus. Rerum quod maxime, porro error
      incidunt molestias laboriosam.</p>
    <hr>
  </div>

  <div class="event-decor col-md-6">
    <h1 class="text-center">Event Decor</h1>
    <h3 class="text-right">Story Title</h3>
    <p class="text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptates voluptas
      error aperiam
      repellat facilis ipsam omnis expedita eveniet optio! Suscipit, accusamus. Rerum quod maxime, porro error
      incidunt molestias laboriosam.</p>
    <hr>
    <h3 class="text-right">Story Title</h3>
    <p class="text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptates voluptas
      error aperiam
      repellat facilis ipsam omnis expedita eveniet optio! Suscipit, accusamus. Rerum quod maxime, porro error
      incidunt molestias laboriosam.</p>
    <hr>
    <h3 class="text-right">Story Title</h3>
    <p class="text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptates voluptas
      error aperiam
      repellat facilis ipsam omnis expedita eveniet optio! Suscipit, accusamus. Rerum quod maxime, porro error
      incidunt molestias laboriosam.</p>
    <hr>
  </div>
</div>

@endsection