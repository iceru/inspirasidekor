@extends('app')

@section('title')

@endsection

@section('content')
<div class="detail-main row">
    <div class="detail-header col-md-8">
        <p><i class="fa fa-user-circle" aria-hidden="true"></i> Author, Date Posts</p>
        <h1>Title Post</h1>
        <img src="img/banner1.jpg" class="img-fluid" alt="">
        <hr>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, corporis architecto? Nemo laborum
            adipisci distinctio illum nam atque consectetur voluptates eum voluptatum dicta quis, totam itaque officiis
            unde ipsum voluptate.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate ut at necessitatibus eaque atque
            aspernatur obcaecati alias consequatur unde temporibus qui molestias, quae vel. Temporibus provident
            nesciunt perferendis minus repudiandae.</p>
    </div>
    <div class="recent-post col-md-4">
        <h1>Latest Posts</h1>
        <div class="recent-item row">
            <div class="col-md-3">
                <img src="img/banner1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-9">
                <h3>Title Posts</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus, dicta libero vel
                    illum numquam alias
                    facere possimus officia necessitatibus eos blanditiis.</p>
            </div>
        </div>
        <hr>
        <div class="recent-item row">
            <div class="col-md-3">
                <img src="img/banner2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-9">
                <h3>Title Posts</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus, dicta libero vel
                    illum numquam alias
                    facere possimus officia necessitatibus eos blanditiis.</p>
            </div>
        </div>
        <hr>
        <div class="recent-item row">
            <div class="col-md-3">
                <img src="img/banner3.jpg" class="img-fluid" alt="">
            </div>
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