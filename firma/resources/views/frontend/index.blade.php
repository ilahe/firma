@extends('frontend.app')

@section('icerik')
<div role="main" class="main">

    <div class="slider-container rev_slider_wrapper" style="height: 677px;">
        <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 800, 'gridheight': 677, 'responsiveLevels': [4096,1200,992,500]}">
            <ul>
                <li data-transition="fade">
                    <img src="img/slides/slide-bg-4.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption"
                         data-x="center" data-hoffset="-150"
                         data-y="center" data-voffset="-95"
                         data-start="1000"
                         style="z-index: 5"
                         data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption top-label"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="-95"
                         data-start="500"
                         style="z-index: 5"
                         data-transform_in="y:[-300%];opacity:0;s:500;">DO YOU NEED A NEW</div>

                    <div class="tp-caption"
                         data-x="center" data-hoffset="150"
                         data-y="center" data-voffset="-95"
                         data-start="1000"
                         style="z-index: 5"
                         data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption main-label"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="-45"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style="z-index: 5"
                         data-mask_in="x:0px;y:0px;">WEB DESIGN?</div>

                    <div class="tp-caption bottom-label"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="5"
                         data-start="2000"
                         data-fontsize="['20','20','20','30']"
                         style="z-index: 5"
                         data-transform_in="y:[100%];opacity:0;s:500;">Check out our options and features.</div>

                    <a class="tp-caption btn btn-lg btn-primary btn-slider-action"
                       data-hash
                       data-hash-offset="85"
                       href="#home-intro"
                       data-x="center" data-hoffset="0"
                       data-y="center" data-voffset="80"
                       data-start="2200"
                       data-whitespace="nowrap"
                       data-fontsize="['22','22','22','32']"
                       data-transform_in="y:[100%];s:500;"
                       data-transform_out="opacity:0;s:500;"
                       style="z-index: 5"
                       data-mask_in="x:0px;y:0px;">Get Started Now!</a>

                </li>
                <li data-transition="fade">

                    <img src="img/slides/slide-bg-3.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption featured-label"
                         data-x="center"
                         data-y="center" data-voffset="-45"
                         data-start="500"
                         data-fontsize="['52','52','52','62']"
                         style="z-index: 5"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;">WELCOME TO PORTO</div>

                    <div class="tp-caption bottom-label"
                         data-x="center"
                         data-y="center" data-voffset="5"
                         data-start="1000"
                         data-fontsize="['23','23','23','30']"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;"
                         data-transform_out="opacity:0;s:500;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-splitin="chars"
                         data-splitout="none"
                         data-responsive_offset="on"
                         style="font-size: 23px; line-height: 30px;"
                         data-elementdelay="0.05">The #1 Selling HTML Site Template on ThemeForest</div>

                </li>
            </ul>
        </div>
    </div>

    <div class="home-intro" id="home-intro">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-8">
                    <p>
                        The fastest way to grow your business with the leader in <em>Technology</em>
                        <span>Check out our options and features included.</span>
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="get-started text-left text-lg-right">
                        <a href="#" class="btn btn-lg btn-primary">Get Started Now!</a>
                        <div class="learn-more">or <a href="index.html">learn more.</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">

        <div class="row text-center">
            <div class="col">
                <h2 class="mb-2 word-rotator-title">
                    Porto is the <strong>#1 Selling</strong> HTML Site Template on ThemeForest
                </h2>
                <p class="lead">
                    Trusted by over 25,000 satisfied users, Porto became the best-selling HTML template<br> in the of one of the world's largest MarketPlace.
                </p>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div style="margin: 45px 0px -30px; overflow: hidden;">
                    <img src="img/dark-and-light.jpg" class="img-fluid appear-animation" data-appear-animation="fadeInUp" alt="dark and light">
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="fa fa-group"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-0">Customer Support</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="fa fa-file"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-0">HTML5 / CSS3 / JS</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="fa fa-film"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-0">Sliders</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-0">Icons</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="fa fa-bars"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-0">Buttons</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-0">Lightbox</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row counters">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="counter counter-dark">
                    <i class="fa fa-user"></i>
                    <strong data-to="25000" data-append="+">0</strong>
                    <label>Happy Clients</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="counter counter-dark">
                    <i class="fa fa-star"></i>
                    <strong data-to="15">0</strong>
                    <label>Years in Business</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                <div class="counter counter-dark">
                    <i class="fa fa-coffee"></i>
                    <strong data-to="352">0</strong>
                    <label>Cups of Coffee</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="counter counter-dark">
                    <i class="fa fa-bar-chart"></i>
                    <strong data-to="178">0</strong>
                    <label>High Score</label>
                </div>
            </div>
        </div>

        <hr class="tall">

        <div class="row">
            <div class="col-lg-4">
                <img class="img-fluid mt-5 appear-animation" src="img/layout-styles.png" alt="layout styles" data-appear-animation="fadeInLeft">
            </div>
            <div class="col-lg-7 col-lg-offset-1">
                <h2 class="mt-5"><strong>Layout</strong> Styles &amp; Variants</h2>
                <p class="lead">
                    There are so many styles you can combine that is possible to create almost any kind of layout based on Porto Template, navigate in our preview and see the header variations, the colors, and the page content types that you will be able to use.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.
                </p>
            </div>
        </div>

        <hr class="tall">

        <div class="row">
            <div class="col-lg-7">
                <h2 class="mt-5">Exclusive <strong>Style Switcher</strong></h2>
                <p class="lead">
                    With our exlusive Style Switcher you will be able to choose any color you want for your website, choose the layout style (wide / boxed), website type (one page / normal), then generate the css that will be compiled by a {less} proccessor.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.
                </p>
            </div>
            <div class="col-lg-4 col-lg-offset-1 mt-5">
                <img class="img-fluid appear-animation" src="img/style-switcher.png" alt="style switcher" data-appear-animation="fadeInRight">
            </div>
        </div>

        <hr class="tall">

        <div class="row text-center">
            <div class="col">
                <h2 class="mb-0 word-rotator-title mt-5">
                    Our <strong>Portfolio</strong>
                </h2>
                <p class="lead mb-5">
                    Check out what we have been doing
                </p>
            </div>
        </div>

    </div>

    <div class="image-gallery sort-destination full-width mb-0">
        <div class="isotope-item">
            <div class="image-gallery-item mb-0">
                <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project.jpg" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Project Title</span>
											<span class="thumb-info-type">Project Type</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                </a>
            </div>
        </div>
        <div class="isotope-item">
            <div class="image-gallery-item mb-0">
                <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project-2.jpg" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Project Title</span>
											<span class="thumb-info-type">Project Type</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                </a>
            </div>
        </div>
        <div class="isotope-item">
            <div class="image-gallery-item mb-0">
                <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project-4.jpg" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Project Title</span>
											<span class="thumb-info-type">Project Type</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                </a>
            </div>
        </div>
        <div class="isotope-item">
            <div class="image-gallery-item mb-0">
                <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project-5.jpg" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Project Title</span>
											<span class="thumb-info-type">Project Type</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                </a>
            </div>
        </div>
        <div class="isotope-item">
            <div class="image-gallery-item mb-0">
                <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project-6.jpg" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Project Title</span>
											<span class="thumb-info-type">Project Type</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                </a>
            </div>
        </div>
    </div>

    <section class="parallax section section-text-light section-parallax section-center mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/parallax-2.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': false}">
                        <div>
                            <div class="col">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                    <div class="testimonial-author">
                                        <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                    <div class="testimonial-author">
                                        <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2 class="mb-0 word-rotator-title mt-4">
                    We're not the only ones
                    <strong>
									<span class="word-rotator" data-plugin-options="{'delay': 3500, 'animDelay': 400}">
										<span class="word-rotator-items">
											<span>excited</span>
											<span>happy</span>
										</span>
									</span>
                    </strong>
                    about Porto Template...
                </h2>
                <p class="lead">25,000+ customers in more than 100 countries use Porto Template.</p>
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="owl-carousel owl-theme" data-plugin-options="{'items': 6, 'autoplay': true, 'autoplayTimeout': 3000}">
                <div>
                    <img class="img-fluid" src="img/logos/logo-1.png" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="img/logos/logo-2.png" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="img/logos/logo-3.png" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="img/logos/logo-4.png" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="img/logos/logo-5.png" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="img/logos/logo-6.png" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="img/logos/logo-4.png" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="img/logos/logo-2.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9">
                    <div class="call-to-action-content">
                        <h3>Porto is <strong>everything</strong> you need to create an <strong>awesome</strong> website!</h3>
                        <p class="mb-0">The <strong>#1 Selling</strong> HTML Site Template on ThemeForest</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="call-to-action-btn">
                        <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary">Buy Now!</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection

@section('css')
    @endsection

@section('js')
    @endsection