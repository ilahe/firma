@extends('backend.app')

@section('icerik')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Hakkimizda</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <form action="" method="post" id="form" data-parsley-validate class="form-horizontal form-label-left">
                                {{csrf_field()}}
                                {{Form:: bsText('vizyon', 'vizyon', $hakkimizda->vizyon)}}
                                {{Form:: bsText('misyon', 'misyon', $hakkimizda->misyon)}}
                                {{Form:: bsText('kisa_yazi', 'kisa_yazi', $hakkimizda->kisa_yazi)}}

                                <div class="form-group">
                                    <label class="control-label col-sm-3 col-md-3 col-xs-12"
                                           for="last-name">Aciklama
                                    </label>
                                    <div class="col-sm-6 col-md-6 col-xs-12">
                                        <textarea class=" form-control col-md-7 col-xs-12" name="icerik" id="" cols="30" rows="10">{{$hakkimizda->icerik}}</textarea>
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
    <!-- /page content -->


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