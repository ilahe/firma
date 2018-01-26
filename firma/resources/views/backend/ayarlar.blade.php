@extends('backend.app')

@section('icerik')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>General Elements</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

    <div class="">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">

                    <form method="post" id="form" data-parsley-validate class="form-horizontal form-label-left">
                        {{csrf_field()}}

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#genel_ayarlar" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Genel Ayarlar</a>
                            </li>
                            <li role="presentation" class=""><a href="#iletisim_ayarlari" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Iletisim Ayarlari</a>
                            </li>
                            <li role="presentation" class=""><a href="#sosyal_medya" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Sosyal Medya</a>
                            </li>
                            <li role="presentation" class=""><a href="#google_api" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Google API</a>
                            </li>
                            <li role="presentation" class=""><a href="#mail_ayarlari" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Mail Ayarlari</a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="genel_ayarlar" aria-labelledby="home-tab">

                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-xs-12"
                                               for="last-name">Mevcut Logo
                                        </label>
                                        <div class="col-sm-6 col-md-6 col-xs-12">
                                            <img src="/uploads/img/{{$ayarlar->logo}}" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-xs-12"
                                               for="last-name">Site Logo
                                        </label>
                                        <div class="col-sm-6 col-md-6 col-xs-12">
                                            <input type="file" class="form-control col-md-7 col-xs-12" name="logo">
                                            <input type="hidden" name="eski_logo" value="{{$ayarlar->logo}}">
                                        </div>
                                    </div>
                                    {{Form:: bsText('title', 'site basligi', $ayarlar->title)}}
                                    {{Form:: bsText('keywords', 'site anahtar kelimeler', $ayarlar->keywords)}}
                                    {{Form:: bsText('description', 'site aciklama', $ayarlar->description)}}
                                    {{Form:: bsText('url', 'site adresi', $ayarlar->url)}}

                            </div>


                            <div role="tabpanel" class="tab-pane fade" id="iletisim_ayarlari" aria-labelledby="profile-tab">

                                    {{Form:: bsText('telefon', 'telefon', $ayarlar->telefon)}}
                                    {{Form:: bsText('gsm', 'gsm', $ayarlar->gsm)}}
                                    {{Form:: bsText('faks', 'faks', $ayarlar->faks)}}
                                    {{Form:: bsText('mail', 'mail', $ayarlar->mail)}}
                                    {{Form:: bsText('adres', 'adres', $ayarlar->adres)}}
                                    {{Form:: bsText('il', 'il', $ayarlar->il)}}
                                    {{Form:: bsText('ilce', 'ilce', $ayarlar->ilce)}}

                            </div>


                            <div role="tabpanel" class="tab-pane fade" id="sosyal_medya" aria-labelledby="profile-tab">

                                    {{Form:: bsText('facebook', 'facebook', $ayarlar->facebook)}}
                                    {{Form:: bsText('twitter', 'twitter', $ayarlar->twitter)}}
                                    {{Form:: bsText('instagram', 'instagram', $ayarlar->instagram)}}
                                    {{Form:: bsText('youtube', 'youtube', $ayarlar->youtube)}}

                            </div>


                            <div role="tabpanel" class="tab-pane fade" id="google_api" aria-labelledby="profile-tab">

                                    {{Form:: bsText('google', 'google hesabi', $ayarlar->google)}}
                                    {{Form:: bsText('recaptcha', 'recaptcha', $ayarlar->recaptcha)}}
                                    {{Form:: bsText('maps', 'maps', $ayarlar->maps)}}
                                    {{Form:: bsText('analytics', 'analytics', $ayarlar->analytics)}}

                            </div>


                            <div role="tabpanel" class="tab-pane fade" id="mail_ayarlari" aria-labelledby="profile-tab">

                                    {{Form:: bsText('smtp_user', 'smtp_user', $ayarlar->smtp_user)}}
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 col-md-3 col-xs-12"
                                               for="last-name">Şifre
                                        </label>
                                        <div class="col-sm-6 col-md-6 col-xs-12">
                                            <input type="password" class="form-control col-md-7 col-xs-12" name="smtp_password" value="{{$ayarlar->smtp_password}}">
                                        </div>
                                    </div>
                                    {{Form:: bsText('smtp_host', 'smtp_host', $ayarlar->smtp_host)}}
                                    {{Form:: bsText('smtp_port', 'smtp_port', $ayarlar->smtp_port)}}

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Kaydet</button>
                        </div>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
        </div>
    </div>


@endsection




@section('js')

    <script src="/js/jquery.form.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/messages_tr.js"></script>
    <script src="/js/sweetalert2.min.js"></script>
    <script>
        $(document).ready(function(){
            $('form').validate();
            $('form').ajaxForm({
                beforeSubmit:function() {

                },
                success:function(response){

                        swal(
                            response.baslik,
                            response.icerik,
                            response.durum
                        )

                }

            });
        });





    </script>

@endsection




@section('css')

    <link rel="stylesheet" href="/css/sweetalert2.min.css">

    @endsection