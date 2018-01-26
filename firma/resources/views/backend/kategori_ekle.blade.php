@extends('backend.app')

@section('icerik')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Kategori Ekle</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <form method="post" id="form" data-parsley-validate class="form-horizontal form-label-left">
                            {{csrf_field()}}
                                <div class="form-group">
                                    <label class="control-label col-sm-3 col-md-3 col-xs-12"
                                           for="last-name">Kategoriler
                                    </label>
                                    <div class="col-sm-6 col-md-6 col-xs-12">
                                        <select class="form-control" name="ust_kategori">
                                        	<option value="0">Uste Kategori</option>
                                            @foreach($kategoriler as $kategori)
                                                <option value="{{$kategori->id}}">{{$kategori->ad}}</option>
                                                @foreach($kategori->children as $altkategori)
                                                    <option value="{{$altkategori->id}}">{{$kategori->ad}}-->{{$altkategori->ad}}</option>
                                                    @foreach($altkategori->children as $altaltkategori)
                                                    <option value="{{$altaltkategori->id}}">{{$kategori->ad}}-->{{$altkategori->ad}}-->{{$altaltkategori->ad}}</option>
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                        	
                                        	
                                        </select>
                                    </div>
                                </div>
                                {{Form:: bsText('ad', 'ad')}}
                               
                                
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

                    swal({
                          title: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Loading...</span>',
                          text: 'Yukleniyor lutfen bekleyiniz',
                          showConfirmButton: false
                        
                        })

                },

                beforeSerialize:function(){
                    
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