 @extends('admin.layout.index')

@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Sản Phẩm
                            <small>Thêm mới</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

                        @if(count($errors)>0)
                        <div class="alert alert-danger" > 
                            @foreach($errors ->all() as $err )
                               {{$err}} <br>

                            @endforeach
                        </div>
                        @endif

                        @if(session('thongbao'))
                            <div  class="alert alert-success" >
                            {{session('thongbao')}}

                            </div>

                         @endif


                        <form action="admin/loaisp/them" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           
                            <div class="form-group">
                                <label> Tên sản phẩm</label>
                                <input class="form-control" name="TenSP" placeholder="Nhập tên sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Mô Tả</label>
                                <input class="form-control" name="MoTa" placeholder="Nhập mô tả" />
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input class="form-control" name="img" placeholder="Tên hình ảnh" />
                            </div>
                           
                            
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm Mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        
@endsection        