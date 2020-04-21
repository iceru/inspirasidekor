@extends('app')

@section('title')
Architecture
@endsection

@section('content')
<div class="post-main row">
    <div class="title col-md-8">
        <h1>Architecture Posts</h1>
        <hr>
    </div>
    <div class="post col-md-8">
        @foreach ($archi as $archi)
        <div class="post-item row">
            <div class="post-img col-md-4">
                <img src="{{ asset('storage/'. $archi->image) }}" class="img-fluid" alt="">
            </div>
            <div class="post-text col-md-8">
                <a href="/post/{{$archi->slug}}">
                    <h1>{{ $archi->title }}</h1>
                </a>
                <p class="date"><i class="fa fa-calendar-alt"
                        aria-hidden="true"></i>&nbsp;{{ \Carbon\Carbon::parse($archi->created_at)->format('d-m-Y')}}</p>
                <p>{!! \Illuminate\Support\Str::limit($archi->content, 300, $end='...') !!} <a href="">Read More</a>
                    <p>
            </div>
        </div>
        @endforeach
    </div>

    <div class="ads col-md-4">
        <img src="img/fff.png" class="img-fluid" alt="">
        <img src="img/fff.png" class="img-fluid" alt="">
    </div>
</div>
@endsection