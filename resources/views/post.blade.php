@extends('app')

@section('title')

@endsection

@section('content')
<div class="detail-main row">
    <div class="detail-header col-md-8">
        <div class="detail-top">
            <img src="{{ asset('storage/' . $posts->image) }}" class="img-fluid" alt="">
        </div>
        <div class="detail-title">
            <h1>{{ $posts->title }}</h1>
            <p class="date"><i class="fa fa-calendar-alt"
                    aria-hidden="true"></i>&nbsp;{{ \Carbon\Carbon::parse($posts->created_at)->format('d-m-Y')}}</p>
        </div>
        <div class="detail-post">
            <p>{!! $posts->content !!}</p>
        </div>

    </div>
    <div class="recent-post col-md-4">
        <h1>Latest Posts</h1>
        <div class="recent-item row">
            <div class="col-md-9">
                <h3>Title Posts</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus, dicta libero vel
                    illum numquam alias
                    facere possimus officia necessitatibus eos blanditiis.</p>
            </div>
        </div>
        <hr>
    </div>
</div>
@endsection