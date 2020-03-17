 @extends('admin.layout.index')

@section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại sản phẩm
                            <small>{{$loaisp->TenSP}}</small>
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

                        <form action="admin/loaisp/sua/{{$loaisp->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           
                            <div class="form-group">
                                <label>Tên Loại SP</label>
                                <input class="form-control" name="TenSP" placeholder="Nhập tên TenSP"  value="{{$loaisp->TenSP}}" />
                            </div>
                            <div class="form-group">
                                <label>Mô Tả</label>
                                <input class="form-control" name="MoTa" placeholder="nhập mô tả" />
                            </div>
                            <div class="form-group">
                                <label>Hình Ảnh</label>
                                <input class="form-control" name="img" placeholder="Tên Ảnh" />
                            </div>
                           
                            </div>
                            <button type="submit" class="btn btn-default">Lưu</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection 