@extends('frontend.app')

@section('icerik')

<div role="main" class="main">

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>Hakkimizda</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-10">
                <p class="lead">
                    {{$hakkimizda->kisa_yazi}}
                </p>
            </div>
            <div class="col-lg-2">
                <a href="/iletisim" class="btn btn-lg btn-primary">Bize Ulasin!</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <hr class="tall">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-7 col-xl-8">
                <h3 class="heading-primary"><strong>Biz</strong> Kimiz</h3>
                <p>{{$hakkimizda->icerik}}</p>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="featured-box featured-box-primary">
                    <div class="box-content">
                        <h4 class="text-uppercase">Behind the scenes</h4>
                        <ul class="thumbnail-gallery mb-4 pb-3" data-plugin-lightbox data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                            <li>
                                <a title="Benefits 1" href="img/benefits/benefits-1.jpg">
												<span class="thumbnail mb-0">
													<img src="img/benefits/benefits-1-thumb.jpg" alt="">
												</span>
                                </a>
                            </li>
                            <li>
                                <a title="Benefits 2" href="img/benefits/benefits-2.jpg">
												<span class="thumbnail mb-0">
													<img src="img/benefits/benefits-2-thumb.jpg" alt="">
												</span>
                                </a>
                            </li>
                            <li>
                                <a title="Benefits 3" href="img/benefits/benefits-3.jpg">
												<span class="thumbnail mb-0">
													<img src="img/benefits/benefits-3-thumb.jpg" alt="">
												</span>
                                </a>
                            </li>
                            <li>
                                <a title="Benefits 4" href="img/benefits/benefits-4.jpg">
												<span class="thumbnail mb-0">
													<img src="img/benefits/benefits-4-thumb.jpg" alt="">
												</span>
                                </a>
                            </li>
                            <li>
                                <a title="Benefits 5" href="img/benefits/benefits-5.jpg">
												<span class="thumbnail mb-0">
													<img src="img/benefits/benefits-5-thumb.jpg" alt="">
												</span>
                                </a>
                            </li>
                            <li>
                                <a title="Benefits 6" href="img/benefits/benefits-6.jpg">
												<span class="thumbnail mb-0">
													<img src="img/benefits/benefits-6-thumb.jpg" alt="">
												</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="tall">

        <div class="row">
            <div class="col-md-12">
                <h3 class="heading-primary"><strong>Vizyonumuz</strong></h3>
            </div>
            <div class="featured-box featured-box-primary">
                <div class="box-content ">
                    {{$hakkimizda->vizyon}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading-primary"><strong>Misyonumuz</strong></h3>
            </div>
            <div class="featured-box featured-box-primary">
                <div class="box-content ">
                    {{$hakkimizda->misyon}}
                </div>
            </div>
        </div>




    </div>

</div>

@endsection

@section('js')


@endsection

@section('css')

@endsection