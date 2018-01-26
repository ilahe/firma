@extends('frontend.app')

@section('icerik')
<div role="main" class="main">

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Bize Ulasin</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-lg-6">

                <div class="alert alert-success d-none mt-4" id="contactSuccess">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>

                <div class="alert alert-danger d-none mt-4" id="contactError">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
                </div>

                <h2 class="mb-3 mt-2"><strong>Contact</strong> Us</h2>

                <form id="contactForm" action="http://preview.oklerthemes.com/porto/6.0.0/php/contact-form.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label>Isminiz *</label>
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Mail Adresiniz *</label>
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label>Konu</label>
                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label>Mesaj *</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">

                <h4 class="heading-primary">Bize <strong>Ulasmak Icin</strong></h4>
                <ul class="list list-icons list-icons-style-3 mt-4">
                    <li><i class="fa fa-map-marker"></i> <strong>Adres:</strong> {{$ayarlar->adres}} {{$ayarlar->il}}/{{$ayarlar->ilce}}</li>
                    <li><i class="fa fa-phone"></i> <strong>Telefon:</strong> {{$ayarlar->telefon}}</li>
                    <li><i class="fa fa-phone"></i> <strong>Faks:</strong> {{$ayarlar->faks}}</li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:{{$ayarlar->mail}}">{{$ayarlar->mail}}</a></li>
                </ul>

                <hr>

                <h4 class="heading-primary">Sosyal <strong>Medya</strong></h4>
                <ul class="header-social-icons social-icons d-none d-sm-block">
                    <li ><a href="{{$ayarlar->facebook}}" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li ><a href="{{$ayarlar->twitter}}" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li ><a href="{{$ayarlar->instagram}}" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                    <li ><a href="{{$ayarlar->youtube}}" target="_blank" title="youtube"><i class="fa fa-youtube"></i></a></li>
                </ul>

            </div>

        </div>

    </div>

</div>


    @endsection

@section('js')


    @endsection

@section('css')

    @endsection