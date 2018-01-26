@extends('backend.app');

@section('icerik')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Blog</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Button Example <small>Users</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Ekleme</th>
                                        <th>Baslik</th>
                                        <th>Yazar</th>
                                        <th>Kategori</th>
                                        <th>Hit</th>
                                        <th>Yorumlar</th>
                                        <th>Sil</th>
                                        <th>Duzenle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $sira=1;
                                    ?>
                                    @foreach($bloglar as $blog)
                                        <tr>
                                            <td>{{$blog->created_at}}</td>
                                            <td>{{$blog->baslik}}</td>
                                            <td>{{$blog->yazar}}</td>
                                            <td>{{$blog->kategori}}</td>
                                            <td>{{$blog->hit}}</td>
                                            <td></td>
                                            <td>
                                                <input onclick="sil(this,'{{$blog->slug}}');" type="button" class="btn btn-danger" value="sil">
                                            </td>
                                            <td>
                                                <a href="blog/blog_duzenle/{{$blog->slug}}" class="btn btn-primary">Duzenle</a>
                                            </td>
                                        </tr>
                                        <?php
                                            $sira++;
                                        ?>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /page content -->


    @endsection

@section('js')
    <!-- Datatables -->
    <script src="/js/jquery.form.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/messages_tr.js"></script>
    <script src="/js/sweetalert2.min.js"></script>
    <script src="/backend/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/backend/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="/backend/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/backend/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/backend/vendors/pdfmake/build/vfs_fonts.js"></script>

    <script>
        function sil(r,slug){
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
                        'slug':slug,
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
                            document.getElementById("datatable-buttons").deleteRow(sira);
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
    <!-- Datatables -->
    <link href="/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/sweetalert2.min.css">

    @endsection