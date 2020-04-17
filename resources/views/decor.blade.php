@extends('app')

@section('title')
Event Decoration
@endsection

@section('content')
<div class="post-main row">
    <div class="title col-md-8">
        <h1>Event Decoration Posts</h1>
        <hr>
    </div>
    <div class="post col-md-8">
        <div class="post-item row">
            <div class="post-img col-md-4">
                <img src="img/banner1.jpg" class="img-fluid" alt="">
            </div>
            <div class="post-text col-md-8">
                <h1>Post Title</h1>
                <p><i class="fa fa-user-circle" aria-hidden="true"></i> Author, Date Time</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorum minus quia perferendis alias
                    voluptatum exercitationem quaerat fugit. Repudiandae, possimus? Eligendi velit eos impedit sed odio?
                    Vero corrupti porro recusandae.</p>
            </div>
        </div>

        <div class="post-item row">
            <div class="post-img col-md-4">
                <img src="img/banner3.jpg" class="img-fluid" alt="">
            </div>
            <div class="post-text col-md-8">
                <h1>Post Title</h1>
                <p><i class="fa fa-user-circle" aria-hidden="true"></i> Author, Date Time</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorum minus quia perferendis alias
                    voluptatum exercitationem quaerat fugit. Repudiandae, possimus? Eligendi velit eos impedit sed odio?
                    Vero corrupti porro recusandae.</p>
            </div>
        </div>

        <div class="post-item row">
            <div class="post-img col-md-4">
                <img src="img/banner2.jpg" class="img-fluid" alt="">
            </div>
            <div class="post-text col-md-8">
                <h1>Post Title</h1>
                <p><i class="fa fa-user-circle" aria-hidden="true"></i> Author, Date Time</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorum minus quia perferendis alias
                    voluptatum exercitationem quaerat fugit. Repudiandae, possimus? Eligendi velit eos impedit sed odio?
                    Vero corrupti porro recusandae.</p>
            </div>
        </div>
    </div>

    <div class="ads col-md-4">
        <img src="img/fff.png" class="img-fluid" alt="">
        <img src="img/fff.png" class="img-fluid" alt="">
    </div>
</div>
@endsection