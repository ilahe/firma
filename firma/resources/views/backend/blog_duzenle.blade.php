@extends('backend.app');

@section('icerik')
<?php $sayi=0; ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Blog Duzenle</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="row">

                            <p>Media gallery design emelents</p>

                            @foreach($resimler=Storage::disk('uploads')->files('img/blog/'.$bloglar->slug) as $resim)  

                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block; height: 170px;" src="/uploads/{{$resim}}" alt="image" />
                                        <div class="mask">
                                            <div class="tools tools-bottom">
                                                <form action="" id="form" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="resim" value="{{$resim}}">
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
                                                    
                                                </form>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php $sayi++; ?>
                            @endforeach



                        </div>
                        <form method="post" id="form" data-parsley-validate class="form-horizontal form-label-left">
                            {{csrf_field()}}
                                <div class="form-group">
                                    <label class="control-label col-sm-3 col-md-3 col-xs-12"
                                           for="last-name">Yeni resim ekle
                                    </label>
                                    <div class="col-sm-6 col-md-6 col-xs-12">
                                        <input type="file" name="resimler[]" multiple="" class=" form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                {{Form:: bsText('baslik', 'baslik', $bloglar->baslik, ['required' => 'required'])}}
                                {{Form:: bsText('kisa_icerik', 'kisa_icerik', $bloglar->kisa_icerik, ['required' => 'required'])}}
                                {{Form:: bsText('etiketler', 'etiketler', $bloglar->etiketler, ['required' => 'required'])}}
                                <div class="form-group">
                                    <label class="control-label col-sm-3 col-md-3 col-xs-12"
                                           for="last-name">Icerik
                                    </label>
                                    <div class="col-sm-6 col-md-6 col-xs-12">
                                        <textarea class=" form-control col-md-7 col-xs-12 ckeditor" required name="icerik" id="" cols="30" rows="10">
                                            {{$bloglar->icerik}}
                                        </textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <input type="hidden" name="sayi" value="{{$sayi}}">
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
<!-- /page content --> 
@endsection


@section('js')

    <script src="/js/jquery.form.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/messages_tr.js"></script>
    <script src="/js/sweetalert2.min.js"></script>
    <script src="/js/ckeditor/ckeditor.js"></script>
    <script>
        $(document).ready(function(){
            $('form').validate();
            $('form').ajaxForm({
                beforeSubmit:function() {

                    swal({
                          title: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Loading...</span>',
                          text: 'Yukleniyor lutfen bekleyiniz',
                          showConfirmButton: false
                        
                        })

                },

                beforeSerialize:function(){
                    for (instance in CKEDITOR.instances)CKEDITOR.instances[instance].updateElement();
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