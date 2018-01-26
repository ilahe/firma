@extends('backend.app')

@section('icerik')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <table id="table" class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Ad</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($kategoriler as $kategori)
                    <tr>
                      <th scope="row">{{$kategori->id}}</th>
                      <td>{{$kategori->ad}}</td>
                      <td>
                        <!-- <input onclick="sil(this,'{{$kategori->id}}');" type="button" class="btn btn-danger" value="sil"> -->
                        <button onclick="sil(this, '{{$kategori->id}}')" class="btn btn-danger">Sil</button>
                      </td>

                    </tr>
                        @foreach($kategori->children as $altkategori)
                        <tr>
                          <th scope="row">{{$altkategori->id}}</th>
                          <td>{{$kategori->ad}}-->{{$altkategori->ad}}</td>
                          <td>
                            <!-- <input onclick="sil(this,'{{$altkategori->id}}');" type="button" class="btn btn-danger" value="sil"> -->
                            <button onclick="sil(this, '{{$altkategori->id}}')" class="btn btn-danger">Sil</button>
                          </td>
                        </tr>
                              @foreach($altkategori->children as $altaltkategori)
                              <tr>
                                <th scope="row">{{$altaltkategori->id}}</th>
                                <td>{{$kategori->ad}}-->{{$altkategori->ad}}-->{{$altaltkategori->ad}}</td>
                                <td>
                                 <!--  <input onclick="sil(this,'{{$altaltkategori->id}}');" type="button" class="btn btn-danger" value="sil"> -->
                                  <button onclick="sil(this, '{{$altaltkategori->id}}')" class="btn btn-danger">Sil</button>
                                </td>
                              </tr>
                              @endforeach
                        @endforeach
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection

@section('js')

    <script src="/js/jquery.form.min.js"></script>
    <script src="/js/sweetalert2.min.js"></script>
    
    <script>
        function sil(r,id){
            var sira=r.parentNode.parentNode.rowIndex;  
            swal({
                title: 'Silmek istediginize emin misiniz?',
                text: "Sildiginizde geri donusumu olmayacakdir!",
                type: 'warning',
                showCancelButton: true,
                cancelButtonText: 'iptal',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Evet, Sil!'
                }).then(function() {
                var CSRF_TOKEN = $ ('meta[name="csrf-token"]').attr('content');
                $.ajax
                ({

                    type  : "Post",
                    url :'',
                    data   :{
                        'id':id,
                        '_token': CSRF_TOKEN
                    },
                    beforeSubmit:function() {
                        swal({
                            title: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Loading...</span>',
                            text: 'Yukleniyor lutfen bekleyiniz...',
                            showConfirmButton: false
                        })
                    },
                    success:function(response){
                        if (response.durum == 'success') {

                            document.getElementById("table").deleteRow(sira);
                        }
                        swal(
                            response.baslik,
                            response.icerik,
                            response.durum

                            );
                        }
                    })
                })
            }
    </script>

    @endsection

@section('css')

      <link rel="stylesheet" href="/css/sweetalert2.min.css">

    @endsection