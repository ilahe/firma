@extends('frontend.app')

@section('icerik')

<div role="main" class="main">

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>Large Image</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-lg-9">
                <div class="blog-posts">

                    @foreach($bloglar as $blog)

                    <article class="post post-large">
                        <div class="post-image">
                            <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">

                                @foreach($resimler=Storage::disk('uploads')->files('img/blog/'.$blog->slug) as $resim)
                                <div>
                                    <div class="img-thumbnail d-block">
                                        <img class="img-fluid" src="/uploads/{{$resim}}" alt="">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="post-date">
                            <span class="day">10</span>
                            <span class="month">Jan</span>
                        </div>

                        <div class="post-content">

                            <h2><a href="/blog/{{$blog-> slug}}">
                                {{$blog->baslik}}</a></h2>
                            <p>{{$blog->kisa_icerik}} [...]</p>

                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="/blog/{{$blog->slug}}" class="btn btn-xs btn-primary">Devamini oku...</a></span>
                            </div>

                        </div>
                    </article>
                    @endforeach

                    <ul class="pagination float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>

                </div>
            </div>

            @include('frontend.blog_sidebar');
        </div>

    </div>

</div>
@endsection

@section('js')

@endsection

@section('css')

@endsection
